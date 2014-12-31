@section('title')
    New Winner
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Winner</h1>

               <div class="row">

                <script>
                  $(function() {
                      $( "#datepicker" ).datepicker({
                       dateFormat: 'yy-mm-dd'
                      });

                  });
              </script>


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.winners.store','role'=>'form'))}}


                                <div class="form-group">
                                    {{Form::label('fullName',"Winner's Name")}}
                                    {{Form::text('fullName', null, array('class'=>'form-control', 'placeholder'=>"Winner's Name"))}}
                                    {{DisplayMessage::error('fullName', $errors)}}
                                </div>


                                <div class="form-group">

                                    {{Form::label('image',"Image")}}
                                        <div class="input-group">
                                          <span class="input-group-btn">

                                                <button class="btn btn-default" type="button">
                                                    <a href="/plugins/ResponsiveFilemanager/filemanager/dialog.php?type=1&amp;field_id=fieldID" class="iframe-btn">Upload
                                                </a>
                                                </button>


                                          </span>
                                        <input id="fieldID" type="text" name="image" class="form-control">
                                    </div><!-- /input-group -->


                                </div>
                                <div class="form-group">
                                    {{Form::label('winningDate','Winning Date')}}
                                    {{Form::text('winningDate', null, array('class'=>'form-control','placeholder'=>'Winning Date','id'=>'datepicker'))}}
                                    {{DisplayMessage::error('winningDate', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('recipeName',"Recipe Name")}}
                                    {{Form::text('recipeName', null, array('class'=>'form-control', 'placeholder'=>"Recipe Name"))}}
                                    {{DisplayMessage::error('recipeName', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('ingredients',"Ingredients")}}
                                    {{Form::textarea('ingredients', null,array('class'=>'form-control editme', 'placeholder'=>"Ingredients"))}}
                                    {{DisplayMessage::error('ingredients', $errors)}}
                                </div>


                                <div class="form-group">
                                    {{Form::submit('Add',array('class'=>'btn btn-primary', 'name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>

        <script>
            $(document).ready(function ($) {
                $('.iframe-btn').fancybox({
                    maxWidth	: 1000,
                    maxHeight	: 600,
                    fitToView	: false,
                    width		: '80%',
                    height		: '80%',
                    autoSize	: false,
                    closeClick	: false,
                    openEffect	: 'none',
                    closeEffect	: 'none',

                    'type': 'iframe',
                    'autoScale': false
                });
            });
        </script>


   </div>
@stop
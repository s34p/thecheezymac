@section('title')
    New Item
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Item</h1>

               <div class="row">




                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.merchandise.store','role'=>'form'))}}


                                <div class="form-group">
                                    {{Form::label('item_name',"Item Name")}}
                                    {{Form::text('item_name', null, array('class'=>'form-control', 'placeholder'=>"Item Name"))}}
                                    {{DisplayMessage::error('item_name', $errors)}}
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
                                    {{Form::label('price',"Price")}}
                                    {{Form::text('price', null, array('class'=>'form-control', 'placeholder'=>"Price"))}}
                                    {{DisplayMessage::error('price', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('description',"Description")}}
                                    {{Form::textarea('description', null,array('class'=>'form-control editme', 'placeholder'=>"Description"))}}
                                    {{DisplayMessage::error('description', $errors)}}
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

            @include('private.partials.tinymce')


   </div>
@stop
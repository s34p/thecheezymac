@section('title')
    New Comment
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Comment</h1>

               <div class="row">


                   <script>
                       $(function() {
                           $( "#datepicker" ).datepicker();

                       });
                   </script>

                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.comments.store','role'=>'form'))}}


                                <div class="form-group">
                                    {{Form::label('author','Author')}}
                                    {{Form::text('author', null, array('class'=>'form-control','placeholder'=>'Author'))}}
                                    {{DisplayMessage::error('author', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('body','Comment / Quote')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'Enter you comment'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>

                                <select name="visible" class="form-control" id="visible">
                                    <option value="0" selected="selected">No</option>
                                    <option value="1">Yes</option>
                                </select>


                                <div class="form-group">
                                    {{Form::submit('Post',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>



   </div>
@stop
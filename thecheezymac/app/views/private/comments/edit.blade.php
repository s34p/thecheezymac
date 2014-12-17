@section('title')
    Edit comment
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Edit</h1>

               <script>
                   $(function() {
                       $( "#datepicker" ).datepicker();
                   });
               </script>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::model($comment, ['method'=>'PUT','route'=>['webadmin.comments.update', $comment->id],'role'=>'form'])}}


                                <div class="form-group">
                                    {{Form::label('author','Author')}}
                                    {{Form::text('author', null, array('class'=>'form-control','placeholder'=>'Author'))}}
                                    {{DisplayMessage::error('author', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('body','Comment / Quote')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'Enter your comment'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('visible','Visible')}}
                                    {{Form::select('visible', ['0'=>'No','1'=>'Yes'],null, array('class'=>'form-control'))}}
                                    {{DisplayMessage::error('visible', $errors)}}
                                </div>



                                <div class="form-group">
                                    {{Form::submit('Update',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>

                          {{Form::close()}}
                          </div>
                        </div>

                    @include('private.partials.tinymce')


                   </div>
               </div>

           </div>




   </div>
@stop
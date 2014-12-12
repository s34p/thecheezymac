@section('title')
    New User
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Post</h1>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.news.store','role'=>'form'))}}

                                <div class="form-group">
                                    {{Form::label('title','News Title')}}
                                    {{Form::text('title', null, array('class'=>'form-control','placeholder'=>'News Title'))}}
                                    {{DisplayMessage::error('title', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('body','News Content')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'News Content'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::submit('Post',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>

            @include('private.partials.tinymce')


   </div>
@stop
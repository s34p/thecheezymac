@section('title')
    News
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
                                    {{Form::label('author','Author')}}
                                    {{Form::text('author', null, array('class'=>'form-control','placeholder'=>'Author'))}}
                                    {{DisplayMessage::error('author', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('created_at','Published On')}}
                                    {{Form::text('created_at', null, array('class'=>'form-control','placeholder'=>'Published On'))}}
                                    {{DisplayMessage::error('created_at', $errors)}}
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
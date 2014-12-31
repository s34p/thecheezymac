@section('title')
    Edit Blog
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">{{$blog->title}}</h1>

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
                          {{Form::model($blog, ['method'=>'PUT','route'=>['webadmin.blog.update', $blog->id],'role'=>'form'])}}

                                <div class="form-group">
                                    {{Form::label('title','Blog Title')}}
                                    {{Form::text('title', null, array('class'=>'form-control','placeholder'=>'Blog Title'))}}
                                    {{DisplayMessage::error('title', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('author','Author')}}
                                    {{Form::text('author', null, array('class'=>'form-control','placeholder'=>'Author'))}}
                                    {{DisplayMessage::error('author', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('created_at','Published On')}}
                                    {{Form::text('created_at', null, array('class'=>'form-control','placeholder'=>'Published On','id'=>'datepicker'))}}
                                    {{DisplayMessage::error('created_at', $errors)}}
                                </div>
                              <div class="form-group">

                                  {{Form::label('image',"Image")}}
                                  <div class="input-group">
                                          <span class="input-group-btn">

                                                <button class="btn btn-default" type="button">
                                                    <a href="/plugins/ResponsiveFilemanager/filemanager/dialog.php?type=1&amp;field_id=image" class="iframe-btn">Upload
                                                    </a>
                                                </button>


                                          </span>
                                      {{Form::text('image', null, array('class'=>'form-control', 'placeholder'=>'Item image','id'=>'image'))}}
                                  </div><!-- /input-group -->



                              </div>
                                <div class="form-group">
                                    {{Form::label('body','Blog Content')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'Blog Content'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::submit('Post',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>

                          {{Form::close()}}
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
               </div>

           </div>




   </div>
@stop
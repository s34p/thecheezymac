@section('title')
    Edit
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">{{$page->title}}</h1>



               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::model($page, ['method'=>'PUT','route'=>['webadmin.pages.update', $page->id],'role'=>'form'])}}

                                <div class="form-group">
                                    {{Form::label('title','Page Title')}}
                                    {{Form::text('title', null, array('class'=>'form-control','placeholder'=>'Page Title'))}}
                                    {{DisplayMessage::error('title', $errors)}}
                                </div>

                              <div class="form-group">

                                  {{Form::label('image',"Page's Photo")}}
                                  <div class="input-group">
                                            <span class="input-group-btn">

                                                  <button class="btn btn-default" type="button">
                                                      <a href="/plugins/ResponsiveFilemanager/filemanager/dialog.php?type=1&amp;field_id=fieldID" class="iframe-btn">Upload
                                                      </a>
                                                  </button>


                                            </span>

                                      {{Form::text('image', null, array('class'=>'form-control', 'placeholder'=>"Page's Photo",'id'=>'fieldID'))}}
                                  </div><!-- /input-group -->


                              </div>

                                <div class="form-group">
                                    {{Form::label('body','Page Content')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'Page Content'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>

                              <div class="form-group">
                                  {{Form::label('col_num','Column Number')}}
                                  {{Form::select('col_num', ['1'=>'1','2'=>'2'],null, array('class'=>'form-control'))}}
                                  {{DisplayMessage::error('col_num', $errors)}}
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




   </div>
@stop
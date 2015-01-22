@section('title')
    Menu File Download
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Downloadable Menu</h1>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::model($menuFile, ['method'=>'PUT','route'=>['webadmin.menuFile.update', $menuFile->id],'role'=>'form'])}}


                              <div class="form-group">

                                  {{Form::label('file_path',"Menu File")}}
                                  <div class="input-group">
                                          <span class="input-group-btn">

                                                <button class="btn btn-default" type="button">
                                                    <a href="/plugins/ResponsiveFilemanager/filemanager/dialog.php?type=1&amp;field_id=file_path" class="iframe-btn">Upload
                                                    </a>
                                                </button>


                                          </span>
                                      {{Form::text('file_path', null, array('class'=>'form-control', 'placeholder'=>'Menu File','id'=>'file_path'))}}
                                  </div><!-- /input-group -->


                                  {{DisplayMessage::error('file_path', $errors)}}

                              </div>

                                <div class="form-group">
                                    {{Form::submit('update',array('class'=>'btn btn-primary', 'name'=>'submit'))}}
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
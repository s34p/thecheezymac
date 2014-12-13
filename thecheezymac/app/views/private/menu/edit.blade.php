@section('title')
    Edit Menu Item
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">{{$menu->title}}</h1>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::model($menu, ['method'=>'PUT','route'=>['webadmin.menu.update', $menu->id],'role'=>'form'])}}

                                <div class="form-group">
                                    {{Form::label('name','Item Name')}}
                                    {{Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Item Name'))}}
                                    {{DisplayMessage::error('itemName', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('category_id','Category')}}
                                    <select name="category_id" class="form-control" id="category_id">
                                        @foreach($categories as $category)
                                            @if($menu->category_id == $category->id)
                                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                                            @else
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    {{DisplayMessage::error('category_id', $errors)}}
                                </div>

                              <div class="form-group">

                                  {{Form::label('image',"Item's Image")}}
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
                                    {{Form::label('description','Description')}}
                                    {{Form::textarea('description', null, array('class'=>'form-control editme', 'placeholder'=>'Description'))}}
                                    {{DisplayMessage::error('description', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::submit('update',array('class'=>'btn btn-primary', 'name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>

                    @include('private.partials.tinymce')


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
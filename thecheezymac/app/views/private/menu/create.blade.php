@section('title')
    New Menu Item
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Menu Item</h1>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.menu.store','role'=>'form'))}}

                                <div class="form-group">
                                    {{Form::label('name','Item Name')}}
                                    {{Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Item Name'))}}
                                    {{DisplayMessage::error('name', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('price','Price')}}
                                    {{Form::number('price', null, array('class'=>'form-control', 'placeholder'=>'Price','step'=>'any'))}}
                                    {{DisplayMessage::error('price', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('category_id','Category')}}

                                    <select name="category_id" class="form-control" id="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                    {{DisplayMessage::error('category_id', $errors)}}
                                </div>

                                <div class="form-group">

                                    {{Form::label('image',"Item's Image")}}
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
                                    {{Form::label('description','Description')}}
                                    {{Form::textarea('description', null, array('class'=>'form-control editme', 'placeholder'=>'Description'))}}
                                    {{DisplayMessage::error('description', $errors)}}
                                </div>

                                 <div class="form-group">
                                    {{Form::label('weekly_special','Is this item a weekly special?')}}

                                    <select name="weekly_special" class="form-control" id="weekly_special">
                                        <option value="0" selected="selected">No</option>
                                        <option value="1">Yes</option>
                                    </select>

                                    {{DisplayMessage::error('weekly_special', $errors)}}
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
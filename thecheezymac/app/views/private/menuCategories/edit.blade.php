@section('title')
    Edit Category
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">{{$category->name}}</h1>



               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::model($category, ['method'=>'PUT','route'=>['webadmin.category.update', $category->id],'role'=>'form'])}}

                                <div class="form-group">
                                    {{Form::label('name','Category Name')}}
                                    {{Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Category Name'))}}
                                    {{DisplayMessage::error('name', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('slug','Slug')}}
                                    {{Form::text('slug', null, array('class'=>'form-control', 'placeholder'=>'Slug', 'readonly'))}}
                                    {{DisplayMessage::error('name', $errors)}}
                                </div>



                                <div class="form-group">
                                    {{Form::submit('update',array('class'=>'btn btn-primary', 'name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>

                       <script>
                           var slug = $("#slug");
                           $("#name").keyup(function() {

                               slug.val(this.value.replace(/[\. ,:-]+/g, "").replace(/[^a-zA-Z 0-9]+/g, ""));
                           });
                       </script>



                   </div>
               </div>

           </div>






   </div>
@stop
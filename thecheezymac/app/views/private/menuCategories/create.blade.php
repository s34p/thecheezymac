@section('title')
    New Category
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">New Category</h1>

               <div class="row">


                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'webadmin.category.store','role'=>'form'))}}

                                <div class="form-group">
                                    {{Form::label('name','Category Name')}}
                                    {{Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Category Name'))}}
                                    {{DisplayMessage::error('name', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('slug','Slug')}}
                                    {{Form::text('slug', null, array('class'=>'form-control', 'id'=>'slug', 'placeholder'=>'Slug','readonly'))}}
                                    {{DisplayMessage::error('slug', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::submit('Add',array('class'=>'btn btn-primary', 'name'=>'submit'))}}
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

            @include('private.partials.tinymce')


   </div>
@stop
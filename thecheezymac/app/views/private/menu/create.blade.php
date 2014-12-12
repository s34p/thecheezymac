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
                                    {{DisplayMessage::error('itemName', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('category','Category')}}
                                    {{Form::select('category', [
                                        'specials'      =>  'Specials',
                                        'kids_meal'     =>  'Kids Meal',
                                        ] , null,
                                        [
                                        'class'         =>  'form-control',
                                        'placeholder'   =>  'Item Name',

                                        ])}}
                                    {{DisplayMessage::error('category', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('image',"Item's Image")}}
                                    {{Form::file('image', null, array('class'=>'form-control','placeholder'=>"Item's Image"))}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('description','Description')}}
                                    {{Form::textarea('description', null, array('class'=>'form-control editme', 'placeholder'=>'Description'))}}
                                    {{DisplayMessage::error('description', $errors)}}
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

            @include('private.partials.tinymce')


   </div>
@stop
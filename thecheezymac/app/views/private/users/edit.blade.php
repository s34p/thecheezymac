@section('title')
    New User
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Edit {{$user->first_name}} {{$user->last_name}}</h1>

               <div class="row">


                   <div class="login center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{--{{Form::open(array('route'=>'webadmin.users.store','role'=>'form'))}}--}}
                          {{Form::model($user, ['method'=>'PUT','route'=>['webadmin.users.update', $user->id],'role'=>'form'])}}

                                <div class="form-group">
                                    {{Form::label('first_name','First Name')}}
                                    {{Form::text('first_name', null, array('class'=>'form-control','placeholder'=>'First Name'))}}
                                    {{DisplayMessage::error('first_name', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('last_name','Last Name')}}
                                    {{Form::text('last_name', null, array('class'=>'form-control','placeholder'=>'Last Name'))}}
                                    {{DisplayMessage::error('last_name', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('email','Email Address')}}
                                    {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
                                    {{DisplayMessage::error('email', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Submit',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>

                                {{--<div class="form-group">--}}
                                    {{--{{Form::label('password','Password')}}--}}
                                    {{--{{Form::password('password', array('class'=>'form-control','placeholder'=>'Password'))}}--}}
                                    {{--{{DisplayMessage::error('password', $errors)}}--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--{{Form::label('password_confirmation','Confirm Password')}}--}}
                                    {{--{{Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password'))}}--}}
                                    {{--{{DisplayMessage::error('password_confirmation', $errors)}}--}}
                                {{--</div>--}}

                          {{Form::close()}}
                          </div>
                        </div>

                        <div class="panel panel-default">

                          <div class="panel-body">

                            {{Form::open(array('url'=>"/webadmin/users/passEdit/$user->id",'role'=>'form'))}}


                                <div class="form-group">
                                    {{Form::label('password','Password')}}
                                    {{Form::password('password', array('class'=>'form-control','placeholder'=>'Password'))}}
                                    {{DisplayMessage::error('password', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('password_confirmation','Confirm Password')}}
                                    {{Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password'))}}
                                    {{DisplayMessage::error('password_confirmation', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Change Password',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>

                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>




   </div>
@stop
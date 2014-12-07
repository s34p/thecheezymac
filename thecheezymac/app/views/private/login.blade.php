@section('title')
    Login
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Login Form</h1>

               <div class="row">


                   <div class="login center-block">

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                          </div>
                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('route'=>'login.process','role'=>'form'))}}
                                <div class="form-group">
                                    {{Form::label('email','Email Address')}}
                                    {{Form::email('email', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Email Address'))}}
                                    {{DisplayMessage::error('email', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('password','Password')}}
                                    {{Form::password('password', array('class'=>'form-control','required'=>'required','placeholder'=>'Password'))}}
                                    {{DisplayMessage::error('password', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Login',array('class'=>'btn btn-primary','name'=>'login'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>




   </div>
@stop
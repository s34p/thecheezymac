@section('title')
    Password Reminder
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Reset Your Password</h1>

               <div class="row">


                   <div class="login center-block">

                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Password Reset</h3>
                          </div>
                          <div class="panel-body">
                          {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                          {{Form::open(array('url'=>'/webadmin/reset-password/'.$userId.'/'.$resetCode,'role'=>'form'))}}
                                <div class="form-group">
                                    {{Form::label('password','Password')}}
                                    {{Form::password('password', array('class'=>'form-control','placeholder'=>'Password','required'=>'required'))}}
                                    {{DisplayMessage::error('password', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('password_confirmation','Confirm Password')}}
                                    {{Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password','required'=>'required'))}}
                                    {{DisplayMessage::error('password_confirmation', $errors)}}
                                </div>
                                <div class="form-group">
                                    {{Form::submit('Reset',array('class'=>'btn btn-primary','name'=>'login'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>




   </div>
@stop
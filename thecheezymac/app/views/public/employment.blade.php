@section('title')
    The Cheezy Mac Employment
@stop

@section('content')

            <div class="main">

                           <div class="wrapper">
                               <h1 class="heading">Submit Your Application</h1>


                               <script>
                                   $(function() {
                                       $( "#datepicker" ).datepicker();
                                   });
                               </script>


                                        <div class="row">
                                            {{DisplayMessage::sentryError(Session::get('sentryError'))}}
                                            {{DisplayMessage::success(Session::get('success'))}}
                                            {{Form::open(['url'=>'/employment','role'=>'form'])}}



                                                <div class="form-group">
                                                    {{Form::label('position','When can you start?')}} <span class="text-danger">*</span>
                                                    {{Form::select('position',['Chef'=>'Chef','Cashier'=>'Cashier','Dish Washer'=>'Dish Washer','Service Assistant'=>'Service Assistant'] ,null, array('class'=>'form-control','placeholder'=>'Position'))}}
                                                    {{DisplayMessage::error('position', $errors)}}
                                                </div>
                                                <div class="form-group">
                                                    {{Form::label('startDate','When can you start?')}} <span class="text-danger">*</span>
                                                    {{Form::text('startDate', null, array('class'=>'form-control','placeholder'=>'Start Date','id'=>'datepicker'))}}
                                                    {{DisplayMessage::error('startDate', $errors)}}
                                                </div>
                                                <div class="form-group">
                                                    {{Form::label('firstName','First Name')}} <span class="text-danger">*</span>
                                                    {{Form::text('firstName', null, array('class'=>'form-control','placeholder'=>'First Name'))}}
                                                    {{DisplayMessage::error('firstName', $errors)}}
                                                </div>
                                                <div class="form-group">
                                                    {{Form::label('lastName','Last Name')}} <span class="text-danger">*</span>
                                                    {{Form::text('lastName', null, array('class'=>'form-control','placeholder'=>'Last Name'))}}
                                                    {{DisplayMessage::error('lastName', $errors)}}

                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('email','Email Address')}} <span class="text-danger">*</span>
                                                    {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
                                                    {{DisplayMessage::error('email', $errors)}}
                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('phone','Phone Number')}}
                                                    {{Form::text('phone', null, array('class'=>'form-control','placeholder'=>'Phone Number'))}}
                                                    {{DisplayMessage::error('phone', $errors)}}
                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('additionalInfo','Additional Info')}}
                                                    {{Form::textarea('additionalInfo', null, array('class'=>'form-control','placeholder'=>'Additional Info'))}}
                                                    {{DisplayMessage::error('additionalInfo', $errors)}}
                                                </div>

                                                <div class="form-group">
                                                    {{Form::submit('Apply',array('class'=>'btn btn-primary','name'=>'send','id'=>'submit'))}}

                                                </div>

                                            {{Form::close()}}


                                        </div>





                           </div>



                   </div>

@stop
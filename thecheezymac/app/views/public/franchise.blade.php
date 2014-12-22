@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                               <div class="wrapper">
                                   <h1 class="heading">FRANCHISE INFO</h1>

                                   <div class="row">

                                       <div class="col-md-4 storypic">
                                           <img src="/img/storypic.jpg" alt=""/>
                                       </div>
                                       <div class="col-md-8 storytext">
                                            <h3>Franchise Info!</h3>

                                           <p>
Help us spread the love of gourmet Mac & Cheese! Our business plan is designed for profit and growth. If you’d like to learn more about franchise opportunities, please fill out the Information Request form below, or contact our corporate office at 844-624-3399. We look forward to hearing from you!                                            </p>


                                            <div id="NewsLetter">



                                                   {{DisplayMessage::success(Session::get('success'))}}
                                                   {{Form::open(array('route'=>'franchise.join','role'=>'form'))}}


                                                   <div class="form-group">
                                                       {{Form::label('fullName','Full Name')}}
                                                       {{Form::text('fullName', null, array('class'=>'form-control','placeholder'=>'Full Name'))}}
                                                       {{DisplayMessage::error('fullName', $errors)}}
                                                   </div>



                                                   <div class="form-group">
                                                       {{Form::label('phone','Phone Number')}}
                                                       {{Form::text('phone', null, array('class'=>'form-control','placeholder'=>'Phone Number'))}}
                                                       {{DisplayMessage::error('phone', $errors)}}
                                                   </div>

                                                   <div class="form-group">
                                                       {{Form::label('email','Email Address')}}
                                                       {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
                                                       {{DisplayMessage::error('email', $errors)}}
                                                   </div>

                                                   <div class="form-group">
                                                       {{Form::label('purchaseDate','When are you looking to purchase the franchise?')}}
                                                       {{Form::text('purchaseDate', null, array('class'=>'form-control','placeholder'=>'Purchase Date'))}}
                                                       {{DisplayMessage::error('purchaseDate', $errors)}}
                                                   </div>

                                                   <div class="form-group">
                                                       {{Form::label('city','What city/state are you looking to open a franchise?')}}
                                                       <div class="col-md-6" style="padding-left:0px !important; padding-bottom: 10px">
                                                       {{Form::text('city', null, array('class'=>'form-control','placeholder'=>'City'))}}
                                                       {{DisplayMessage::error('city', $errors)}}
                                                       </div>
                                                       <div class="col-md-6" style="padding-left:0px !important;">
                                                        {{Form::text('state', null, array('class'=>'form-control','placeholder'=>'State'))}}
                                                        {{DisplayMessage::error('state', $errors)}}
                                                       </div>
                                                       <div class="clearfix"></div>

                                                   </div>



                                                   <div class="form-group">
                                                       {{Form::label('amount','How much are you looking to invest?')}}
                                                       {{Form::select('amount',['undecided'=>'Undecided','$150000 - $349000'=>'$150000 - $349000','$350000 - $549000'=>'$350000 - $549000','Greater than $550000'=>'Greater than $550000'], 'undecided', array('class'=>'form-control','placeholder'=>'Purchase Date'))}}
                                                       {{DisplayMessage::error('amount', $errors)}}
                                                   </div>


                                                   <div class="form-group">
                                                       {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                                   </div>

                                                   {{Form::close()}}

                                               </div>
                                       </div>
                                       <div class="clearfix"></div>
                                   </div>

                               </div>




                       </div>

@stop
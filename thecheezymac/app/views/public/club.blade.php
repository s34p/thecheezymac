@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                               <div class="wrapper">
                                   <h1 class="heading">Loyalty Club</h1>

                                   <div class="row">

                                       <div class="col-md-4 storypic">
                                           <img src="/img/storypic.jpg" alt=""/>
                                       </div>
                                       <div class="col-md-8 storytext">
                                            <h3>LOYALTY CLUB</h3>

                                           <p>
Mac & Cheese lovers unite! Sign-up to receive the latest news, upcoming events, weekly specials, and exclusive “members only” coupons. Simply fill out the form below to “Join the Club” and instantly receive a “Buy One Entree, Get One Free” voucher.
                                            </p>
                                            <br>
                                            <h3>HOW IT WORKS</h3>

                                            <p>
                                            Earn 1 point for every dollar you spend. 90 points = free entree. Also, be sure to ask for your Cheezy Mac passport (punch card). Complete the form below to become a loyalty club member. Throughout the year, we offer exclusive specials to loyalty club members. You may pick up your card when you arrive at the restaurant.
                                            </p>

                                           <div id="NewsLetter">



                                               {{DisplayMessage::success(Session::get('success'))}}
                                               {{Form::open(array('route'=>'newsletter.subscribe','role'=>'form'))}}


                                               <div class="form-group">
                                                   {{Form::label('firstName','First Name')}}
                                                   {{Form::text('firstName', null, array('class'=>'form-control','placeholder'=>'First Name'))}}
                                                   {{DisplayMessage::error('firstName', $errors)}}
                                               </div>

                                               <div class="form-group">
                                                   {{Form::label('lastName','Last Name')}}
                                                   {{Form::text('lastName', null, array('class'=>'form-control','placeholder'=>'Last Name'))}}
                                                   {{DisplayMessage::error('lastName', $errors)}}
                                               </div>

                                               <div class="form-group">
                                                   {{Form::label('email','Email Address')}}
                                                   {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
                                                   {{DisplayMessage::error('email', $errors)}}
                                               </div>
                                               <div class="form-group">
                                                   {{Form::submit('Subscribe',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                               </div>

                                               {{Form::close()}}

                                           </div>


                                       </div>
                                       <div class="clearfix"></div>
                                   </div>

                               </div>




                       </div>

@stop
@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                           <div class="wrapper">
                               <h1 class="heading">Contact Us</h1>

                               <div class="row">


                                   <div class="col-md-8 storytext">

                                        <div class="commentForm" style="display: none">
                                            <h3>Tell Us About Your Visit!</h3>
                                            <div class="form-group">
                                                {{Form::label('name','Your Name')}}
                                                {{Form::text('name', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Your Name'))}}
                                            </div>

                                            <div class="form-group">
                                                {{Form::label('email','Email Address')}}
                                                {{Form::email('email', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Email Address'))}}
                                            </div>

                                            <div class="form-group">
                                                {{Form::label('phone','Phone Number')}}
                                                {{Form::text('phone', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Phone Number'))}}
                                            </div>

                                            <div class="form-group">
                                                {{Form::label('comment','Your Comment')}}
                                                {{Form::textarea('comment', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Your Comment'))}}
                                            </div>


                                        </div>


                                       <div class="row contact-text">
                                       <h3>Franchise Info!</h3>
                                       <div>
                                           3031 Richmond Road, Suite 120 <br/>
                                           Lexington, KY 40509 <br/><br/>
                                           <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                                           <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)<br/><br/>
                                       </div>

                                            <h3>Your Voice Matters!</h3>
                                           <div class="col-sm-6 no-left-padding">
                                                 <h4>
                                                    <a class="btn dark-button large-button commentButton">
                                                        Comments
                                                     </a>
                                                 </h4>

                                                  <h4>
                                                     <a href="" class="btn dark-button large-button">
                                                         Catering Questions
                                                      </a>
                                                  </h4>

                                           </div>
                                           <div class="col-sm-6 no-left-padding">
                                               <h4>
                                                   <a href="/comments" class="btn dark-button large-button">
                                                       General Questions
                                                    </a>
                                                </h4>
                                                 <h4>
                                                   <a href="/comments" class="btn dark-button large-button">
                                                       Franchise Questions
                                                    </a>
                                                </h4>
                                           </div>
                                        </div>
                                   </div>
                                    <div class="col-md-4 storypic">
                                      <img src="/img/storypic.jpg" class="img-thumbnail" alt=""/>
                                  </div>
                                   <div class="clearfix"></div>
                               </div>

                           </div>

                            <script>
                                $(document).ready(function()
                                {
                                $(".commentButton").click(function(){
                                    $(".contact-text").fadeOut(500);
                                    $(".commentForm").slide("2500");
                                });
                                });

                            </script>


                   </div>

@stop
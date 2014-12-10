@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                           <div class="wrapper">
                               <h1 class="heading">Contact Us</h1>




                                   <div class="col-md-8 storytext">

                                        <div class="commentForm" style="display: none">
                                            <h3>Tell Us About Your Visit!</h3>


                                            <div class="form-group hidden">
                                                {{Form::label('subject','Subject')}}
                                                {{Form::hidden('subject', null, array('class'=>'form-control','required'=>'required','placeholder'=>'Subject'))}}
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
                                            <div class="form-group">
                                                {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'send'))}}
                                                <a href="/contact-us">
                                                <button class="btn btn-primary">
                                                    <i class="fa fa-arrow-circle-o-left"></i> Go Back
                                                </button>
                                                </a>
                                            </div>

                                        </div>


                                       <div class="row contact-text ">
                                       <h3>Franchise Info!</h3>
                                       <div>
                                           3031 Richmond Road, Suite 120 <br/>
                                           Lexington, KY 40509 <br/><br/>
                                           <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                                           <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)<br/><br/>
                                       </div>
                                            <br>
                                            <br>
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
                                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d702.6787587909714!2d-84.44939946346723!3d38.005527984431936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88425aba9560b5b7%3A0x129cd72270d2610e!2s3031+Richmond+Rd+%23120!5e1!3m2!1sen!2sus!4v1417555847740" width="275" height="371" frameborder="0" style="border:0"></iframe>
                                  </div>
                                   <div class="clearfix"></div>


                           </div>

                            <script>
                                $(document).ready(function()
                                {
                                    $(".commentButton").click(function(){
                                        $(".contact-text").fadeOut(500);
                                        $(".commentForm").slideDown("slow");
                                        $('input[name="subject"]').val("Comment");
                                    });
                                });

                            </script>


                   </div>

@stop
@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                           <div class="wrapper">
                               <h1 class="heading">Contact Us</h1>




                                   <div class="col-md-8">

                                        <div class="commentForm row" style="display: none">
                                            <h3>
                                            <span class="formTitle"></span>
                                             <a href="/contact-us" class="pull-right">
                                            <button class="btn btn-default">
                                                <i class="fa fa-arrow-circle-o-left"></i> Go Back
                                            </button>
                                            </a>
                                            </h3>
                                            <div class="displayMessage"></div>
                                            {{Form::open(array('role'=>'form','id'=>'contact'))}}

                                                <div class="form-group hidden">
                                                    {{Form::label('subject','Subject')}}
                                                    {{Form::hidden('subject', null, array('class'=>'form-control','placeholder'=>'Subject'))}}

                                                </div>

                                                 <div class="form-group">
                                                    {{Form::label('fullName','Your Name')}} <span class="text-danger">*</span>
                                                    {{Form::text('fullName', null, array('class'=>'form-control','placeholder'=>'Your Name'))}}
                                                    <div id ="fullName_error"></div>
                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('email','Email Address')}} <span class="text-danger">*</span>
                                                    {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
                                                    <div id ="email_error"></div>
                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('phone','Phone Number')}}
                                                    {{Form::text('phone', null, array('class'=>'form-control','placeholder'=>'Phone Number','data-mask'=>'(999) 999 9999'))}}
                                                    <div id ="phone_error"></div>
                                                </div>

                                                <div class="form-group">
                                                    {{Form::label('comment','Your Comment')}} <span class="text-danger">*</span>
                                                    {{Form::textarea('comment', null, array('class'=>'form-control','placeholder'=>'Your Comment'))}}
                                                    <div id ="comment_error"></div>
                                                </div>
                                                <div class="form-group">
                                                    {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'send','id'=>'submit'))}}

                                                </div>

                                            {{Form::close()}}


                                        </div>


                                       <div class="row contact-text">
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
                                                     <a class="btn dark-button large-button cateringQuestionsButton">
                                                         Catering Questions
                                                      </a>
                                                  </h4>

                                           </div>
                                           <div class="col-sm-6 no-left-padding">
                                               <h4>
                                                   <a class="btn dark-button large-button generalQuestionsButton">
                                                       General Questions
                                                    </a>
                                                </h4>
                                                 <h4>
                                                   <a class="btn dark-button large-button franchiseQuestionsButton">
                                                       Franchise Questions
                                                    </a>
                                                </h4>
                                           </div>
                                        </div>
                                   </div>
                                    <div class="col-md-4 storypic">
<iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1730.1092312436806!2d-84.44593081260318!3d38.002943936450485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e2!4m0!4m3!3m2!1d38.0031721!2d-84.4459408!5e1!3m2!1sen!2sus!4v1418933275779" width="275" height="371" frameborder="0" style="border:0"></iframe>
                                          <p>
                                         <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                                         <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)
                                         </p>
                                  </div>
                                   <div class="clearfix"></div>

                           </div>

                            <script>
                                $(document).ready(function()
                                {
                                    $(".commentButton").click(function(){
                                        $(".formTitle").html('Tell Us About Your Visit');
                                        $(".contact-text").fadeOut(500);
                                        $(".commentForm").slideDown("slow");
                                        $('input[name="subject"]').val("Comment");
                                    });
                                    $(".cateringQuestionsButton").click(function(){
                                        $(".formTitle").html('Catering Questions');
                                        $(".contact-text").fadeOut(500);
                                        $(".commentForm").slideDown("slow");
                                        $('input[name="subject"]').val("Catering Questions");
                                    });
                                    $(".generalQuestionsButton").click(function(){
                                        $(".formTitle").html('General Questions');
                                        $(".contact-text").fadeOut(500);
                                        $(".commentForm").slideDown("slow");
                                        $('input[name="subject"]').val("General Questions");
                                    });
                                    $(".franchiseQuestionsButton").click(function(){
                                        $(".formTitle").html('Franchise Questions');
                                        $(".contact-text").fadeOut(500);
                                        $(".commentForm").slideDown("slow");
                                        $('input[name="subject"]').val("Franchise Questions");
                                    });

                                    $("#contact").submit(function(e)
                                    {
                                        e.preventDefault();

                                        $("#submit").attr('value','Sending please wait...');


                                        $.ajax({
                                            type    :'POST',
                                            url     :'/comments',
                                            data    :$(this).serialize(),
                                            dataType:'json',
                                            success: function(result)
                                            {
                                                if(result.success == false)
                                                {
                                                   $("#submit").attr('value','Send');
                                                    $.each(result.errors, function( index, value ) {
                                                            var errorDiv = '#'+index+'_error';
                                                            $(errorDiv).addClass('text-danger');
                                                            $(errorDiv).empty().append(value);
                                                    });
                                                 }
                                                 else
                                                 {
                                                   $("#submit").attr('value','Send');
                                                    $(".text-danger").hide();
                                                    $(".displayMessage").addClass('alert alert-success').empty().append(result.msg);
                                                 }
                                            }

                                        });
                                    });

                                });

                            </script>


                   </div>

@stop
                <div class="footer ">


                    <div class="col-md-4 dashed-border">
                        <div>
                            <div ><img src="/img/gflogopurple.png" alt=""/>
                            <img src="/img/freestylelogo.jpg" style="width:120px"  alt="" />
                            </div>

                            <div class="recycleLogo">
                                <img src="/img/recyclelogo.png" style="width:60px" alt=""/>
                                <div class="recycleLogo-text"><small>We are proud to be an eco-friendly, environmentally conscious restaurant</small></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 dashed-border">
                        <div>
                            <ul class="footer-list-items">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">NEWS</a></li>
                                <li><a href="#">GIFT CARDS</a></li>
                                <li><a href="#">LOYALTY CLUB</a></li>
                                <li><a href="#">OUR STORY</a></li>
                                <li><a href="#">OUR MENU</a></li>
                                <li><a href="#">OUR SPECIALS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <ul class="footer-list-items">
                            <li><a href="#">DOWNLOAD OUR APP</a></li>
                            <li><a href="#">FRANCHISE INFO</a></li>
                            <li><a href="#">EMPLOYMENT</a></li>
                            <li><a href="#">PRESS/MEDIA</a></li>
                            <li><a href="#">WEEKLY WINNER</a></li>
                            <li><a href="#">CATERING</a></li>
                            <li><a href="#">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d702.6787587909714!2d-84.44939946346723!3d38.005527984431936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88425aba9560b5b7%3A0x129cd72270d2610e!2s3031+Richmond+Rd+%23120!5e1!3m2!1sen!2sus!4v1417555847740" width="208" height="100" frameborder="0" style="border:0"></iframe>
                        </div>
                        <div class="footer-contactus">
                            3031 Richmond Road, Suite 120 <br/>
                            Lexington, KY 40509 <br/>
                            <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                            <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="subfooter">


                    <div class="col-md-8 ads">
                        DESIGNED BY: STUDIO 34 PRODUCTIONS
                    </div>
                    <div class="col-md-4 social-network">
                        <a href="#" class="facebook"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#" class="google"><i class="fa fa-google fa-2x"></i></a>
                        <a href="#" class="youtube"><i class="fa fa-youtube fa-2x"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram fa-2x"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>

         </div>

         <script type="text/javascript">
             $(document).ready(function(){
         //            FLIR.init();
         //            FLIR.auto([ 'h1', 'h2']);

                 var activeButton = "<?php echo Request::segment(1); ?>";

                 /**
                  * Button Hover
                  * @type {string}
                  */
                     $(".menu-button img").mouseover(function()
                      {

                          if($(this).attr('data-link') != activeButton)
                          {
                             var navButton = $(this).attr('src');
                              var navHover = navButton.replace(".png","-hover.png");
                              $(this).attr('src',navHover);
                          }

                      });
                      $(".menu-button img").mouseout(function()
                      {

                          if($(this).attr('data-link') != activeButton)
                          {
                             var navButton = $(this).attr('src');
                              var navHover = navButton.replace("-hover", "");
                              $(this).attr('src', navHover);
                          }
                      });





                 $("nav ul li a img").each(function()
                 {
                       //var classVal = $(this).attr("data-link");

                     if(activeButton == $(this).attr("data-link"))
                     {

                         var navButton = $(this).attr('src');
                         var navHover = navButton.replace(".png","-hover.png");
                         $(this).attr('src',navHover);
                     }
                 });

                         $('.navbar .dropdown').hover(function() {
                 		  $(this).find('.dropdown-menu').first().stop(true, true).slideDown("slow");
                 		}, function() {
                 		  $(this).find('.dropdown-menu').first().stop(true, true).slideUp("slow")
                 		});
                });
             </script>


</body>
</html>
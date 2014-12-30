                <div class="footer ">


                    <div class="col-md-4 dashed-border">
                        <div>
                            <div ><img src="/img/gflogopurple.png" class="img-circle gflogo" alt="Gluten Free Logo"/>
                            <img src="/img/freestylelogo.jpg" class="freestylelogo"  alt="Freestyle Logo" />
                            </div>

                            <div class="recycleLogo">
                                <img src="/img/recyclelogo.png" class="recyclelogo" alt="Recycle Logo"/>
                                <div class="recycleLogo-text"><small>We are proud to be an eco-friendly, environmentally conscious restaurant</small></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 dashed-border">
                        <div>
                            <ul class="footer-list-items">
                                <li><a href="/">HOME</a></li>
                                <li><a href="/our-news">NEWS</a></li>
                                <li><a href="/giftcard">GIFT CARDS</a></li>
                                <li><a href="/club">LOYALTY CLUB</a></li>
                                <li><a href="/story">OUR STORY</a></li>
                                <li><a href="/menu/">OUR MENU</a></li>
                                <li><a href="/menu/Specials">OUR SPECIALS</a></li>
                                <li><a href="/merchandise">MERCHANDISE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <ul class="footer-list-items footer-link-2">
                            <li><a href="/app">DOWNLOAD OUR APP</a></li>
                            <li><a href="/franchise">FRANCHISE INFO</a></li>
                            <li><a href="/employment">EMPLOYMENT</a></li>
                            <li><a href="/press-media">PRESS/MEDIA</a></li>
                            <li><a href="#">RECIPE WINNER</a></li>
                            <li><a href="/catering">CATERING</a></li>
                            <li><a href="/contact-us">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <div>
                        </div>
                        <div class="footer-contactus">
                            3031 Richmond Road, Suite 120 <br/>
                            Lexington, KY 40509 <br/>
                            <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                            <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)<br/>
                            <i class="glyphicon glyphicon-envelope"></i> corp@thecheezymac.com (Corporate)
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="subfooter">


                    <div class="col-md-8 ads">
                        DESIGNED BY: STUDIO 34 PRODUCTIONS
                    </div>
                    <div class="col-md-4 social-network">
                        <a href="http://facebook.com/thecheezymac"  target="_blank" class="facebook">
                        <img src="/img/social/facebook.png" alt="Facebook">
                        </a>
                        <a href="http://twitter.com/thecheezymac" target="_blank"  class="twitter">
                        <img src="/img/social/twitter.png" alt="Twitter">
                        </a>
                         <a href="#" class="google">
                         <img src="/img/social/google.png" alt="Google">
                        </a>
                        <a href="http://pinterest.com/thecheezymac" target="_blank" class="pinterest">
                        <img src="/img/social/pinterest.png" alt="Pinterest">
                        </a>
                        <a href="http://instagram.com/thecheezymac" target="_blank" class="instagram">
                        <img src="/img/social/instagram.png" alt="Instagram">
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

         </div>

                {{HTML::script('/js/thecheezymac.js')}}

                {{HTML::script('/plugins/tinymce/js/tinymce/tinymce.min.js')}}

                {{HTML::script('/plugins/fancybox/source/jquery.fancybox.pack.js')}}

                <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->

                <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165"></script>



         <script type="text/javascript">
             $(document).ready(function(){

                 $(".fancybox").fancybox();


                 if (window.attachEvent && !window.addEventListener) {
                     alert("Please Upgrade your browser to Internet Explorer 9 or higher. If you are using windows XP, please use chrome or firefox to view our website");
                 }

                 if(navigator.appVersion.indexOf("MSIE 9.")!=-1)
                 {
                    $("h4 a").removeClass('dark-button').addClass('ie-dark-button');
                 }



                 $('#datatable').DataTable();

                 $('.recycleLogo img').hover(function(){
                      $(this).attr('src','/img/recyclelogo-hover.png');
                   }, function(){
                      $(this).attr('src','/img/recyclelogo.png');
                   });




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
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <ul class="footer-list-items footer-link-2">
                            <li><a href="/app">DOWNLOAD OUR APP</a></li>
                            <li><a href="/franchise">FRANCHISE INFO</a></li>
                            <li><a href="/employment">EMPLOYMENT</a></li>
                            <li><a href="/press-media">PRESS/MEDIA</a></li>
                            <li><a href="#">WEEKLY WINNER</a></li>
                            <li><a href="/catering">CATERING</a></li>
                            <li><a href="/contact-us">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 dashed-border">
                        <div>
<iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1730.1092312436806!2d-84.44593081260318!3d38.002943936450485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e2!4m0!4m3!3m2!1d38.0031721!2d-84.4459408!5e1!3m2!1sen!2sus!4v1418933275779" width="200" height="100" frameborder="0" style="border:0"></iframe>                        </div>
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
                        <a href="#" class="facebook"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="#" class="google"><i class="fa fa-google fa-2x"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest fa-2x"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram fa-2x"></i></a>
                    </div>

                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>

         </div>




        {{HTML::script('/plugins/fancybox/source/jquery.fancybox.pack.js')}}

            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165"></script>


        {{--<script>--}}
        {{--$(document).ready( function () {--}}
            {{--$('#datatable').DataTable();--}}
        {{--} );--}}
        {{--</script>--}}

         <script type="text/javascript">
             $(document).ready(function(){

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
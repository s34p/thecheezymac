<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

        {{HTML::style('/plugins/fancybox/source/jquery.fancybox.css')}}

        {{HTML::style('/css/min/thecheezymac.css')}}

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


        <style>
            .gflogo{
                border:thin solid white
            }
            .freestylelogo{
                padding-left:20px
            }
            .recyclelogo{
                width:60px
            }
        </style>


</head>
<body>


    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list">
                <a href="/"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                <a href="/story"><i class="fa fa-fw fa-file-text"></i><span>Our Story</span></a>
                <a href="/menu/FoodForThought"><i class="fa fa-fw fa-cutlery"></i><span>Menu</span></a>
                <a href="/catering"><i class="fa fa-fw fa-group"></i><span>Catering</span></a>
                <a href="/our-news"><i class="fa fa-fw fa-newspaper-o"></i><span>News</span></a>
                <a href="/our-blog"><i class="fa fa-fw fa-file-o"></i><span>Blog</span></a>
                <a href="/club"><i class="fa fa-fw fa-gift"></i><span>Loyalty Club</span></a>
                <a href="/contact-us"><i class="fa fa-fw fa-envelope"></i><span>Contact Us</span></a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>

    <button type="button" class="navbar-toggle navbar-fixed-top" id="open-button" style="color:white">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-th-list fa-2x"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
   </button>


        <div class="container text-center">

        <div class="col-lg-10">




            <div class="header">
                {{--<button class="menu-btn" id="open-button">Open Menu</button>--}}
                <div class="logo">
                    <a href="/">
                    <img src="/img/logo.png" class="img-responsive" alt="The cheezy Mac Logo"/>

                    </a>
                </div>
                <div class="menu">
                    <nav class="navbar" id="myNavmenu" role="navigation">
                        <div class="container-fluid">





                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse mynavbar clearfix" id="mainNavbar">
                              <ul class="nav navbar-nav ">

                                @if(Request::segment(1) != "" AND Request::segment(1) != "home")
                                    <li><a href="/" class="menu-button"><img src="/img/buttons/home.png" class="home img-responsive" alt=""/></a></li>
                                @endif

                                <li><a href="/story" class="menu-button"><img  src="/img/buttons/story.png" data-link="story" class=" img-responsive" alt="Our Story"/></a></li>
                                <li><a href="/menu/BuildYourOwn" class="menu-button"><img  src="/img/buttons/menu.png" data-link="menu" class=" img-responsive" alt="Menu"/></a></li>

                                <li><a href="/catering" class="menu-button"><img  src="/img/buttons/catering.png" data-link="catering" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/our-news" class="menu-button"><img  src="/img/buttons/news.png" data-link="our-news" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/our-blog" class="menu-button"><img  src="/img/buttons/blog.png" data-link="our-blog" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/club" class="menu-button"><img  src="/img/buttons/loyalty.png" data-link="club" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/contact-us" class="menu-button"><img  src="/img/buttons/contact.png" data-link="contact-us" class=" img-responsive" alt=""/></a></li>

                              </ul>



                            </div><!-- /.navbar-collapse -->

                     </div><!-- /.container-fluid -->


                    </nav>


                </div>
            </div>
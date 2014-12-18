<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

        {{HTML::style('/plugins/fancybox/source/jquery.fancybox.css')}}



        {{HTML::style('/css/min/thecheezymac.css')}}

        {{HTML::script('/js/thecheezymac.js')}}


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



        <div class="container text-center">
        <div class="col-lg-10">


            <div class="header">
                <div class="logo">
                    <a href="/"><img src="/img/logo.png" class="img-responsive" alt="The cheezy Mac Logo"/></a>
                </div>
                <div class="menu">
                    <nav class="navbar">
                        <div class="container-fluid">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed btn btn-warning custom-toggle pull-left" data-toggle="collapse" data-target="#mainNavbar">
                                <span class="">Navigation</span>

                              </button>

                            </div>

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
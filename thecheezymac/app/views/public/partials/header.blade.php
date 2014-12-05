<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>

{{HTML::style('plugins/bootstrap/css/bootstrap.min.css')}}
{{HTML::style('plugins/bootstrap/css/bootstrap-theme.min.css')}}
{{HTML::style('plugins/bootstrap/css/offcanvas.css')}}
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
{{HTML::style('css/thecheezymac.css')}}

    {{HTML::script('/js/jquery.min.js')}}
    {{HTML::script('/plugins/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('/plugins/bootstrap/js/offcanvas.js')}}
{{--    {{HTML::script('/plugins/facelift/flir.js')}}--}}
    {{HTML::script('/js/thecheezymac.js')}}



</head>
<body>
        <div class="container text-center">
        <div class="col-lg-10">


            <div class="header">
                <div class="logo">
                    <img src="/img/logo.png" class="img-responsive" alt="The cheezy Mac Logo"/>
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
                               {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu" role="menu">--}}
                                  {{--<li><a href="#">Action</a></li>--}}
                                  {{--<li><a href="#">Another action</a></li>--}}
                                  {{--<li><a href="#">Something else here</a></li>--}}
                                  {{--<li class="divider"></li>--}}
                                  {{--<li><a href="#">Separated link</a></li>--}}
                                  {{--<li class="divider"></li>--}}
                                  {{--<li><a href="#">One more separated link</a></li>--}}
                                {{--</ul>--}}
                              {{--</li>--}}
                                {{--<li><a href="/" class="menu-button"><img src="/img/buttons/home.png" class="home" alt=""/></a></li>--}}
                                @if(Request::segment(1) != "" AND Request::segment(1) != "home")
                                    <li><a href="/" class="menu-button"><img src="/img/buttons/home.png" class="home img-responsive" alt=""/></a></li>
                                @endif

                                <li><a href="/story" class="menu-button"><img  src="/img/buttons/story.png" data-link="story" class=" img-responsive" alt=""/></a></li>
                                <li class="dropdown">
                                    <a href="/menu" class="menu-button dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img  src="/img/buttons/menu.png" data-link="menu" class=" img-responsive" alt=""/></a>
                                    <ul class="dropdown-menu" role="menu">
                                         <li><a href="/menu" class="menu-button"><img  src="/img/buttons/menu.png" data-link="menu" class=" img-responsive" alt=""/></a></li>
                                         <li><a href="/specials" class="menu-button"><img  src="/img/buttons/specials.png" data-link="specials" class=" img-responsive" alt=""/></a></li>

                                    </ul>
                                </li>
                                <li><a href="/catering" class="menu-button"><img  src="/img/buttons/catering.png" data-link="catering" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/blog" class="menu-button"><img  src="/img/buttons/news.png" data-link="blog" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/giftcard" class="menu-button"><img  src="/img/buttons/giftcard.png" data-link="giftcard" class="giftcard img-responsive" alt=""/></a></li>
                                <li><a href="/club" class="menu-button"><img  src="/img/buttons/loyalty.png" data-link="club" class=" img-responsive" alt=""/></a></li>
                                <li><a href="/contact-us" class="menu-button"><img  src="/img/buttons/giftcard.png" data-link="contact-us" class=" img-responsive" alt=""/></a></li>

                              </ul>



                            </div><!-- /.navbar-collapse -->

                     </div><!-- /.container-fluid -->


                    </nav>


                </div>
            </div>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title')</title>

{{HTML::style('plugins/bootstrap/css/bootstrap.min.css')}}
{{HTML::style('plugins/bootstrap/css/bootstrap-theme.min.css')}}
{{HTML::style('css/thecheezymac.css')}}

    {{HTML::script('/js/jquery.min.js')}}
    {{HTML::script('/plugins/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('plugins/facelift/flir.js')}}
    <script type="text/javascript">
        //FLIR.init();
        //FLIR.auto([ 'h1', 'h2']);
    </script>
    <script>
        $(document).ready(function() {
            $(".menu-button img").mouseover(function()
            {


                    var navButton = $(this).attr('src');
                    var navHover = navButton.replace(".png","-hover.png");
                    $(this).attr('src',navHover);
            });
          $(".menu-button img").mouseout(function()
            {

                var navButton = $(this).attr('src');
                var navHover = navButton.replace("-hover","");
                $(this).attr('src',navHover);
          });

          var activeButton = "<?php echo Request::segment(1); ?>";
          $("nav ul li a img").each(function()
          {
                if(activeButton == $(this).attr("class"))
                {
                    var navButton = $(this).attr('src');
                    var navHover = navButton.replace(".png","-hover.png");
                    $(this).attr('src',navHover);
                }

          });
        });

    </script>
</head>
<body>
        <div class="container text-center">
            <div class="header col-lg-10">
                <div class="logo">
                    <img src="/img/logo.png" alt="The cheezy Mac Logo"/>
                </div>
                <div class="menu">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse " id="mainNavbar">
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
                                <li><a href="/" class="menu-button"><img src="/img/buttons/story.png" class="story" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/specials.png" class="specials" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/menu.png" class="menu" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/catering.png" class="catering" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/news.png" class="news" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/giftcard.png" class="giftcard" alt=""/></a></li>
                                <li><a href="/" class="menu-button"><img src="/img/buttons/loyalty.png" class="loyalty" alt=""/></a></li>

                              </ul>

                            </div><!-- /.navbar-collapse -->
                     </div><!-- /.container-fluid -->


                    </nav>


                </div>
            </div>
@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main-index">
                {{--Slideshow--}}


                <div id="carousel-example-generic" class="carousel slide custom-slider hidden-xs" data-ride="carousel" >
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/img/slide1.jpg" alt="Slide 1">

                    </div>
                    {{--<div class="item">--}}
                      {{--<img src="/img/slide1.jpg" alt="Slide 1">--}}

                    {{--</div>--}}

                  </div>

                  <!-- Controls -->
                  {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
                    {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                  {{--</a>--}}
                  {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
                    {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                  {{--</a>--}}
                </div>

                <div class="visible-xs"  style="padding:0px; margin: 0px;">
                    <img src="/img/slide1.jpg" class="img-responsive" alt=""/>
                </div>

                <div class="row important-links">

                <div class="home-menu">

                    <ul class="list-group">
                      <a href="/menu/BuildYourOwn"><li class="list-group-item" ><i class="fa fa-fw fa-cutlery pull-left"></i> <span>Menu</span>  </li></a>
                      <a href="/catering"><li class="list-group-item" ><i class="fa fa-fw fa-group pull-left"></i> <span>Catering</span>  </li></a>
                      <a href="/our-news"><li class="list-group-item" ><i class="fa fa-fw fa-newspaper-o pull-left"></i> <span>News</span>  </li></a>
                      <a href="/our-blog"><li class="list-group-item" ><i class="fa fa-fw fa-file-o pull-left"> </i> <span>Blog</span>  </li></a>
                      <a href="/club"><li class="list-group-item" > <i class="fa fa-fw fa-gift pull-left"></i> <span>Loyalty Club</span>  </li></a>
                      <a href="/contact-us"><li class="list-group-item" ><i class="fa fa-fw fa-envelope pull-left"></i> <span>Contact Us</span>  </li></a>

                    </ul>
                </div>


                <div class="col-sm-3 hidden-xs">
                    <a href="/giftcard"><img  src="/img/giftcardhomebutton.png" class="img-responsive"  alt="Gift Card"/></a>
                </div>
                <div class="col-sm-3 hidden-xs" style="">
                    <a href="/gallery"><img  src="/img/photogalleryhomebutton.png" class="img-responsive"  alt="Photo Gallery"/></a>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <a href="/winners"><img  src="/img/reciepewinnerhomebutton.png" class="img-responsive" alt="Reciepe Winners"/></a>
                </div>

                <div class="col-sm-3">
                    <a href="/app"><img  src="/img/applogo.png" class="img-responsive" alt="Download Our App"/></a>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>

@stop
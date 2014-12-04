@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">
                {{--Slideshow--}}


                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/img/slide1.jpg" alt="Slide 1">

                    </div>
                    <div class="item">
                      <img src="/img/slide1.jpg" alt="Slide 1">

                    </div>


                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="row important-links">


                {{--<div class="col-md-3">--}}
                    {{--<img  src="/img/storylogo.png" alt="Our Story"/>--}}
                {{--</div>--}}
                <div class="col-md-3">
                    <img  src="/img/speciallogo.png" alt="Weekly Specials"/>
                </div>
                <div class="col-md-3">
                    <img  src="/img/caterlogo.png" alt="Let Us Cater"/>
                </div>
                <div class="col-md-3">
                    <img  src="/img/menulogo.png" alt="Menu"/>
                </div>
                <div class="col-md-3">
                    <img  src="/img/applogo.png" alt="Download Our App"/>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>

@stop
@section('title')
    Monthly Winners
@stop

@section('content')

            <link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>

            <div class="main">

                               <div class="wrapper">
                                   <h1 class="heading">Monthly Winners</h1>

                                   <div class="row" style="margin-left:0px; margin-right: 0px">


                                    <!-- Portfolio Start
                                      ================================================== -->

                                      <section class="clearfix full-width PortfolioSection">
                                       {{--<hr class="vertical-space2">--}}
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portfolioItems" id="">



                                        <h3 style="margin-top:0px">How to enter</h3>
                                        <p style="padding-bottom: 20px">
                                        Build Your Own macaroni masterpiece, ask cashier for a recipe card. Write down your recipe and drop it in the designated box. If you're chosen as the "guest chef" with the most unique and tasty dish, it will be featured for one month in our restaurant, on our website and social media channels. Also, you will receive one free entree per week during the month your dish is featured. Good luck and have fun!
                                        </p>
                                    <div class="portfolio">

                                    @foreach($winners as $winner)
                                        <div class="winnerBg" style="padding:40px 40px 0px 40px; margin-bottom: 40px">


                                        <figure class="portfolio-item col-sm-4" >
                                        <div class="img-item">  <img src="{{$winner->image}}" class="img-responsive img-thumbnail" style="width:100%; border: thin solid white" alt=""> </div>
                                        <figcaption ><h4 style="text-align: center !important;padding-right:15px !important; margin-bottom: 0px !important;"><a href="portfolio-item.html" style="color: #ffff00">{{$winner->fullName}}</a>
                                        <div style="padding-top: 5px">
                                        &#9733; &#9733; &#9733; &#9733; &#9733;
                                        </div> </h4>
                                        <p style="text-align: center; padding-right:15px !important;">{{date('F Y', strtotime($winner->winningDate))}}</p></figcaption>
                                        <span class="ff"><a href="{{$winner->image}}" class="prettyPhoto fancybox" rel="gallery1" ><i class="fa fa-search-plus"></i></a></span>
                                        <span class="ll"><a href="#" ><i class="fa fa-link"></i></a></span>
                                      </figure>
                                      <div class="col-sm-8 winnerCard">
                                        <h3>{{$winner->recipeName}}
                                            <div class="dot"></div>
                                        </h3>
                                        {{$winner->ingredients}}
                                      </div>

                                      <div class="clearfix" ></div>
                                        </div>
                                    @endforeach



                                        <div class="clearfix"></div>

                                    </div>


                                    	</div>


                                    <hr class="vertical-space2">




                                    </section>



                                    <!-- Portfolio End
                                      ================================================== -->







                                   </div>

                               </div>


            </div>

@stop
@section('title')
    Monthly Winners
@stop

@section('content')

            <div class="main">
                                {{HTML::style('/plugins/portfolio/portfolio.css')}}

                               <div class="wrapper">
                                   <h1 class="heading">Monthly Winners</h1>

                                   <div class="row">


                                    <!-- Portfolio Start
                                      ================================================== -->

                                      <section class="clearfix full-width PortfolioSection">
                                       {{--<hr class="vertical-space2">--}}
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portfolioItems" id="">





                                    <div class="portfolio">

                                    @foreach($winners as $winner)
                                        <div class="winnerBg" style="padding:40px 40px 0px 40px; margin-bottom: 40px">


                                        <figure class="portfolio-item col-sm-4" >
                                        <div class="img-item">  <img src="{{$winner->image}}" class="img-responsive img-circle" style="width:200px; height:200px; border: thin solid white" alt=""> </div>
                                        <figcaption ><h4 style="text-align: center !important;padding-right:15px !important; margin-bottom: 0px !important;"><a href="portfolio-item.html" style="color: #ffff00">{{$winner->fullName}}</a>
                                        <div style="padding-top: 5px">
                                        &#9733; &#9733; &#9733; &#9733; &#9733;
                                        </div> </h4>
                                        <p style="text-align: center; padding-right:15px !important;">{{date('F Y', strtotime($winner->winningDate))}}</p></figcaption>
                                        <span class="ff"><a href="{{$winner->image}}" class="prettyPhoto fancybox" rel="gallery1" ><i class="fa fa-search-plus"></i></a></span>
                                        <span class="ll"><a href="#" ><i class="fa fa-link"></i></a></span>
                                      </figure>
                                      <div class="col-sm-8">
                                        <h3 style="color: #ffff00 !important;">{{$winner->recipeName}}
                                            <div class="dot"></div>
                                        </h3>
                                        {{$winner->ingredients}}
                                      </div>

                                      <div class="clearfix" ></div>
                                        </div>
                                    @endforeach



                                        <div class="clearfix"></div>

                                    </div>

                                    <script type="text/javascript">
                                    	$(document).ready(function() {
                                    		$(".fancybox").fancybox();
                                    	});
                                    </script>

                                        <script src="js/jquery.prettyPhoto.js" ></script>
                                    	</div>


                                    <hr class="vertical-space2">




                                    </section>



                                    <!-- Portfolio End
                                      ================================================== -->







                                   </div>

                               </div>


            </div>

@stop
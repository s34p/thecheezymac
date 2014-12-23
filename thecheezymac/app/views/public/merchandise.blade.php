@section('title')
    Merchandise
@stop

@section('content')


            <div class="main">
                                {{HTML::style('/plugins/portfolio/portfolio.css')}}

                               <div class="wrapper">
                                   <h1 class="heading">Merchandise</h1>

                                   <div class="row" style="margin-left:0px; margin-right: 0px">


                                    <!-- Portfolio Start
                                      ================================================== -->

                                      <section class="clearfix full-width PortfolioSection">
                                       {{--<hr class="vertical-space2">--}}
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portfolioItems">




                                    <div class="portfolio">


                                        <div class="winnerBg" style="padding:40px 40px 25px 40px; margin-bottom: 40px">
                                         @foreach($merchandise as $item)

                                        <figure class="portfolio-item col-sm-4">
                                        <div class="img-item">  <img src="{{$item->image}}" class="img-responsive img-thumbnail" style="width:100%; border: thin solid white" alt=""> </div>
                                        {{--<figcaption ><h4 style="text-align: center !important;padding-right:15px !important; margin-bottom: 0px !important;"><a href="portfolio-item.html" style="color: #ffff00">{{$item->item_name}}</a>--}}
                                        {{--<div style="padding-top: 5px">--}}
                                        {{--&#9733; &#9733; &#9733; &#9733; &#9733;--}}
                                        {{--</div> </h4>--}}
                                        {{--<p style="text-align: center; padding-right:15px !important; margin-bottom: 0px" class="yellow">{{$item->price}}</p>--}}

                                        {{--</figcaption>--}}

                                        <span class="ff"><a href="{{$item->image}}" class="prettyPhoto fancybox" rel="gallery1" ><i class="fa fa-search-plus"></i></a></span>
                                        <span class="ll"><a href="#" ><i class="fa fa-link"></i></a></span>





                                        </figure>
                                        <div class="col-sm-8">
                                            <h3>{{$item->item_name}}</h3>
                                            {{$item->description}}
                                            <h3>{{$item->price}}</h3>
                                        </div>

                                        @endforeach
                                      <div class="clearfix" ></div>
                                        </div>





                                    </div>

                                    <script type="text/javascript">
                                    	$(document).ready(function() {
                                    		$(".fancybox").fancybox();
                                    	});
                                    </script>

                                        <script src="js/jquery.prettyPhoto.js" ></script>
                                    	</div>



                                    </section>



                                    <!-- Portfolio End
                                      ================================================== -->







                                   </div>

                               </div>


            </div>

@stop
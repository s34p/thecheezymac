@section('title')
    Merchandise
@stop

@section('content')


            <div class="main">

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
                                        <div class="img-item">  <img src="{{$item->image}}" class="img-responsive" style="width:100%;" alt=""> </div>


                                        <span class="ff"><a href="{{$item->image}}" class="prettyPhoto fancybox" rel="gallery1" ><i class="fa fa-search-plus"></i></a></span>
                                        <span class="ll"><a href="#" ><i class="fa fa-link"></i></a></span>





                                        </figure>
                                        <div class="col-sm-8">
                                            <h3 style="color:yellow;">{{$item->item_name}}</h3>
                                            {{$item->description}}
                                            <h3>{{$item->price}}</h3>
                                        </div>
                                        <div class="clearfix" style="margin:10px"></div>
                                        @endforeach
                                      <div class="clearfix" ></div>
                                        </div>





                                    </div>


                                    	</div>



                                    </section>



                                    <!-- Portfolio End
                                      ================================================== -->







                                   </div>

                               </div>


            </div>

@stop
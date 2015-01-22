@section('title')
    The Cheezy Mac Gallery
@stop

@section('content')

            <div class="main">

                               <div class="wrapper">
                                   <h1 class="heading">Gallery</h1>

                                   <div class="row">


                                    <!-- Portfolio Start
                                      ================================================== -->

                                      <section class="clearfix full-width PortfolioSection">
                                       {{--<hr class="vertical-space2">--}}
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portfolioItems" id="">





                                    <div class="portfolio">

                                    @foreach($images as $image)
                                        <figure class="portfolio-item col-sm-4" >
                                        <div class="img-item">  <img src="{{$image->image}}" class="img-responsive img-thumbnail" style="width:100%; height:150px" alt=""> </div>
                                        <figcaption><h4><a href="portfolio-item.html">{{$image->caption}}</a> </h4>
                                        <p>{{date('M d Y', strtotime($image->created_at))}}</p></figcaption>
                                        <span class="ff">
                                            <a href="{{!empty($image->video)? $image->video:$image->image}}" class="prettyPhoto fancybox" rel="gallery1" ><i class="fa fa-search-plus"></i></a>
                                        </span>
                                        <span class="ll"><a href="#" ><i class="fa fa-link"></i></a></span>
                                      </figure>
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
@section('title')
    Menu
@stop

@section('content')

            <div class="main">


                <div class="wrapper" style="text-align: center;">
                    <h1 class="heading" style="text-align: center !important; font-size: 60px; margin-top:0px !important;padding:0px !important">Menu</h1>

                 <ul class="menu-nav-pills" style="padding-left: 0px">
                    @foreach($categories as $cat)
                    <li data-link="{{$cat->slug}}"><a href="/menu/{{$cat->slug}}" >{{$cat->name}}</a></li>
                    @endforeach
                     {{--<li><a href="{{Queries::downloadMenu()}}" target="_blank">Download Menu</a></li>--}}
                </ul>
		<div><strong><a href="{{Queries::downloadMenu()}}" target="_blank">Download Menu <span class="glyphicon glyphicon-print"></span></a></strong></div>
                <script>
                    $activeLink = "<?php echo Request::segment(2); ?>";
                    $(".menu-nav-pills li").each(function()
                    {
                        if($activeLink == $(this).attr('data-link'))
                        {
                            $(this).addClass('active-nav-pills');
                        }
                    });
                </script>

                <div class="row">



                <div class="menuBg" style="border: 2px solid #000; ">


                    <div>




                        <h1>
                            {{Queries::menuCategory(Request::segment(2))}}

                            <div class="stars">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                            </div>
                        </h1>

                        <?php
                        $i = 0;
                        $c = 0;
                        ?>

                        <div class="menu-items-wrapper" style="font-size:15px">
                            @if(Request::segment(2) == 'BuildYourOwn')




                                    @foreach($menus as $menu)

                                        <div class="col-md-12 text-center">

                                        <h3 style="color:yellow; text-align: center !important;">{{$menu->name}}
                                        <div>
                                        &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733;
                                        </div>
                                        </h3>

                                        {{$menu->description}}
                                        @if($menu->price)
                                        <h3 class="price" style="color:red; text-align: center !important;">${{$menu->price}}</h3>
                                        @endif
                                        </div>


                                        @endforeach
                            @else
                                @foreach($menus as $menu)
                                    <div class="col-sm-6">
                                    <h3 style="color:yellow">{{$menu->name}}
                                    <div>
                                    &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733;
                                    </div>
                                    </h3>

                                    {{$menu->description}}
                                    @if($menu->price)
                                    <h3 class="price" style="color:red">${{$menu->price}}</h3>
                                    @endif
                                    </div>
                                    <?php
                                    $i++;
                                    ?>
                                    @if($i % 2 == 0)
                                    <div class="clearfix"></div>
                                    @endif
                                @endforeach


                            @endif



                        </div>




                         <div class="clearfix"></div>

                        </div>
                   </div>
                   <div class="clearfix"></div>
                </div>
                @if(Request::segment(2) == 'FoodForThought')
                    <h2 align="center">The Ultimate Taste Tour!</h2>
                    <p>First, ask your cashier for a "Macaroni World Map". Then "travel" to each of the above geographic locations on our Food For Thought menu. We will punch each location as you complete your journey. Complete the tour and earn a <strong>free entree</strong> on us!</p>
                @endif
                </div>

            </div>




@stop
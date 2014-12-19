@section('title')
    Menu
@stop

@section('content')

            <div class="main">


                <div class="wrapper">
                    <h1 class="heading" style="text-align: center !important; font-size: 60px; margin-top:0px !important;padding:0px !important">Menu</h1>

                 <ul class="menu-nav-pills">
                    @foreach($categories as $cat)
                    <li data-link="{{$cat->slug}}"><a href="/menu/{{$cat->slug}}" >{{$cat->name}}</a></li>
                    @endforeach
                </ul>

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



                <div class="menuBg">
                    @include('public.partials.comments')

                    {{--<div class="text-right">--}}
                       {{--<button class="btn">Printable Menu <span class="glyphicon glyphicon-print"></span></button>--}}
                   {{--</div>--}}

                    <div>




                        <h1>
                            {{Request::segment(2)}}
                            <div class="stars">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                            </div>
                        </h1>

                        <?php
                        $i = 0;
                        $c = 0;
                        ?>

                        <div class="menu-items-wrapper">


                        @while($i < count($menus))
                            @if(Request::segment(2) == 'BuildYourOwn')
                                @if(strpos($menus[$i]->menu_name,'Step 3') !== false || strpos($menus[$i]->menu_name,'Step 1') !== false)
                                        {{--{{substr_count($menus[$i]->description,"<br />")}}--}}
                                        <?php
                                            $clean1 = str_replace("<p>","", $menus[$i]->description);
                                            $clean2 = str_replace("</p>","", $menus[$i]->description);
                                            $items = explode("<br />", $clean2);
                                            ?>
                                            <h3>{{$menus[$i]->menu_name}}
                                                   <div>
                                                   &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733;
                                                   </div>
                                           </h3>
                                            <?php
                                            while($c < count($items))
                                            {
                                               ?>

                                                    <div class="col-sm-3">
                                                        {{$items[$c]}}
                                                    </div>


                                               <?php
                                               $c++;
                                               ?>
                                               @if($c % 4 == 0)
                                                  <span class="clearfix"></span>
                                             @endif
                                               <?php
                                            }

                                            $i++;

                                        ?>
                                        @if($menus[$i]->price)
                                       <h3 class="price yellow">${{$menus[$i]->price}}</h3>
                                       @endif
                                       <span class="clearfix"></span>

                                @else
                                    <div class="col-sm-6">
                                           <h3>{{$menus[$i]->menu_name}}
                                                                       <div>
                                                                       &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733;
                                                                       </div>
                                           </h3>

                                              {{$menus[$i]->description}}
                                           @if($menus[$i]->price)
                                           <h3 class="price yellow">${{$menus[$i]->price}}</h3>
                                           @endif
                                       </div>
                                       <?php
                                       $i++;
                                       ?>
                                       @if($i % 2 == 0)
                                           <div class="clearfix"></div>
                                      @endif


                                @endif
                            @endif

                             <div class="col-sm-6">
                                   <h3>{{$menus[$i]->menu_name}}
                                                               <div>
                                                               &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733; &#9733;
                                                               </div>
                                   </h3>

                                      {{$menus[$i]->description}}
                                   @if($menus[$i]->price)
                                   <h3 class="price yellow">${{$menus[$i]->price}}</h3>
                                   @endif
                               </div>
                                   <?php
                                   $i++;
                                   ?>
                                   @if($i % 2 == 0)
                                       <div class="clearfix"></div>
                                  @endif



                        @endwhile

                        </div>



                        {{--@for($i = 0; $i< count($menus); $i++)--}}

                            {{--<div class="col-sm-6" style="padding:25px;">--}}
                           {{--<h3>{{$menus[$i]->menu_name}}</h3>--}}

                              {{--{{$menus[$i]->description}}--}}
                           {{--@if($menus[$i]->price)--}}
                           {{--<h2>${{$menus[$i]->price}}</h2>--}}
                           {{--@endif--}}
                           {{--</div>--}}

                           {{--@if($i % 2 == 0)--}}
                                {{--<div class="clearfix"></div>--}}
                           {{--@endif--}}

                        {{--@endfor--}}
                         <div class="clearfix"></div>

                        </div>
                   </div>
                   <div class="clearfix"></div>
                </div>
                @if(Request::segment(2) == 'FoodForThought')
                    <h2 align="center">The Ultimate Taste Tour!</h2>
                    <p>First, ask your cashier for a "Macaroni World Map". Then "travel" to each of the above geographic locations on our Food For Thought menu. We will stamp each location as you complete your journey. Complete the tour and earn a <strong>free entree</strong> on us!</p>
                @endif
                </div>

            </div>



@stop
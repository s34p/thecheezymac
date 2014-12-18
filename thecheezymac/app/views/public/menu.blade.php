@section('title')
    Menu
@stop

@section('content')

            <div class="main">


                <div class="wrapper">
                    <h1 class="heading">Menu</h1>

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




                    @include('public.partials.comments')

                    <div class="text-right">
                       <button class="btn">Printable Menu <span class="glyphicon glyphicon-print"></span></button>
                   </div>

                   <div class="specialsBlocks storytext">


                       @foreach($menus as $menu)
                       <div class="col-sm-4" style="padding-left:0px; ">
                        @if($menu->image)
                       <img src="{{$menu->image}}" style="border:thin solid black" class="img-responsive" alt=""/>
                       @endif
                       </div>
                       <div class="col-sm-8">
                       <h3>{{$menu->menu_name}}</h3>

                           {{$menu->description}}
                        @if($menu->price)
                        <h4>${{$menu->price}}</h4>
                        @endif
                       </div>
                       <div class="clearfix"></div>
                       <br/><br/>
                       @endforeach


                   </div>
                   <div class="clearfix"></div>
                </div>
                @if(Request::segment(2) == 'FoodForThought')
                    <h2 align="center">The Ultimate Taste Tour!</h2>
                    <p>First, ask your cashier for a "Macaroni World Map". Then "travel" to each of the above geographic locations on our Food For Thought menu. We will stamp each location as you complete your journey. Complete the tour and earn a <strong>free entree</strong> on us!</p>
                @endif
                </div>





@stop
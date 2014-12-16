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




                    <div class="text-center jumbotron" style="font-weight:bold; font-style: italic; font-size: 20px">

                        "Amazed by the flavor in the Cavatapi Macaroni with Chicken and Broccoli" <br>
                        <small> Jerry Seinfield</small>

                        <div class="text-right">
                            Printable Menu
                        </div>

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

                </div>



            </div>

@stop
@section('title')
    Menu
@stop

@section('content')

            <div class="main">
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

                <div class="wrapper">

                    <h1 class="heading">Menu</h1>

                <div class="row">



                   <div class="col-md-4 text-center">
                        <blockquote>
                        "Amazed by the flavor in the Cavatapi Macaroni with Chicken and Broccoli" <br>
                        <small> Jerry Seinfield</small>
                        </blockquote>


                   </div>
                   <div class="col-md-8 specialsBlocks storytext">


                       @foreach($menus as $menu)
                       <div class="col-sm-4" style="padding-left:0px">

                       <img src="{{$menu->image}}" class="img-responsive" alt=""/>
                       </div>
                       <div class="col-sm-8">
                       <h3>{{$menu->menu_name}}</h3>
                           {{$menu->description}}

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
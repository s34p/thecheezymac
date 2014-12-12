@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">
                <div class="wrapper">
                    <h1 class="heading"></h1>

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
                       <h3>{{$menu->name}}</h3>
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
@section('title')
    News
@stop

@section('content')

            <div class="main">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165" async="async"></script>
                <div class="wrapper">
                 <h1 class="heading">The Scoop on The Cheezy Mac</h1>

                <div class="text-left">
                    @foreach($news as $n)
                        <h3><strong>{{$n->title}}</strong></h3>
                        <div>
                        <?php
                        $pos = strpos($n->body, ' ', 500);
                         echo substr($n->body,0,$pos);

                        ?>
                        <a href="/our-news/{{$n->id}}" style="color:#bd2236; font-weight:bold">... Read More</a>
                        </div>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_sharing_toolbox"></div>

                    @endforeach
                </div>
                </div>
            </div>

@stop
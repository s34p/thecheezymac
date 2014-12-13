@section('title')
    Blog
@stop

@section('content')

            <div class="main">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165" async="async"></script>
                <div class="wrapper">
                 <h1 class="heading">Our Blog</h1>

                <div class="text-left">
                    @foreach($blogs as $blog)
                        <h3><strong>{{$blog->title}}</strong></h3>
                        <div>

                            {{$blog->body}}


{{--                        $pos = strpos($blog->body, ' ', 500);--}}
{{--                         echo substr($blog->body,0,$pos);--}}


                        {{--<a href="/our-news/{{$blog->id}}" style="color:#bd2236; font-weight:bold">... Read More</a>--}}
                        </div>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_sharing_toolbox"></div>

                    @endforeach
                </div>
                </div>
            </div>

@stop
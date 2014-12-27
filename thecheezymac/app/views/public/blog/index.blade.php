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
                        <h3><a href="/our-blog/{{$blog->id}}"><strong>{{$blog->title}}</strong></a></h3>

                        <div class="addthis_sharing_toolbox"></div>
                        <span class="label label-default">{{date("F d Y", strtotime($blog->created_at))}}</span>

                        <div>
                            <img src="{{$blog->image}}" class="img-responsive" style="display: block;margin-left: auto;margin-right: auto; width: 100%;" alt=""/>
                        </div>




                            {{$blog->body}}


{{--                        $pos = strpos($blog->body, ' ', 500);--}}
{{--                         echo substr($blog->body,0,$pos);--}}


                        {{--<a href="/our-news/{{$blog->id}}" style="color:#bd2236; font-weight:bold">... Read More</a>--}}

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->


                    @endforeach
                </div>
                </div>
            </div>

@stop
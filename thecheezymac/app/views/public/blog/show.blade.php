@section('title')
    News
@stop

@section('content')

            <div class="main">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165" async="async"></script>
                <div class="wrapper">
                 <h1 class="heading">{{$blog->title}}</h1>

                <div class="text-left">
                    <div class="author">Published By {{$blog->author}} - {{date("F j, Y, g:i a",strtotime($blog->created_at))}}</div>
                    <div>
                        <img src="{{$blog->image}}" class="img-responsive" style="display: block;margin-left: auto;margin-right: auto; width: 100%;" alt=""/>
                    </div>
                    <br/><br/>
                    {{$blog->body}}
                </div>
                <br/>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
                </div>
            </div>

@stop
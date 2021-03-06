@section('title')
    News
@stop

@section('content')

            <div class="main">
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f708a1900255165" async="async"></script>
                <div class="wrapper">
                 <h1 class="heading">{{$news->title}}</h1>

                <div class="text-left">
                    <div class="author">Published By {{$news->author}} - {{date("F j, Y, g:i a",strtotime($news->created_at))}}</div>
                    <br/><br/>
                    {{$news->body}}
                </div>
                <br/>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_sharing_toolbox"></div>
                </div>
            </div>

@stop
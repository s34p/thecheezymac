@include('public.partials.header')

    <div class="main">

        <div class="wrapper">
            <h1 class="heading">{{$page->title}}</h1>

            <div class="row">

                <div class="col-md-4 storypic">
                    <img src="{{$page->image}}" class="img-responsive img-thumbnail" alt=""/>
                    @if($page->slug == "story" && $page->col_num == 2)
                        @include('public.partials.sideSlideShow')
                    @endif

                </div>

                <div class="col-md-8 storytext">
                    {{$page->body}}

                    @if($page->slug == "club")
                        @include('public.partials.newsletter')
                    @endif

                    @if($page->slug == "franchise")
                        @include('public.partials.franchise')
                    @endif
                </div>

            </div>
        </div>
    </div>




@include('public.partials.footer')
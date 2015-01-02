@include('public.partials.header')

    <div class="main">

        <div class="wrapper">
            <h1 class="heading">{{$page->title}}</h1>

            <div class="row">

                <div class="col-md-4 storypic">
                    @if($page->image)
                    <img src="{{$page->image}}" class="img-responsive img-thumbnail" alt=""/>
                    @endif
                    @if($page->slug == "story" && $page->col_num == 2)
                        @include('public.partials.sideSlideShow')
                    @endif

                </div>

                <div class="col-md-8 storytext" style="z-index: 1">
                    @if($page->slug == "contact-us")
                        @include('public.partials.contactForm')
                    @endif

                    {{$page->body}}

                    @if($page->slug == "club")
                        @include('public.partials.newsletter')
                    @endif

                    @if($page->slug == "franchise")
                        @include('public.partials.franchise')
                    @endif
                    @if($page->slug == "catering")
                        @include('public.partials.catering')
                    @endif
                    @if($page->slug == "contact-us")
                        @include('public.partials.contactButtons')
                    @endif
                </div>

            </div>
        </div>
    </div>




@include('public.partials.footer')
@section('title')
   Cheezy Mac {{$page->title}}
@endsection
@include('public.partials.header')

<div class="main">

    <div class="wrapper">
        <h1 class="heading">{{$page->title}}</h1>

        <div class="row">

            <div class="col-md-12">
                @if($page->image)
                <img src="{{$page->image}}" class="img-responsive img-thumbnail" alt=""/>
                @endif
            </div>

            <div class="col-md-12">
                {{$page->body}}

                @if($page->slug == "employment")
                    @include('public.partials.employmentForm')
                @endif
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
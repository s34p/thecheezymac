@include('public.partials.header')

<div class="main">

    <div class="wrapper">
        <h1 class="heading">{{$page->title}}</h1>

        <div class="row">

            <div class="col-md-12">
                <img src="{{$page->image}}" class="img-responsive img-thumbnail" alt=""/>

            </div>

            <div class="col-md-12 storytext">
                {{$page->body}}
            </div>

        </div>
    </div>
</div>

@include('public.partials.footer')
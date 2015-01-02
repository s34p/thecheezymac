@include('public.partials.header')

    <div class="main">

        <div class="wrapper">
            <h1 class="heading">{{$page->title}}</h1>

            <div class="row">



                <div class="col-md-8">

                        @include('public.partials.contactForm')


                        <div class="contact-text">

                            {{$page->body}}

                        </div>
                        @include('public.partials.contactButtons')

                </div>

                <div class="col-md-4 storypic">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1730.1092312436806!2d-84.44593081260318!3d38.002943936450485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e2!4m0!4m3!3m2!1d38.0031721!2d-84.4459408!5e1!3m2!1sen!2sus!4v1418933275779" width="275" height="371" frameborder="0" style="border:0"></iframe>
                    <p>
                        <i class="glyphicon glyphicon-phone"></i> 859-2CHEEZY (859-224-3399) <br/>
                        <i class="glyphicon glyphicon-phone-alt"></i> 844-624-3399 (Corporate)
                    </p>
                    @if($page->image)
                    <img src="{{$page->image}}" class="img-responsive img-thumbnail" alt=""/>
                    @endif
                </div>

            </div>
        </div>
    </div>




@include('public.partials.footer')
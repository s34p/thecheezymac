@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

               <div class="wrapper">
                   <h1 class="heading">{{ucfirst(Request::segment(2))}}</h1>

                   <div class="row">

                       <div class="col-md-4 storypic">
                           <img src="/img/giftcard.png" class="img-thumbnail" alt=""/>
                       </div>
                       <div class="col-md-8 storytext">
                           <?php
                            switch(Request::segment(2))
                            {
                                case "facebook":
                                    ?>
                                        @include('public.partials.facebook')
                                    <?php
                                    break;
                                case "twitter":
                                    ?>
                                        @include('public.partials.twitter')
                                    <?php
                                    break;

                            }
                           ?>
                       </div>
                       <div class="clearfix"></div>
                   </div>

               </div>




       </div>

@stop
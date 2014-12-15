@section('title')
    The Cheezy Mac
@stop

@section('content')

            <div class="main">

                    <div class="wrapper">
                        <h1 class="heading">Our Story</h1>

                        <div class="row">

                            <div class="col-md-4 storypic">
                                <img src="/img/storypic.jpg" alt=""/>

                                <br/> <br/> <br/>


                                <div id="carousel-example-generic" class="carousel slide small-slideshow" data-ride="carousel" >
                                                  

                                                  <!-- Wrapper for slides -->





                                                <div class="carousel-inner" role="listbox">

                                                    <div class="item active">
                                                        <img src="/img/construction/Const9.jpg" alt="...">

                                                    </div>
                                                    <?php
                                                        $images = glob(public_path()."/img/construction/*.jpg");
                                                        $img_path = "";
                                                        foreach($images as $img)
                                                            {
                                                                $img_path = str_replace(public_path(),'',$img);
                                                                ?>
                                                            <div class="item">
                                                                <img src="{{$img_path}}" alt="...">

                                                            </div>
                                                                <?php
                                                            }
                                                    ?>


                                                  </div>

                                                  <!-- Controls -->
                                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </div>
                            </div>
                            <div class="col-md-8 storytext">
                                 <h3>Our Belief!</h3>

                                <p>
                                What is the ultimate comfort food? It’s food that evokes those warm, nostalgic and sentimental feelings that positively peeks the emotions from the greatest moments of our lives. It’s “positive” food that creates “positive” feelings. Here, at The Cheezy Mac, we are enthusiasts, specializing in the creation of what we believe is the ultimate comfort food, the best macaroni and cheese around!
                                </p>
                                <h3>
                                The Cheezy Mac Difference!
                                </h3>
                                <p>
                                What makes Cheezy Mac so special? It is our commitment to using only the finest ingredients in all of our recipes. This means using only the freshest cheeses, grated daily – from Sharp Cheddar, Swiss, Provolone, Colby and Pepper Jack to unique Artisan cheeses. Using only ribbed, corkscrew shaped macaroni, which in our opinion is the ultimate shape for holding all of our cheesy goodness. And of course our sauces - simply put, they are to-die-for! After all, we have to back up our name with out-of-this-world recipes that please even the most sophisticated palates.
                                </p>
                                <h3>
                                The Cheezy Mac Choice!
                                </h3>
                                <p>
                                The Cheezy Mac is not about just coming in and picking from a menu. It’s about choice. Choose from one of our many Chef’s Specialties like our “Pulled Pork Macaroni Grilled Cheese Sandwich with Grippo’s Potato Chips” mmmmmmmmm, sorry, got distracted there for a second. Or Create Your Own Dish! One of our Sous-Chefs will assist you as you choose from an array of fresh topping and proteins to assemble the perfect, custom Cheezy Mac dish for your particular taste.
                                </p>
                                <h3>
                                Wait, I’m not finished!
                                </h3>
                                <p>
                                We believe in generous portions so if you can’t finish your meal in one sitting, no worries. Everything is served in an ecofriendly dish that you can just put a lid on and take with you.
                                </p>
                                <h3>
                                Are you Cheezy?
                                </h3>
                                <p>
                                We assume you are because you're here, reading this. We hope you enjoy your Cheezy Mac dish today and look forward to seeing you again. Be sure to tell your friends and family so they can be Cheezy too!
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>




            </div>

@stop
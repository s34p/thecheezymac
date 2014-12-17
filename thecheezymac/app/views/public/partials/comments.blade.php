<div class="text-center jumbotron" style="font-weight:bold; font-style: italic; font-size: 20px">


    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >


                          <!-- Wrapper for slides -->





                        <div class="carousel-inner" role="listbox">


                            <?php
                            $i = 1;

                            foreach($comments as $comment)
                            {
                                $item_class = ($i == 1) ? 'item active' : 'item';

                                ?>
                                    <div class="{{$item_class}}">
                                    {{$comment->body}}
                                    <small>{{$comment->author}}</small>
                                     </div>
                                <?php
                                $i++;
                            }
                            ?>








                          </div>

                          {{--<!-- Controls -->--}}
                          {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
                            {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Previous</span>--}}
                          {{--</a>--}}
                          {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
                            {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Next</span>--}}
                          {{--</a>--}}
                        </div>
    </div>

</div>


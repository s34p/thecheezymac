<br/> <br/> <br/>


<div id="carousel-example-generic" class="carousel slide small-slideshow" data-ride="carousel" >


    <!-- Wrapper for slides -->





    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="/img/construction/Const9.jpg" class="img-responsive img-thumbnail"  alt="...">

        </div>
        <?php
        $images = glob(public_path()."/img/construction/*.jpg");
        $img_path = "";
        foreach($images as $img)
        {
            $img_path = str_replace(public_path(),'',$img);
            ?>
            <div class="item">
                <img  src="{{$img_path}}" class="img-responsive img-thumbnail" alt="...">

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
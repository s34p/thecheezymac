
$(document).ready(function() {
    $(".menu-button img").mouseover(function()
    {


        var navButton = $(this).attr('src');
        var navHover = navButton.replace(".png","-hover.png");
        $(this).attr('src',navHover);
    });
    $(".menu-button img").mouseout(function()
    {

    var navButton = $(this).attr('src');
    var navHover = navButton.replace("-hover","");
    $(this).attr('src',navHover);
    });

    var activeButton = "<?php echo Request::segment(1); ?>";
    $("nav ul li a img").each(function()
    {
    if(activeButton == $(this).attr("class"))
    {
    var navButton = $(this).attr('src');
    var navHover = navButton.replace(".png","-hover.png");
    $(this).attr('src',navHover);
    }

    });
    });


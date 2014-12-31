// = include ../bootstrap/js/bootstrap.min.js
// = include ../DataTables/js/jquery.dataTables.min.js
// = include ../jasnyBootstrap/js/jasny-bootstrap.min.js

$(document).ready(function(){

    tinymce.init({
        selector : "textarea.editme",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons paste textcolor colorpicker textpattern responsivefilemanager"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        external_filemanager_path:"/plugins/ResponsiveFilemanager/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "/plugins/ResponsiveFilemanager/filemanager/plugin.min.js"},
        relative_urls: false,
        remove_script_host: false


    });

    $(".fancybox").fancybox();


    if (window.attachEvent && !window.addEventListener) {
        alert("Please Upgrade your browser to Internet Explorer 9 or higher. If you are using windows XP, please use chrome or firefox to view our website");
    }

    if(navigator.appVersion.indexOf("MSIE 9.")!=-1)
    {
        $("h4 a").removeClass('dark-button').addClass('ie-dark-button');
    }



    $('#datatable').DataTable();

    $('.recycleLogo img').hover(function(){
        $(this).attr('src','/img/recyclelogo-hover.png');
    }, function(){
        $(this).attr('src','/img/recyclelogo.png');
    });




    var activeButton = "<?php echo Request::segment(1); ?>";

    /**
     * Button Hover
     * @type {string}
     */
    $(".menu-button img").mouseover(function()
    {

        if($(this).attr('data-link') != activeButton)
        {
            var navButton = $(this).attr('src');
            var navHover = navButton.replace(".png","-hover.png");
            $(this).attr('src',navHover);
        }

    });
    $(".menu-button img").mouseout(function()
    {

        if($(this).attr('data-link') != activeButton)
        {
            var navButton = $(this).attr('src');
            var navHover = navButton.replace("-hover", "");
            $(this).attr('src', navHover);
        }
    });





    $("nav ul li a img").each(function()
    {
        //var classVal = $(this).attr("data-link");

        if(activeButton == $(this).attr("data-link"))
        {

            var navButton = $(this).attr('src');
            var navHover = navButton.replace(".png","-hover.png");
            $(this).attr('src',navHover);
        }
    });

    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown("slow");
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp("slow")
    });
});

// = include ../menuSlide/classie.js
// = include ../menuSlide/main.js
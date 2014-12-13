<script>
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
</script>
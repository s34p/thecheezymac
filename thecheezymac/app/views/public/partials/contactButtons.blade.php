<br>
<br>
<h3>Your Voice Matters!</h3>
<div class="col-sm-6 no-left-padding">
    <h4>
        <a class="btn dark-button large-button commentButton">
            Comments
        </a>
    </h4>

    <h4>
        <a class="btn dark-button large-button cateringQuestionsButton">
            Catering Questions
        </a>
    </h4>

</div>
<div class="col-sm-6 no-left-padding">
    <h4>
        <a class="btn dark-button large-button generalQuestionsButton">
            General Questions
        </a>
    </h4>
    <h4>
        <a class="btn dark-button large-button franchiseQuestionsButton">
            Franchise Questions
        </a>
    </h4>
</div>

<script>
    $(document).ready(function()
    {
        $(".commentButton").click(function(){
            $(".formTitle").html('Tell Us About Your Visit');
            $(".contact-text").fadeOut(500);
            $(".commentForm").slideDown("slow");
            $('input[name="subject"]').val("Comment");
        });
        $(".cateringQuestionsButton").click(function(){
            $(".formTitle").html('Catering Questions');
            $(".contact-text").fadeOut(500);
            $(".commentForm").slideDown("slow");
            $('input[name="subject"]').val("Catering Questions");
        });
        $(".generalQuestionsButton").click(function(){
            $(".formTitle").html('General Questions');
            $(".contact-text").fadeOut(500);
            $(".commentForm").slideDown("slow");
            $('input[name="subject"]').val("General Questions");
        });
        $(".franchiseQuestionsButton").click(function(){
            $(".formTitle").html('Franchise Questions');
            $(".contact-text").fadeOut(500);
            $(".commentForm").slideDown("slow");
            $('input[name="subject"]').val("Franchise Questions");
        });

        $("#contact").submit(function(e)
        {
            e.preventDefault();

            $("#submit").attr('value','Sending please wait...');


            $.ajax({
                type    :'POST',
                url     :'/comments',
                data    :$(this).serialize(),
                dataType:'json',
                success: function(result)
                {
                    if(result.success == false)
                    {
                        $("#submit").attr('value','Send');
                        $.each(result.errors, function( index, value ) {
                            var errorDiv = '#'+index+'_error';
                            $(errorDiv).addClass('text-danger');
                            $(errorDiv).empty().append(value);
                        });
                    }
                    else
                    {
                        $("#submit").attr('value','Send');
                        $(".text-danger").hide();
                        $(".displayMessage").addClass('alert alert-success').empty().append(result.msg);
                    }
                }

            });
        });

    });

</script>
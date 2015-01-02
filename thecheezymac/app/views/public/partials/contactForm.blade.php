<div class="commentForm NewsLetter" style="display: none">
    <div id="NewsLetter">


        <h3>
            <span class="formTitle"></span>
            <a href="/contact-us" class="pull-right">
                <button class="btn btn-default">
                    <i class="fa fa-arrow-circle-o-left"></i> Go Back
                </button>
            </a>
        </h3>
        <div class="displayMessage"></div>
        {{Form::open(array('role'=>'form','id'=>'contact'))}}

        <div class="form-group hidden">
            {{Form::label('subject','Subject')}}
            {{Form::hidden('subject', null, array('class'=>'form-control','placeholder'=>'Subject'))}}

        </div>

        <div class="form-group">
            {{Form::label('fullName','Your Name')}} <span class="text-danger">*</span>
            {{Form::text('fullName', null, array('class'=>'form-control','placeholder'=>'Your Name'))}}
            <div id ="fullName_error"></div>
        </div>

        <div class="form-group">
            {{Form::label('email','Email Address')}} <span class="text-danger">*</span>
            {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
            <div id ="email_error"></div>
        </div>

        <div class="form-group">
            {{Form::label('phone','Phone Number')}}
            {{Form::text('phone', null, array('class'=>'form-control','placeholder'=>'Phone Number','data-mask'=>'(999) 999 9999'))}}
            <div id ="phone_error"></div>
        </div>

        <div class="form-group">
            {{Form::label('comment','Your Comment')}} <span class="text-danger">*</span>
            {{Form::textarea('comment', null, array('class'=>'form-control','placeholder'=>'Your Comment'))}}
            <div id ="comment_error"></div>
        </div>
        <div class="form-group">
            {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'send','id'=>'submit'))}}

        </div>

        {{Form::close()}}

    </div>
</div>

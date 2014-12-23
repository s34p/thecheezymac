<div id="NewsLetter">
{{DisplayMessage::success(Session::get('success'))}}
{{Form::open(array('route'=>'newsletter.subscribe','role'=>'form'))}}


<div class="form-group">
{{Form::label('firstName','First Name')}}
{{Form::text('firstName', null, array('class'=>'form-control','placeholder'=>'First Name'))}}
{{DisplayMessage::error('firstName', $errors)}}
</div>

<div class="form-group">
{{Form::label('lastName','Last Name')}}
{{Form::text('lastName', null, array('class'=>'form-control','placeholder'=>'Last Name'))}}
{{DisplayMessage::error('lastName', $errors)}}
</div>

<div class="form-group">
{{Form::label('email','Email Address')}}
{{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
{{DisplayMessage::error('email', $errors)}}
</div>
<div class="form-group">
{{Form::submit('Subscribe',array('class'=>'btn btn-primary','name'=>'submit'))}}
</div>

{{Form::close()}}

</div>
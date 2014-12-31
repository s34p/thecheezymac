@section('title')
    Send Email
@stop

@section('content')
    <div class="main">

           <div class="wrapper">
               <h1 class="heading">Email Subscribers</h1>

               <div class="wrapper">
                   @include('private.partials.adminNav')
               </div>


               <div class="row">



                   <div class="center-block">

                        <div class="panel panel-default">

                          <div class="panel-body">
                              {{DisplayMessage::success(Session::get('success'))}}
                          {{Form::open(array('url'=>'/webadmin/newsletter','role'=>'form'))}}

                                <div class="form-group">
                                    {{Form::label('title','Subject')}}
                                    {{Form::text('title', null, array('class'=>'form-control','placeholder'=>'Subject'))}}
                                    {{DisplayMessage::error('title', $errors)}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('body','Message')}}
                                    {{Form::textarea('body', null, array('class'=>'form-control editme','placeholder'=>'Message'))}}
                                    {{DisplayMessage::error('body', $errors)}}
                                </div>


                                <div class="form-group">
                                    {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'submit'))}}
                                </div>
                          {{Form::close()}}
                          </div>
                        </div>


                   </div>
               </div>

           </div>



   </div>
@stop
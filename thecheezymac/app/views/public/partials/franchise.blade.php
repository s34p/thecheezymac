<div id="NewsLetter">



       {{DisplayMessage::success(Session::get('success'))}}
       {{Form::open(array('route'=>'franchise.join','role'=>'form'))}}


       <div class="form-group">
           {{Form::label('fullName','Full Name')}}
           {{Form::text('fullName', null, array('class'=>'form-control','placeholder'=>'Full Name'))}}
           {{DisplayMessage::error('fullName', $errors)}}
       </div>



       <div class="form-group">
           {{Form::label('phone','Phone Number')}}
           {{Form::text('phone', null, array('class'=>'form-control','placeholder'=>'Phone Number'))}}
           {{DisplayMessage::error('phone', $errors)}}
       </div>

       <div class="form-group">
           {{Form::label('email','Email Address')}}
           {{Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email Address'))}}
           {{DisplayMessage::error('email', $errors)}}
       </div>

       <div class="form-group">
           {{Form::label('purchaseDate','When are you looking to purchase the franchise?')}}
           {{Form::text('purchaseDate', null, array('class'=>'form-control','placeholder'=>'Purchase Date'))}}
           {{DisplayMessage::error('purchaseDate', $errors)}}
       </div>

       <div class="form-group">
           {{Form::label('city','What city/state are you looking to open a franchise?')}}
           <div class="col-md-6" style="padding-left:0px !important; padding-bottom: 10px">
           {{Form::text('city', null, array('class'=>'form-control','placeholder'=>'City'))}}
           {{DisplayMessage::error('city', $errors)}}
           </div>
           <div class="col-md-6" style="padding-left:0px !important;">
            {{Form::text('state', null, array('class'=>'form-control','placeholder'=>'State'))}}
            {{DisplayMessage::error('state', $errors)}}
           </div>
           <div class="clearfix"></div>

       </div>



       <div class="form-group">
           {{Form::label('amount','How much are you looking to invest?')}}
           {{Form::select('amount',['undecided'=>'Undecided','$150000 - $349000'=>'$150000 - $349000','$350000 - $549000'=>'$350000 - $549000','Greater than $550000'=>'Greater than $550000'], 'undecided', array('class'=>'form-control','placeholder'=>'Purchase Date'))}}
           {{DisplayMessage::error('amount', $errors)}}
       </div>


       <div class="form-group">
           {{Form::submit('Send',array('class'=>'btn btn-primary','name'=>'submit'))}}
       </div>

       {{Form::close()}}

   </div>
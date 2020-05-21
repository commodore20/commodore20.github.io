<!-- Verification --> 
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-4 col-sm-3"></div>
         <div class="col-md-4 col-sm-3">
            {!! Form::open(['url' => 'foo/bar', 'class' => 'form-contain']) !!}

            <div class="form-group">
            {{ Form::label('verify', 'Please check your email/phone number for your verification code') }}
            {{ Form::text('verify', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Your Verification code here']) }}

            </div>

            {!! Form::close()!! }

         </div>
     </div>

 </div>
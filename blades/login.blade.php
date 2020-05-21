<!-- Start of login -->
    	<div class="container-fluid bods py-3">
			<div class="container ">
						
			 
				<div class="row">
					<div class="col-md-4 col-sm-3"></div>
					<div class="col-md-4 col-sm-3 border border-light rounded shadow py-5">
					<div class="title-primary text-center">
						<h3>Login</h3>
							<img src="images/logo-sm.png" alt="">
							
							
						</div>
							{!! Form::open(['url' => 'foo/bar', 'class' => form-contain]) !!}
						
							<div class="form-group">
							{{ Form::label('mobileNo', 'Mobile Number:') }}
							{{ Form::text('mobileNo', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'ex.09501111111']) }}
							</div>
							<div class="form-group">
                            {{ Form::label('email', 'Email:') }}
							{{ Form::email('email', $value = null, ['class' => 'form-control  text-box single-line', 'placeholder' => '(Optional)']) }}

							</div>
							<div class="form-check">
							{{ Form::checkbox('rememberPassword',['class'=> 'form-check-input']) }} <!-- checkbox -->
							{{ Form::label('rememberPassword',' Remember Password') }}
								<p class="p-1">
									<a href="loginalternative.html">Forgot Your Password ?</a>
								</p>
							</div>
							<div class="text-center">
							{{ Form::submit('Login', ['class' => 'btn btn-primary'] ) }}
							</div>
							
						
							{!! Form::close()!! }
					</div>
                </div>
                
			</div>
		</div>
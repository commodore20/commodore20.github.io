<!-- Created May 20, 2020-->
<!-- Signing In Via Mobile Number-->
<div class="container-fluid bods py-5">
			<div class="container"></div>
			<div class="row">
				<div class="col-md-4 col-sm-3"></div>
				<div
					class="col-md-4 col-sm-3 border border-light rounded shadow py-5 px-5"
				>
					<div class="content-header">
						<div class="title-primary text-center">
							<img src="images/logo-sm.png" alt="" />
							<h3>Login</h3>
							<br />
						</div>
						{!! Form::open(['url' => 'foo/bar', 'class' => 'form-contain']) !!}
							<div class="form-group">
                            {{ Form::label('contact', 'Contact Number:') }} 
		                    {{ Form::text('contact', $value = null, ['class' => 'form-control text-box single-line', 'maxlength' => '11', 'placeholder' => 'First Name']) }}

							</div>
							<div class="form-group">
                            {{ Form::label('pin-digit', '6-Pin Digit:') }}
                                    <div class="input-group">
                                        {{ Form::password('pin-digit', $value = null, ['class' => 'form-control  text-box single-line', 'maxlength' => '6', 'inputmode' => 'numeric', 'placeholder' => '******']) }}
                                        <span class="input-group-addon">
                                            <span class="fa fa-eye"></span>
                                        </span>
                                    </div>
							</div>
							<div class="form-group justify-content-center">
								<div class="form-check">
                                {{ Form::checkbox('remember-pass',['class'=> 'form-check-input']) }}
                                {{ Form::label('remember-pass','Remember Password') }}
									<p class="p-1">
										<a href="">Forgot Your Password ?</a>
									</p>
								</div>
								<div class="text-center">
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                {{ Form::button('Sign in'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
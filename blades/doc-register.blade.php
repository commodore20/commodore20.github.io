

        <div class="container-fluid py-4 bods">
			<div class="container border rounded shadow-sm">
                <div class="title-primary pb-3">
					<h3 class="text-center">
                        <i class="fa fa-user-circle"> </i>
						Registration for Doctors
					</h3>
				</div>
			    <div class="row justify-content-around">
                {!! Form::open(['url' => 'foo/bar', 'class' => 'form-contain']) !!}
					<div class="col-md-5">
						<div class="form-group row">
                        {{ Form::label('fname', 'First Name:') }} 
						{{ Form::text('fname', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'First Name']) }}
						</div>
						<div class="form-group row">
                        {{ Form::label('midname', 'Middle Name:') }}
						{{ Form::text('midname', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Middle Name']) }}
						</div>
						<div class="form-group row">
                        {{ Form::label('lName', 'Last Name:') }} 
						{{ Form::text('lName', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Last Name']) }}
						</div>
						<div class="form-group row">
                        {{ Form::label('mail', 'Email:') }}
						{{ Form::email('mail', $value = null, ['class' => 'form-control  text-box single-line', 'placeholder' => 'email@examplemail.com']) }}
						</div>
						<div class="form-group row">
                        {{ Form::label('number', 'Mobile Number:') }}
						{{ Form::text('number', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'ex.09501111111']) }}
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group row">
                        {{ Form::label('clinic', 'Clinic/Hospital:') }}
						{{ Form::text('clinic', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'MeDPulse Clinic']) }}
						</div>
						<div class="form-group row">
                        {{ Form::label('specialty', 'Specialty:') }}
						{{ Form::text('specialty', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Specialty']) }}
						</div>
		    			<div class="form-group row">
                        {{ Form::label('schedule', 'Schedule:') }}
							<div class="input-group date" id="datetimepicker1">
                            {{ Form::text('schedule', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => '']) }}
								<span class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</span>
							</div>
						</div>
						<div class="form-group row">
                        {{ Form::label('rate', 'Rate:') }}
						{{ Form::text('rate', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Rate']) }}
							<label for="rate">Rate:</label>
							<input
								type="text"
								id="rate"
								name="Rate"
								class="form-control text-box single-line"
								placeholder="Rate"
							/>
						</div>
						<div class="form-group row">
                        {{ Form::label('experience', 'Experiences:') }}
						{{ Form::textarea('experience', $value = null, ['class' => 'form-control', 'maxlength' => '255', 'id' => 'experience', 'rows' => '3' 'placeholder' => 'Your Experiences here']) }}
						</div>
                    </div>
                    <script type="text/javascript">
							$(function () {
								$("#datetimepicker1").datetimepicker();
							});
						</script>
				</div>
					<div class="form-check text-center pb-2">
                    {{ Form::checkbox('terms-and-services',['class'=> 'form-check-input']) }} <!-- checkbox -->
					{{ Form::label('terms-and-services','I have read and agree on the.') }}
								<a href="#" data-toggle="modal" data-target="#modalTerms"
									>Terms and Services </a
								> <p>of the meDPulse website</p>
						<!-- Modal -->
						<div
							class="modal fade"
							id="modalTerms"
							tabindex="-1"
							role="dialog"
							aria-labelledby="exampleModalLongTitle"
							aria-hidden="true"
						>
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">
											Terms and Services
										</h5>
										<button
											type="button"
											class="close"
											data-dismiss="modal"
											aria-label="Close"
										>
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<h5 class="pb-3">
											By Signing-up on this Virtual Medical Mission through
											E-consultation platform, I hereby undertake, agree and
											consent on the following:
										</h5>
										<div class="container">
											<p>
												1. I hereby agree that my personal information be
												collected only for a legitimate purpose and that the
												same is processed fairly and lawfully;
											</p>
											<p>
												2. I hereby undertake to provide accurate, relevant
												personal and sensitive information and, where necessary
												for purposes for which it is to be used the processing
												of personal information, be kept up to date;
											</p>
											<p>
												3. I hereby consent to the processing of my personal
												information and that the same is a vital interest on my
												life and health;
											</p>
											<p>
												4. I hereby agree that the processing is necessary for
												the purposes of the legitimate interests pursued by the
												personal information controller (in this case the
												attending physician) or by a third party or parties to
												whom the data is disclosed, except where such interests
												are overridden by fundamental rights and freedoms of the
												data subject which require protection under the
												Philippine Constitution;
											</p>
											<p>
												5. I hereby consent to the processing of my sensitive
												personal information as well as the privileged
												information involving the
												<strong
													>Doctor-Patient relationship under Rule 130, section
													24, paragraph (c) of the Rules of Court</strong
												>, the processing of which is necessary for purposes of
												medical treatment, and that I am aware that an adequate
												level of protection of my personal information is
												ensured;
											</p>
											<p>
												6. I hereby agree to be bound by the rights of a data
												subject under section 16 of
												<strong
													>Republic Act No. 10173 otherwise known as "Data
													Privacy Act of 2012"</strong
												>.
											</p>
										</div>
									</div>
									<div class="modal-footer">
										<button
											type="button"
											class="btn btn-secondary"
											data-dismiss="modal"
										>
											Close
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						{{ Form::button('Submit'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
						{{ Form::button('Cancel'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
					</div>
            {!! Form::close()!! }
			</div>
		</div>
			<!-- Start of registration body -->
			
			<div
				id="BodyContent"
				class="container-fluid border border-light rounded shadow"
			>
				<div class="container-fluid">
					<div class="content-header">
						<div class="title-primary text-center pt-2">
							<h3>
								<i class="fa fa-user text-black-50" aria-hidden="true"
									>Pre-Register Now to access the meDPulse!</i
								>
							</h3>
						</div>
						<hr />
					</div>

					{!! Form::open(['url' => 'foo/bar']) !!}



           

					
						<div class="row">
							<div class="col-md-4 col-sm-3"></div>
							<div class="col-md-4 col-sm-3">
								<div class="form-group row">
									{Form::label('firstName', 'First Name:') } <!-- label of first name -->
									{ Form::text('firstName', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'First Name']) }	
								</div>
								<div class="form-group row">
									{ Form::label('middleName', 'Middle Name:') }
									{ Form::text('middleName', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Middle Name']) }	
								</div>
								<div class="form-group row">
									{ Form::label('familyName', 'Family Name:') }
									{ Form::text('familyName', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Middle Name']) }
								</div>

								<div class="form-group row">
									{ Form::label('email', 'Email:') }
									{ Form::email('email', $value = null, ['class' => 'form-control  text-box single-line', 'placeholder' => 'email@rocketmail.com']) }
								</div>
								<div class="form-group row">
									{ Form::label('mobileNo', 'Mobile Number:') }
									<label for="MobileNo">Mobile Number</label>
									<div class="input-group mimic-input">
										<span class="input-group-addon">+63</span>
										{ Form::text('mobileNo', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'ex.9501111111']) }
									</div>
								</div>
							</div>
						</div>
						<div class="form-check text-center pb-2">
						{ Form::checkbox('terms-and-services',['class'=> 'form-check-input']) } <!-- checkbox -->
						{ Form::label('terms-and-services','I have read and agree on the
								<a href="#" data-toggle="modal" data-target="#modalTerms"
									>Terms and Services</a
								>
								of the meDPulse website.') }
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
													personal and sensitive information and, where
													necessary for purposes for which it is to be used the
													processing of personal information, be kept up to
													date;
												</p>
												<p>
													3. I hereby consent to the processing of my personal
													information and that the same is a vital interest on
													my life and health;
												</p>
												<p>
													4. I hereby agree that the processing is necessary for
													the purposes of the legitimate interests pursued by
													the personal information controller (in this case the
													attending physician) or by a third party or parties to
													whom the data is disclosed, except where such
													interests are overridden by fundamental rights and
													freedoms of the data subject which require protection
													under the Philippine Constitution;
												</p>
												<p>
													5. I hereby consent to the processing of my sensitive
													personal information as well as the privileged
													information involving the
													<strong
														>Doctor-Patient relationship under Rule 130, section
														24, paragraph (c) of the Rules of Court</strong
													>, the processing of which is necessary for purposes
													of medical treatment, and that I am aware that an
													adequate level of protection of my personal
													information is ensured;
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
						{ Form::submit('Submit', ['class' => 'btn btn-primary'] ) }
						{ Form::submit('Cancel', ['class' => 'btn btn-primary'] ) }
								<button type="submit" class="btn btn-primary" id="BtnSubmit">
									Submit
								</button>
								<button type="submit" class="btn btn-primary" id="BtnCancel">
									Cancel
								</button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
			
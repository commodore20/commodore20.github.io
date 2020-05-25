<!-- Created May 20, 2020-->
<!-- Client Pre-Registration-->
<!-- Updated May 25, 2020 --> <!-- Converted Forms and Inputs to Old HTML Syntax -->
		<div class="container-fluid bods py-5">
			<div class="container-fluid">
				<div class="container border border-light rounded shadow">
					<div class="content-header">
						<div class="title-primary text-center pt-2">
							<img src="images/logo-sm.png" alt="" />
							<h3>
								Pre-Registration
							</h3>
						</div>
						<hr />
					</div>

					<form action="" method="post" novalidate="novalidate">
						<div class="row">
							<div class="col-md-4 col-sm-3"></div>
							<div class="col-md-4 col-sm-3">
								<div class="form-group row">
									<label for="fname">First Name</label>
									<input
										class="form-control text-box single-line"
										data-val="true"
										data-val-length="The field First Name must be a string with a maximum length of 40."
										data-val-length-max="40"
										data-val-required="The First Name field is required."
										id="fname"
										name="fname"
										type="text"
										value=""
									/>
								</div>
								<div class="form-group row">
									<label for="lname">Last Name</label>

									<input
										class="form-control text-box single-line"
										data-val="true"
										data-val-length="The field Last Name must be a string with a maximum length of 25."
										data-val-length-max="25"
										data-val-required="The Last Name field is required."
										id="lname"
										name="lname"
										type="text"
										value=""
									/>
								</div>
								<div class="form-group row">
									<label for="contact">Contact Number</label>

									<input
										class="form-control text-box single-line"
										data-val="true"
										data-val-length="The field Mobile No. must be a string with a minimum length of 10 and a maximum length of 10."
										data-val-length-max="10"
										data-val-length-min="10"
										data-val-regex="The field Mobile No. must be a number with exactly 10 digits."
										data-val-regex-pattern="^[0-9]{10}$"
										data-val-required="The Mobile No. field is required."
										id="contact"
										name="contact"
										type="text"
										value=""
										placeholder=" ex. 094646901231"
									/>
								</div>
								<div class="form-group row">
									<label for="email">Email</label>
									<input
										class="form-control text-box single-line"
										data-val="true"
										id="email"
										name="email"
										placeholder="edit@gmail.com"
										type="email"
										value=""
									/>
								</div>
								<div class="form-group row">
									<label for="pin-digit">6-Pin Digit</label>
									<div class="input-group">
										<input
											type="password"
											pattern="[0-9]*"
											inputmode="numeric"
											id="pin-digit"
											name="pin-digit"
											class="form-control"
											maxlength="6"
										/>
										<span class="input-group-addon">
											<span class="fa fa-eye"></span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-check text-center pb-2">
							<input
								type="checkbox"
								class="form-check-input"
								id="terms-and-services"
							/>
							<label class="form-check-label" for="terms-and-services"
								>I have read and agree on the
								<a href="#" data-toggle="modal" data-target="#modalTerms"
									>Terms and Services</a
								>
								of the meDPulse website.
							</label>
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
							<p>
								<button type="submit" class="btn btn-primary" id="BtnSubmit">
									Submit
								</button>
								<button type="submit" class="btn btn-primary" id="BtnCancel">
									Cancel
								</button>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>

        	<!-- Created May 23, 2020 -->
		<!-- Updated May 25, 2020 --> <!-- Laravel Syntax removed, changed to HTML form syntax -->
		
	<div class="container-fluid">
		<div class="container">
			<div class="row justify-content-around py-4">
				<div class="col-md-5 border rounded shadow-sm">
					<div class="form-group">
						<label for="address">Full Address:</label>
						<input
							type="text"
							id="address"
							name="address"
							class="form-control text-box single-line"
							placeholder="Street, City/Municipality, Province"
						/>
					</div>
					<div class="form-group">
						<label for="zip-code">Zip Code:</label>
						<input
							type="text"
							id="zip-code"
							name="zip-code"
							class="form-control text-box single-line"
							pattern="\d*"
							placeholder=""
							maxlength="4"
						/>
					</div>
					<!--Modal Anchor-->
					<a href="" data-toggle="modal" data-target="#exampleModalCenter"
						>Zip Code Guide</a
					>

					<!-- Modal -->
					<div
						class="modal fade"
						id="exampleModalCenter"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">
										DavSur Zip Code Guide
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
									<img src="images/zip-code.jpg" alt="" />
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
				</div>
				<div class="col-md-5 border rounded shadow-sm">
					<div class="form-group pt-5">
						<label for="specialty">Specialty:</label>
						<input
							type="text"
							id="specialty"
							name="specialty"
							class="form-control text-box single-line"
							placeholder="Specialty"
						/>
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
				</div>
			</div>
		</div>
	</div>

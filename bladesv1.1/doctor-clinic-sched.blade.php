        <div class="container-fluid poppins-font">
			<div class="row">
				<div class="col-md-3"></div>
				<div
					class="col-md-7 border rounded shadow-sm py-4 px-3"
					style="background-color: white;"
				>
					<div class="row">
						<div class="col-md-5 form-group">
							<h5 class="font-weight-bold">Schedule Timings</h5>
							<p>Timing Slot Duration</p>
							<select name="duration" id="duration" class="form-control">
								<option value="">--</option>
								<option value="15min">15 mins</option>
								<option value="30min">30 mins</option>
								<option value="45min">45mins</option>
								<option value="1hr">1 hour</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<nav class="slot-nav">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item active">
										<a
											data-toggle="tab"
											href="#sunday_slot"
											class="btn btn-outline-info my-2 mx-1"
											>Sunday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#monday_slot"
											class="btn btn-outline-info my-2 mx-1"
											>Monday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#tuesday_slot"
											class="btn btn-outline-info my-2"
											>Tuesday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#wednesday_slot"
											class="btn btn-outline-info my-2 mx-2"
											>Wednesday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#thursday_slot"
											class="btn btn-outline-info my-2"
											>Thursday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#friday_slot"
											class="btn btn-outline-info my-2"
											>Friday</a
										>
									</li>
									<li class="nav-item">
										<a
											data-toggle="tab"
											href="#saturday_slot"
											class="btn btn-outline-info my-2"
											>Saturday</a
										>
									</li>
								</ul>
							</nav>
							<div class="tab-content py-3">
								<div class="tab-pane active fade show" id="sunday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#edit_time_slot" data-toggle="modal"
											><i class="fa fa-edit"></i> Edit
										</a>
									</h6>

									<div class="doc-slots">
										<div class="doc-time">
											8:00 am-9:00 am &nbsp;
											<span class="close"> &times;</span>
										</div>
										<div class="doc-time">
											12:00 pm-1:00 pm &nbsp;
											<span class="close"> &times;</span>
										</div>
										<div class="doc-time">
											2:00 pm-3:00 pm &nbsp;
											<span class="close"> &times;</span>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="monday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href=""><i class="fa fa-edit"></i> Edit </a>
									</h6>
									<div class="doc-slots">
										<div class="doc-time">
											9:00 am-10:00 am &nbsp;
											<span class="close"> &times;</span>
										</div>
										<div class="doc-time">
											3:00 pm-4:00 am &nbsp;
											<span class="close"> &times;</span>
										</div>
										<div class="doc-time">
											2:30 pm-3:00 pm &nbsp;
											<span class="close"> &times;</span>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="tuesday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#add_time_slot" data-toggle="modal">
											<i class="fa fa-plus-circle"></i>Add Slots</a
										>
									</h6>
									<p class="text-muted">Not Available</p>
								</div>
								<div class="tab-pane fade" id="wednesday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#add_time_slot" data-toggle="modal">
											<i class="fa fa-plus-circle"></i>Add Slots</a
										>
									</h6>
									<p class="text-muted">Not Available</p>
								</div>
								<div class="tab-pane fade" id="thursday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#add_time_slot" data-toggle="modal">
											<i class="fa fa-plus-circle"></i>Add Slots</a
										>
									</h6>
									<p class="text-muted">Not Available</p>
								</div>
								<div class="tab-pane fade" id="friday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#add_time_slot" data-toggle="modal">
											<i class="fa fa-plus-circle"></i>Add Slots</a
										>
									</h6>
									<p class="text-muted">Not Available</p>
								</div>
								<div class="tab-pane fade" id="saturday_slot">
									<h6 class="card-title d-flex justify-content-lg-between">
										<span>Time Slots</span>
										<a href="#add_time_slot" data-toggle="modal">
											<i class="fa fa-plus-circle"></i>Add Slots</a
										>
									</h6>
									<p class="text-muted">Not Available</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal add-->

		<div
			class="modal fade custom-modal"
			id="add_time_slot"
			style="display: none;"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Time Slots</h5>
						<button
							type="button"
							class="close"
							data-dismiss="modal"
							aria-label="Close"
						>
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash-o"></i
										></a>
									</div>
								</div>
							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"
									><i class="fa fa-plus-circle"></i> Add More</a
								>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">
									Save Changes
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Edit-->

		<div
			class="modal fade custom-modal"
			id="edit_time_slot"
			style="display: none;"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Time Slots</h5>
						<button
							type="button"
							class="close"
							data-dismiss="modal"
							aria-label="Close"
						>
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="hours-info">
								<div class="row form-row">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option selected="">12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected="">12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option selected="">12.30 am</option>
														<option>1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected="">1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash"></i
										></a>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option selected="">1.00 am</option>
														<option>1.30 am</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label>
													<select class="form-control">
														<option>-</option>
														<option>12.00 am</option>
														<option>12.30 am</option>
														<option>1.00 am</option>
														<option selected="">1.30 am</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash"></i
										></a>
									</div>
								</div>

								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash"></i
										></a>
									</div>
								</div>
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash"></i
										></a>
									</div>
								</div>
								<div class="row form-row hours-cont">
									<div class="col-12 col-md-10">
										<div class="row form-row">
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Start Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>End Time</label
													><select class="form-control"
														><option>-</option
														><option>12.00 am</option
														><option>12.30 am</option
														><option>1.00 am</option
														><option>1.30 am</option></select
													>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-2">
										<label class="d-md-block d-sm-none d-none">&nbsp;</label
										><a href="#" class="btn btn-danger"
											><i class="fa fa-trash"></i
										></a>
									</div>
								</div>
							</div>

							<div class="add-more mb-3">
								<a href="javascript:void(0);" class="add-hours"
									><i class="fa fa-plus-circle"></i> Add More</a
								>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary submit-btn">
									Save Changes
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end of Main content-->
		<script type="text/javascript">
			var closebtns = document.getElementsByClassName("close");
			var i;

			for (i = 0; i < closebtns.length; i++) {
				closebtns[i].addEventListener("click", function () {
					this.parentElement.style.display = "none";
				});
			}
		</script>
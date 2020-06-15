<!-- Created May 21 , 2020 -->
<!-- to see the full view of the page, please open the doc-full-profile.html -->
<div class="container-fluid">
			<div class="container">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb border shadow-sm">
						<li class="breadcrumb-item">
							<a href="navbar-sidebar.html">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="search-form.html">Search</a>
						</li>
						<li class="breadcrumb-item" aria-current="page">Doctors</li>
					</ol>
				</nav>
				<div class="container">
					<div class="row border rounded shadow-sm py-3 bg-white">
						<div class="col-lg-2 pl-4">
							<img src="images/doc-mockup.png" class="rounded-circle" alt="" />
						</div>
						<div class="col-md-8 pt-3 pl-5">
							<h3 class="font-weight-bold">John Dela Cruz</h3>
							<p>Pediatrician</p>
							<h6>Rate per Appointment:</h6>
							<p>400</p>
						</div>
						<div class="col-lg-2">
							<button class="btn btn-secondary" hidden>
								<i class="fa fa-edit"></i> Edit Profile
							</button>
						</div>
					</div>
					<div class="container pt-4">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a
											href=""
											data-target="#info"
											data-toggle="tab"
											class="nav-link active"
											>More Info</a
										>
									</li>
									<li class="nav-item">
										<a
											href=""
											data-target="#clinic"
											data-toggle="tab"
											class="nav-link"
											>Clinics</a
										>
									</li>
								</ul>
								<div class="tab-content bg-white">
									<div class="tab-pane active border rounded" id="info">
										<div class="card-body">
											<div class="row py-4 px-4">
												<div class="col-md-10">
													<h5 class="font-weight-bold">About</h5>
													<p id="about-text">Not Available</p>
													<h5 class="font-weight-bold mb-4">Specialization</h5>
													<p id="main-specialty">
														<strong>Main: </strong> Pediatrician
													</p>
													<p id="sub-specialty"><strong>Sub:</strong> None</p>
													<h5 class="font-weight-bold">Experiences</h5>
													<p id="experience-text">None</p>
													<h5 class="font-weight-bold">Education</h5>
													<p id="education-text">None</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane border rounded" id="clinic">
										<div class="container borded rounded shadow-sm">
											<div class="row">
												<div class="col-lg-2 py-4">
													<img
														src="images/clinic-mockup.jpg"
														class="border rounded-circle"
														alt=""
													/>
												</div>
												<div class="col-md-5 py-4 align-items-center">
													<h4>San Jose Clinic</h4>
													<p id="room-text">Room 420</p>
													<p id="address-text">
														143 Mother Ignacia Road, Digos City
													</p>
												</div>
												<div class="col-lg-5 py-5">
													<div class="text-center">
														<button
															type="submit"
															class="btn btn-outline-primary"
															id="btn-appoint"
														>
															<i class="fa fa-search-plus"></i> Book
														</button>
														<button
															type="submit"
															class="btn btn-outline-success"
															id="btn-chat"
														>
															<i class="fa fa-envelope"></i> Chat
														</button>
														<button
															type="submit"
															class="btn btn-outline-info"
															id="btn-chat"
															data-toggle="modal"
															data-target="#viewSched"
														>
															<i class="fa fa-calendar"></i> Schedule
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal event for View Schedule -->
			<div
					class="modal fade"
					id="viewSched"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLongTitle"
					aria-hidden="true"
				>
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">
									Clinic Schedule
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
								<div class="container poppins-font">
									<div class="row">
										<div class="col-md-12">
											<nav class="slot-nav">
												<ul class="nav nav-tabs nav-justified">
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#sunday_slot"
															class="nav-link active"
															>Sunday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#monday_slot"
															class="nav-link"
															>Monday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#tuesday_slot"
															class="nav-link"
															>Tuesday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#wednesday_slot"
															class="nav-link"
															>Wednesday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#thursday_slot"
															class="nav-link"
															>Thursday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#friday_slot"
															class="nav-link"
															>Friday</a
														>
													</li>
													<li class="nav-item">
														<a
															data-toggle="tab"
															href="#saturday_slot"
															class="nav-link"
															>Saturday</a
														>
													</li>
												</ul>
											</nav>
											<div class="tab-content py-3">
												<div class="tab-pane active fade show" id="sunday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>

													<div class="doc-slots">
														<div class="doc-time">
															8:00 am-9:00 am &nbsp;
														</div>
														<div class="doc-time">
															12:00 pm-1:00 pm &nbsp;
														</div>
														<div class="doc-time">
															2:00 pm-3:00 pm &nbsp;
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="monday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>
													<div class="doc-slots">
														<div class="doc-time">
															9:00 am-10:00 am &nbsp;
														</div>
														<div class="doc-time">
															3:00 pm-4:00 am &nbsp;
														</div>
														<div class="doc-time">
															2:30 pm-3:00 pm &nbsp;
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="tuesday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>
													<p class="text-muted">Not Available</p>
												</div>
												<div class="tab-pane fade" id="wednesday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
														<a href="#add_time_slot" data-toggle="modal">
															<i class="fa fa-plus-circle"></i>Add Slots</a
														>
													</h6>
													<p class="text-muted">Not Available</p>
												</div>
												<div class="tab-pane fade" id="thursday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>
													<p class="text-muted">Not Available</p>
												</div>
												<div class="tab-pane fade" id="friday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>
													<p class="text-muted">Not Available</p>
												</div>
												<div class="tab-pane fade" id="saturday_slot">
													<h6
														class="card-title d-flex justify-content-lg-between"
													>
														<span>Time Slots</span>
													</h6>
													<p class="text-muted">Not Available</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button
									type="button"
									class="btn btn-danger"
									data-dismiss="modal"
								>
									Close
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
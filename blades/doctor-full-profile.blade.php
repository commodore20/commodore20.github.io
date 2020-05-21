<!-- Created May 21 , 2020 -->
<!-- to see the full view of the page, please open the doc-full-profile.html -->
        <div class="container">
            <!-- Start of Breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="navbar-sidebar.html">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="search-form.html">Search</a></li>
					<li class="breadcrumb-item" aria-current="page">Doctors</li>
				</ol>
            </nav>
            <!-- End of Breadcrumb -->
			<div class="container">
				<div class="row border rounded shadow-sm py-3">
                    <!-- Start of Profile-->
					<div class="col-lg-2 pl-4">
						<img src="images/doc-mockup.png" class="rounded-circle" alt="" />
					</div>
					<div class="col-md-8 pt-3">
						<h3 class="font-weight-bold">John Dela Cruz</h3>
						<p>Pediatrician</p>
						<h6>Rate per Appointment:</h6>
						<p>400</p>
					</div>
					<div class="col-lg-2">
						<button class="btn btn-secondary">
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
                            <!-- Start of More Info Pane -->
							<div class="tab-content">
								<div class="tab-pane active border rounded" id="info">
									<div class="card-body">
										<div class="row py-4 px-4">
											<div class="col-md-10">
												<h5 class="font-weight-bold">About</h5>
												<p id="about-text">Not Available</p>
												<h5 class="font-weight-bold mb-4">Specialization</h5>
												<div class="d-flex flex-row align-items-center">
													<p class="font-weight-bold">Main:</p>
													<p id="specialty-main">Pediatrician</p>
												</div>
												<div class="d-flex flex-row align-items-center mb-2">
													<p class="font-weight-bold">Sub:</p>
													<p id="specialty-sub">None</p>
												</div>
												<h5 class="font-weight-bold">Experiences</h5>
												<p id="experience-text">None</p>
												<h5 class="font-weight-bold">Education</h5>
												<p id="education-text">None</p>
											</div>
										</div>
									</div>
                                </div>
                                <!-- End of More Info Pane -->

                                <!-- Start of Clinic Pane -->
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
														class="btn btn-primary"
														id="btn-appoint"
													>
														<i class="fa fa-search-plus"></i> Book an
														Appointment
													</button>
													<button
														type="submit"
														class="btn btn-primary"
														id="btn-chat"
													>
														<i class="fa fa-envelope"></i> Chat Doctor
													</button>
												</div>
											</div>
										</div>
									</div>
                                </div>
                                <!-- End of Clinic Pane -->
							</div>
						</div>
					</div>
                </div>
                <!-- End of Profile -->
			</div>
		</div>
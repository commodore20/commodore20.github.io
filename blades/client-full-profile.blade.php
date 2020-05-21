<!-- Created May 21, 2020 -->
<!-- to see the full view of the page, please open the client-full-profile.html -->
        <div class="container">
			<!--Start of navbar breadcrumb-->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Home</a></li>
					<li class="breadcrumb-item"><a href="">Search</a></li>
					<li class="breadcrumb-item" aria-current="page">Profile</li>
				</ol>
			</nav>
			<!--end of Navbar Breadcrumb-->
			<div class="container">
				<!--Start of Client's Profile-->
				<div class="row border rounded shadow-sm py-3">
					<div class="col-lg-2 pl-4">
						<img
							src="images/default-avatar.png"
							class="rounded-circle"
							alt=""
						/>
					</div>
					<div class="col-md-8 pt-4">
						<h3 class="font-weight-bold">Carlo Penduko</h3>
						<p id="email-text">carlopenduko@example.com</p>
						<p id="address-text">420 Acacia Village, San Isidro, Digos City</p>
					</div>
					<div class="col-lg-2">
						<button class="btn btn-secondary">
							<i class="fa fa-edit"></i> Edit Profile
						</button>
					</div>
				</div>
				<!--end of Client's Profile-->
				<div class="container pt-4">
					<!--Start of Information tab pane-->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a
										href=""
										data-target="#info"
										data-toggle="tab"
										class="nav-link active"
										>About</a
									>
								</li>
								<li class="nav-item">
									<a
										href=""
										data-target="#follow"
										data-toggle="tab"
										class="nav-link"
										>Followed Physicians</a
									>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active border rounded" id="info">
									<div class="card-body">
										<div class="row py-4 px-4">
											<div class="col-md-10">
												<div class="form-group">
													<h5 class="font-weight-bold">Gender</h5>
													<p id="about-text">Male</p>
												</div>
												<div class="form-group">
													<h5 class="font-weight-bold">Birthday</h5>
													<p id="birthday-text">February 29, 1990</p>
												</div>
												<div class="form-group">
													<h5 class="font-weight-bold">Contact Number</h5>
													<p id="number-text">+639469191919</p>
												</div>
												<div class="form-group">
													<h5 class="font-weight-bold">Miscellaneous</h5>
													<p id="misc-text">None</p>
												</div>
												<div class="form-group">
													<h5 class="font-weight-bold">Badges</h5>
													<a href="#" class="badge badge-pill badge-primary"
														>500 Appointments</a
													>
													<a href="#" class="badge badge-pill badge-secondary"
														>Premium User</a
													>
													<a href="#" class="badge badge-pill badge-success"
														>Beta User</a
													>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane border rounded" id="follow">
									<div class="container borded rounded shadow-sm">
										<div class="row">
											<div class="col-lg-2 py-4">
												<img
													src="images/customer-mockup.jpg"
													class="border rounded-circle"
													alt=""
												/>
											</div>
											<div class="col-md-5 py-4 align-items-center">
												<h4 class="font-weight-bold">Harold Hidenciana</h4>
												<h5 id="specialty-text">Physician</h5>
												<h6 id="room-text">San Jose Clinic</h6>
												<a href="">More Info</a>
											</div>
											<div class="col-md-5 py-5">
												<!-- May 21, 2020. Button doesn't seem to have a margin when in responsive site. Gonna fix ASAP-->
												<div class="form-group">
													<button
														type="submit"
														class="btn btn-secondary"
														id="btn-appoint"
													>
														<i class="fa fa-heart"></i> Unfollow
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
							</div>
						</div>
					</div>
					<!--End of INformation Tab Pane-->
				</div>
			</div>
		</div>
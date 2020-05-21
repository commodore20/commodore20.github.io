<!--Created May 21, 2020 -->
<!-- NOTICE!!!!!! naapil nako ang dashboard dari.. see comment below ug i delete lang ang sa dashboard na part. I will separate them later -->
<!-- NOTICE # 2 !! Please update the head tag . naa sa navbar-sidebar.html . naay css nga na add para sa sidebar. :) -->
<div class="d-flex fant" id="wrapper">
			<!-- Sidebar -->
			<div class="bg-light border-right" id="sidebar-wrapper">
				<div class="sidebar-heading">
					<img src="images/logo-sm.png" alt="" />
				</div>
				<div class="list-group list-group-flush">
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>Dashboard</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>Book an Appointment</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>Search</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>Doctors</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>History</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						>About</a
					>
				</div>
			</div>
			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
				<!-- Primary Navbar v2 -->
				<nav
					class="nav navbar navbar-expand navbar-light navbar-inverse nab fant"
				>
					<button class="btn" id="menu-toggle">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!--
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="index.html"
									><i class="fa fa-search-plus"></i> Search</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"
									><i class="fa fa-calendar"></i> Appoinments</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"
									><i class="fa fa-envelope"></i> Chat</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"
									><i class="fa fa-history"></i> History</a
								>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"
									><i class="fa fa-book"></i> <strong>Book</strong></a
								>
							</li>
						</ul>
						-->
					<ul class="nav navbar-nav ml-auto position-static">
						<li class="nav-item">
							<a class="nav-link" href="#"
								><i class="fa fa-envelope-o"></i> <i class="quantity"></i
							></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								href="#"
								id="navbarDropdown"
								role="button"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								<i class="fa fa-cog"></i>
							</a>
							<div
								class="dropdown-menu dropdown-primary dropdown-menu-right"
								aria-labelledby="navbarDropdown"
							>
								<a class="dropdown-item" href="#">My Profile</a>
								<a class="dropdown-item" href="#">Preferences</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Logout</a>
							</div>
						</li>
					</ul>
				</nav>
				<!-- Gonna comment this dashboard section, feel free to open if you want an example-->
				<div class="container-fluid fant py-3" id="dashboard-body">
					<div class="container border rounded shadow-sm px-5">
						<div class="content-header">
							<div class="title-primary">
								<h3 class="text-center">
									<i class="fa fa-calendar-times-o"> </i>
									Recent Appointments
								</h3>
							</div>
							<div class="row">
								<div class="table-responsive-md col-md-12">
									<table class="table table-hover table-bordered table">
										<thead class="table-info">
											<tr>
												<th scope="col">#</th>
												<th scope="col">Clinic</th>
												<th scope="col">Physician</th>
												<th scope="col">Remarks</th>
												<th scope="col">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>St. Jude Clinic</td>
												<td>Otto Sotto</td>
												<td>Follow up checkup after 3 days</td>
												<td>
													<button>
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</button>
													<button><i class="fa fa-close"></i></button>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Bansalan Clinic</td>
												<td>Jon Bovi</td>
												<td>Finished</td>
												<td>
													<button>
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</button>
													<button><i class="fa fa-close"></i></button>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>St. Therese Clinic</td>
												<td>Ma. Jessa Conception</td>
												<td>Cancelled</td>
												<td>
													<button>
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</button>
													<button><i class="fa fa-close"></i></button>
												</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Xiao Xiu Clinic</td>
												<td>Tang San</td>
												<td>Finished</td>
												<td>
													<button>
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</button>
													<button><i class="fa fa-close"></i></button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row">
							<div
								class="col-md-12 border rounded shadow-sm pt-3 table-responsive-md"
							>
								<h3 class="text-center">
									<i class="fa fa-bookmark"> </i>
									Your Bookings
								</h3>

								<div class="alert alert-info alert-dismissable">
									<a class="panel-close close" data-dismiss="alert">×</a> You
									still have to come back for the follow-up check up by
									<strong>Dr. Black Jack</strong>.
								</div>
								<table class="table table-hover table-bordered table">
									<thead class="table-info">
										<tr>
											<th scope="col">#</th>
											<th scope="col">Name of Doctor</th>
											<th scope="col">Date</th>
											<th scope="col">Time of Appointment</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Black Jack</td>
											<td>June 20, 2019</td>
											<td>8:00 - 9:00 am</td>
											<td>
												<button>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</button>
												<button><i class="fa fa-close"></i></button>
											</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob Leighs</td>
											<td>January 1, 2020</td>
											<td>1:00 - 2:00 pm</td>
											<td>
												<button>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</button>
												<button><i class="fa fa-close"></i></button>
											</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry the Bird</td>
											<td>May 25, 2020</td>
											<td>6:00 - 7:00 pm</td>
											<td>
												<button>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</button>
												<button><i class="fa fa-close"></i></button>
											</td>
										</tr>
										<tr>
											<th scope="row">4</th>
											<td>Ju Ne Maruku</td>
											<td>May 4, 2020</td>
											<td>3:00 - 5:00 pm</td>
											<td>
												<button>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</button>
												<button><i class="fa fa-close"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /#page-content-wrapper -->
		</div>
        <!-- /#wrapper -->
        <!-- Script sa sidebar, dont erase -->
		<script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
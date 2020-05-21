<!-- Updated Dashboard May 22, 2020. need suggestions and constructive criticisms to improve the front end design -->
<!-- Dashboard is included in the navbar-with-sidebar blade, be careful when calling the blades -->
<!-- to see the full view of the page, please open the navbar-sidebar.html -->
				
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
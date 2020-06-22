<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="images/favicon-16x16.png"
		/>
		<link rel="manifest" href="images/site.webmanifest" />
		<link rel="stylesheet" href="css/simple-sidebar.css" />
		<link rel="stylesheet" href="css/globalstyle.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Stylesheet font montserrat-->
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro&display=swap"
			rel="stylesheet"
		/>
		<!--New stylesheet Rubik font-->
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap"
			rel="stylesheet"
		/>
		<!-- Poppins font-->
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
			rel="stylesheet"
		/>
		<!-- Font Awesome-->
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<!-- Bootstrap CDN CSS -->
		<link
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous"
		/>
		<!-- Do Not forget to Copy the Script  -->

		<title>MeDPulse | List View of Doctors</title>
	</head>
	<body>
		<div class="container-fluid poppins-font">
			<div class="container border my-3">
				<div class="row py-3">
					<div class="col-md-2 col-sm-2">
						<h2 class="pt-4">Monday</h2>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="">
							<h5>Time</h5>
							<small
								><i class="fa fa-clock-o"></i> 20 June 2020, 10:00 - 10:30 AM
								Slots: 5</small
							><br />
							<small
								><i class="fa fa-clock-o"></i> 20 June 2020, 12:00 - 12:30 PM
								Slots:5</small
							><br />
						</div>
					</div>
					<div class="col-md-4 col-sm-4 pt-5">
						<button class="btn btn-sm btn-outline-info">
							<i class="fa fa-eye"></i> View
						</button>
						<button
							class="btn btn-sm btn-outline-success"
							data-toggle="modal"
							href="#add_time_slot"
						>
							<i class="fa fa-plus-circle"></i> Add
						</button>
						<button
							class="btn btn-sm btn-outline-primary"
							data-toggle="modal"
							href="#edit_time_slot"
						>
							<i class="fa fa-edit"></i> Edit
						</button>
					</div>
				</div>
			</div>
			<div class="container border my-3">
				<div class="row py-3">
					<div class="col-md-2 col-sm-2">
						<h2 class="pt-4">Tuesday</h2>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="">
							<h5>Time</h5>
							<small
								><i class="fa fa-clock-o"></i> 21 June 2020, 1:00 - 1:30 AM
								Slots: 5</small
							><br />
							<small
								><i class="fa fa-clock-o"></i> 21 June 2020, 12:00 - 12:30 PM
								Slots:5</small
							><br />
						</div>
					</div>
					<div class="col-md-4 col-sm-4 pt-5">
						<button class="btn btn-sm btn-outline-info">
							<i class="fa fa-eye"></i> View
						</button>
						<a
							class="btn btn-sm btn-outline-success"
							data-toggle="modal"
							href="#add_time_slot"
						>
							<i class="fa fa-plus-circle"></i> Add
						</a>
						<a
							class="btn btn-sm btn-outline-primary"
							data-toggle="modal"
							href="#edit_time_slot"
						>
							<i class="fa fa-edit"></i> Edit
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade custom-modal" id="add_time_slot">
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
		<!-- Your Scripts here-->
		<!-- Scripts must always be below after the content to avoid laggy loading-->

		<!--Fullcalendar JS-->
		<script src="plugins/fullcalendar-4.4.2/packages/core/main.js"></script>
		<script src="plugins/fullcalendar-4.4.2/packages/daygrid/main.js"></script>
		<script src="plugins/fullcalendar-4.4.2/packages/bootstrap/main.min.js"></script>

		<!-- Timegrid and List JS-->
		<script src="plugins/fullcalendar-4.4.2/packages/timegrid/main.min.js"></script>
		<script src="plugins/fullcalendar-4.4.2/packages/list/main.min.js"></script>
		<!-- Interaction JS-->
		<script src="plugins/fullcalendar-4.4.2/packages/interaction/main.min.js"></script>
		<!-- Sweetalert CDN JS-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<!-- JQuery JS-->
		<script
			src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
			crossorigin="anonymous"
		></script>
		<!-- Popper JS-->
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"
		></script>
		<!-- Bootstrap JS-->
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous"
		></script>
	</body>
</html>

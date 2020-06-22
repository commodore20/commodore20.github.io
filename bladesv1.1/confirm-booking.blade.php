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

		<title>MeDPulse | Confirmation</title>
	</head>
	<body>
		<div class="container-fluid poppins-font">
			<div class="container mt-3">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 pl-5 border rounded shadow-sm">
						<div class="row justify-content-between pt-4">
							<div class="col-md-6">
								<p>Day: <strong>Sunday</strong></p>
							</div>
							<div class="col-md-6">
								<p>Time: <strong>8:00 - 9:00 am</strong></p>
							</div>
						</div>
						<div class="pb-4">
							<h6>With a Patient:</h6>
							<input type="text" class="form-control" />
						</div>
						<div class="pb-3">
							<h6 class="font-weight-bold">Doctor's Information</h6>
							<div class="row">
								<div class="col-md-3 pr-3">
									<img
										src="images/doc-mockup.png"
										class="rounded img-100x100"
										alt="doc"
									/>
								</div>
								<div class="col-md-9">
									<small>Name: <strong>John Dela Cruz</strong></small> <br />
									<small>Specialty: <strong>Pediatrician</strong></small
									><br />
									<small>Clinic: <strong>Lorem Ipsum Clinic</strong></small
									><br />
								</div>
							</div>
						</div>
						<div class="text-center pb-4">
							<button type="button" class="btn btn-small btn-primary">
								Confirm
							</button>
							<button type="button" class="btn btn-small btn-light">
								Cancel
							</button>
						</div>
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

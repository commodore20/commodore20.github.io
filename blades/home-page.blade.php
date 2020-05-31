       <!--  index.html for reference-->
       <!-- Created May 23, 2020-->
       <div class="py-50 px-md-4 mb-3 container-fluid" id="wrapper">
			<div class="container-fluid">
				<div
					class="d-flex flex-column flex-xl-row align-items-center p-3 px-md-4 mb-3 bgh"
				>
					<div class="my-0 mr-md-auto">
						<a href="#"><img id="ud-logo" src="images/logo-md.png" /></a>
					</div>

					<nav class="my-2 my-md-0 mr-md-3">
						<a class="p-2 text" href="Signup.html"
							><i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</a
						>
						<a class="p-2 text" href="Login.html"
							><i class="fa fa-book" aria-hidden="true"></i> Login</a
						>
					</nav>
				</div>
			</div>
			<!-- QUICK SEARCH CONTAINER -->
			<div class="container-fluid pb-4" id="ud-lists">
				<div class="container text-center">
					<div class="row">
						<div class="col-xl">
							<h3 class="text-blue text-center font-weight-bold">
								Use the Quick Search to find the doctor you are looking for.
							</h3>
						</div>
                    </div>
    {!! Form::open(['url' => 'foo/bar', 'class' => 'form-contain']) !!}
					
						<input name="__RequestVerificationToken" type="hidden" value="" />
						<div class="pl-5 row pt-md-3">
							<div class="col-md-3 col-xl-3 form-group">
								<div class="">
                                {{ Form::text('specialty', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Specialty']) }}
								</div>
							</div>
							<div class="col-md-3 col-xl-3 form-group">
                            {{ Form::select('location', array('select' => 'Select Location', 'digos' => 'Digos'),'digos', ['class' => 'form-control text-box single-line', 'placeholder' => 'Specialty']) }}
							</div>
							<div class="col-md-3 col-xl-3 form-group">
                            {{ Form::text('doctors', $value = null, ['class' => 'form-control text-box single-line', 'placeholder' => 'Physician']) }}
							</div>
							<div class="col-md-3 col- form-group text-center text-md-left">
                            {{ Form::button('Search'['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
							</div>
						</div>
				   
	{!! Form::close()!! }
				</div>
			</div>
			<hr />
			<div class="container-fluid">
				<div class="row justify-content-around">
					<div class="col-md-3">
						<img
							src="images/online-article.png"
							style="width: 400px; height: 300px;"
							alt=""
							class="pr-3"
						/>
					</div>
					<div class="col-md-7 pt-4 order-sm-12">
						<h1 class="font-weight-bold">No more longer queues !</h1>
						<div class="pl-5 pb-4">
							<h4>1. Search for a Physician, Specialties or Clinics</h4>
							<h4>2. Book your preferred schedule</h4>
							<h4>3. Go to the clinic on time</h4>
						</div>
						<h1 class="font-weight-bold">Less Waiting, Less Hassle</h1>
					</div>
				</div>
			</div>

			<hr />
			<div class="container text-center py-4">
				<h1 class="font-weight-bold">Specialties</h1>
				<p class="text-muted">
					Don't know what to search? This will guide you what kind of Physician
					you want to find
				</p>
			</div>
			<div class="container-fluid">
				<div class="row pb-4">
					<div class="col-md-3 py-2">
						<div class="card" style="width: 20rem;">
							<img
								class="card-img-top"
								src="images/nutritionist-card.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title font-weight-bold">
									Nutritionist/Dietician
								</h5>
								<p class="card-text">
									Have problems with your nutrition and balanced diet? Find a
									nutritionist
								</p>
								<a href="#" class="btn btn-primary">Consult Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-2">
						<div class="card" style="width: 20rem;">
							<img
								class="card-img-top"
								src="images/ob-gyne-card.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title font-weight-bold">OB-Gyne</h5>
								<p class="">
									Want to check your babies' status? Let the Ob-Gyne help you.
								</p>
								<a href="#" class="btn btn-primary">Consult Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-2">
						<div class="card" style="width: 20rem;">
							<img
								class="card-img-top"
								src="images/ortopaedic-card.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title font-weight-bold">Orthopaedist</h5>
								<p class="">
									Have a broken bone? Get it treated by a Orthopaedist
								</p>
								<a href="#" class="btn btn-primary">Consult Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-2">
						<div class="card" style="width: 20rem;">
							<img
								class="card-img-top"
								src="images/general-physician-card.jpg"
								alt="Card image cap"
							/>
							<div class="card-body">
								<h5 class="card-title font-weight-bold">General Physician</h5>
								<p class="">
									Want to check if you're physically fit? Let the Physicians
									check you now.
								</p>
								<a href="#" class="btn btn-primary">Consult Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr />
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7 pt-4">
						<h1 class="font-weight-bold">Home Consultation for Patients</h1>
						<h4 class="text-muted">
							Cannot go to the clinic? Worry no more, Home Consultations are
							available for you.
						</h4>
						<h4 class="text-muted">
							Avail the Home Consultations Now!
						</h4>
						<a href="">Learn More</a>
					</div>
					<div class="col-md-3">
						<img
							src="images/doctor-visit.png"
							alt=""
							style="width: 400px; height: 300px;"
						/>
					</div>
				</div>
			</div>
			<hr />
			<div class="container-fluid pt-4">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<h2 class="font-weight-bold pl-5">
							Register now at MeDPulse!
						</h2>
						<img
							src="images/register-pic.png"
							style="width: 400px;"
							height="300px"
							alt=""
						/>
					</div>
					<div class="col-md-8 pl-5">
						<h3 class="font-weight-bold">Be at ease without disease</h3>
						<h5>Other Benefits:</h5>
						<h6 class="text-muted">Chat to your appointed doctor</h6>
						<h6 class="text-muted">Ready to serve you 24/7</h6>
						<h6 class="text-muted">Book with a patient</h6>
						<h6 class="text-muted">Certified Physicians</h6>
						<h6 class="text-muted">Guaranteed time slot</h6>
						<h6 class="text-muted">
							Notify you when your time slot is now available
						</h6>
						<h6 class="text-muted">
							Notify patients if there are earlier time slots before their
							schedule
						</h6>
					</div>
				</div>
			</div>
			<!--Start of the first box-->
		</div>
		<div
			id="btnTop"
			class="fixed-action-btn smooth-scroll"
			style="bottom: 45px; right: 24px; display: none;"
		>
			<a href="#topSection" class="btn-floating btn-large red">
				<i class="fa fa-arrow-up"></i>
			</a>
		</div>
		<a
			id="back-to-top"
			href="#"
			class="btn btn-primary btn-lg back-to-top"
			role="button"
			title="Return to top"
			data-toggle="tooltip"
			data-placement="left"
			><span class="fa fa-arrow-up"></span
		></a>

		<script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});

			$(document).ready(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 50) {
						$("#back-to-top").fadeIn();
					} else {
						$("#back-to-top").fadeOut();
					}
				});
				// scroll body to 0px on click
				$("#back-to-top").click(function () {
					$("#back-to-top").tooltip("hide");
					$("body,html").animate(
						{
							scrollTop: 0,
						},
						800
					);
					return false;
				});

				$("#back-to-top").tooltip("hide");
			});
		</script>
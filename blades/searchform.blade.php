<!-- Created May 22, 2020 -->
<!-- to see the example view of the page, please open the search-form.html -->
        <div class="container">
            <!--Start of Search bar with filter -->
			<div class="row py-3">
				<div class="col-xs-8 col-lg-12 col-xs-offset-2">
					<div class="input-group">
						<div class="input-group-btn search-panel">
							<button
								type="button"
								class="btn btn-default dropdown-toggle border-right-0 rounded shadow-sm"
								data-toggle="dropdown"
								id="navbarDropdown"
							>
								<span id="search_concept" class="">Filter by</span>
								<span class="caret"></span>
							</button>
							<div
								class="dropdown-menu dropdown-primary dropdown-menu-left"
								aria-labelledby="navbarDropdown"
							>
								<a class="dropdown-item" href="#">Doctors</a>
								<a class="dropdown-item" href="#">Specialty</a>
								<a class="dropdown-item" href="#">Location</a>
							</div>
						</div>
						<input
							type="hidden"
							name="search_param"
							value="all"
							id="search_param"
						/>
						<input
							type="text"
							class="form-control"
							name="x"
							placeholder="Search for .."
						/>
						<span class="input-group-btn">
							<button
								class="btn btn-default border-left-0 rounded shadow-sm"
								type="button"
							>
								<span class="fa fa-search"></span>
							</button>
						</span>
					</div>
				</div>
            </div>
            <!-- End of Search bar with filter -->

            <!-- Start of breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="navbar-sidebar.html">Home</a>
					</li>
					<li class="breadcrumb-item" aria-current="page">
						Search
					</li>
				</ol>
			</nav>

            <!-- end of breadcrumb -->

            <!-- Alert and Warning, planning on hiding the warning pane if no results found then it will show -->
			<div class="alert alert-success" role="alert">
				Successfully found <strong>XX</strong> results
			</div>
			<div class="alert alert-danger" role="alert">
				No results found !
            </div>
            <!-- end of alerts -->

            <!-- Start of Search Results -->
			<div id="search-result-div">
				<div class="container border rounded shadow-sm py-4">
					<div class="row">
						<div class="col-lg-2">
							<img src="images/doc-mockup.png" alt="" class="rounded-circle" />
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<h3 id="doctor-name">John Dela Cruz</h3>

								<h5 id="specialty">Pediatrician</h5>
								<h5>San Jose Clinic (Rm 106)</h5>
								<a href="doc-full-profile.html">More Info</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<h6>Available for Home Consultation</h6>
								<h6>Clinics Affiliated:</h6>
							</div>
							<div class="form-group">
								<a href="#" class="badge badge-pill badge-primary"
									>San Jose Clinic</a
								>
								<a href="#" class="badge badge-pill badge-secondary"
									>Dela Cruz - Amada Clinic</a
								>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">
									<i class="fa fa-search-plus"> </i>Book Appointment
								</button>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- end of Search results -->
        </div>
        
        <!-- Script for the filtering -->
		<script>
			$(document).ready(function (e) {
				$(".search-panel .dropdown-menu")
					.find("a")
					.click(function (e) {
						e.preventDefault();
						var param = $(this).attr("href").replace("#", "");
						var concept = $(this).text();
						$(".search-panel span#search_concept").text(concept);
						$(".input-group #search_param").val(param);
					});
			});
		</script>
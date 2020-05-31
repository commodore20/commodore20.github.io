       <!--May 31, 2020 -->
       <!-- Client Navbar pls update globalstylesheet -->
       
       <div class="d-flex poppins-font" id="wrapper">
			<!-- Sidebar -->
			<div
				class="bg-light border-right gradient-sidebar-client"
				id="sidebar-wrapper"
			>
				<div class="sidebar-heading">
					<img src="images/logo-sm.png" alt="" class="img-logo-sm pb-2" />
				</div>
				<div class="list-group list-group-flush" id="list-menu">
					<a
						href=""
						class="list-group-item list-group-item-action bg-light"
						id="dash"
						><i class="fa fa-dashboard"></i> Dashboard</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						><i class="fa fa-envelope"></i> Message</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						><i class="fa fa-bell" aria-hidden="true"></i> Notifications</a
					>
					<a
						href=""
						class="list-group-item list-group-item-action bg-light"
						id="search"
						><i class="fa fa-search" aria-hidden="true"></i> Search</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						><i class="fa fa-user-md" aria-hidden="true"></i> Doctors</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						><i class="fa fa-history" aria-hidden="true"></i> History</a
					>
					<a href="#" class="list-group-item list-group-item-action bg-light"
						><i class="fa fa-exclamation-circle"></i> About</a
					>
				</div>
			</div>
			<!-- /#sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
				<!-- Primary Navbar v2 -->
				<nav
					class="nav navbar navbar-expand navbar-light navbar-inverse nav-client poppins-font"
				>
					<button class="btn" id="menu-toggle">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="col-md-4">
						<input
							class="form-control rounded-pill"
							type="search"
							placeholder="Search for "
						/>
					</div>

					<ul class="nav navbar-nav ml-auto position-static">
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
								<i class="fa fa-cog fa-lg"></i>
							</a>
							<div
								class="dropdown-menu dropdown-primary dropdown-menu-right"
								aria-labelledby="navbarDropdown"
							>
								<a class="dropdown-item" href="client-full-profile.html"
									>My Profile</a
								>
								<a class="dropdown-item" href="#">Preferences</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html">Logout</a>
							</div>
						</li>
					</ul>
				</nav>
				<div class="container-fluid" id="mydiv"></div>
			</div>
			<!-- /#page-content-wrapper -->
		</div>
		<!-- /#wrapper -->

		<script type="text/javascript">
			// do not remove this jquery
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});

            //commented for further study
			/*	$(document).ready(function () {
				$("#dash").click(function () {
					$("#mydiv").load("testfile.html");
					return false;
				});
				$("#search").click(function () {
					$("#mydiv").load("search-form.html");
					return false;
				});
			}); */
		</script>
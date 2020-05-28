    
  <!-- Blade added May 28, 2020 -->
  <!-- This is a blade navbar that has a search bar -->  
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-for-guest">
			<!-- Navbar Brand, only text not an image-->
			<a class="navbar-brand font-weight-bolder nav-brand-font" href="#"
				>MeDPulse</a
			>
			<!-- Button for the hamburger menu -->
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarTogglerDemo02"
				aria-controls="navbarTogglerDemo02"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Search field-->
			<form class="col-md-4">
				<input
					class="form-control rounded-pill"
					type="search"
					placeholder="Search"
				/>
			</form>

			<!-- Collapsible div connected to the hamburger menu-->
			<div class="collapse navbar-collapse fant" id="navbarTogglerDemo02">
				<ul class="nav navbar-nav ml-lg-auto">
					<li class="nav-item">
						<a class="nav-link" href="#"
							><i class="fa fa-sign-in"></i> <i class="quantity"></i> Login</a
						>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-user"></i> Register</a>
					</li>
				</ul>
			</div>
		</nav>
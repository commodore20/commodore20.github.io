<!-- Verification --> 
<!-- Changed Laravel Syntax to HTML form syntax -->
<div class="container-fluid">
			<nav
				class="navbar navbar-expand-xl navbar-light navbar-toggleable-lg navbar-inverse"
				style="background-color:#fff;"
			>
				<a class="navbar-brand" href="index.html"
					><img src="images/logo-sm.png" alt=""
				/></a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link fa fa-home" href="index.html"> Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fa fa-info" href="#"> About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fa fa-user" href="Signup.html"> Sign-up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fa fa-book" href="Login.html"> Login</a>
						</li>
					</ul>
				</div>
            </nav>
            <hr />
			<div class="container-fluid pt-2">
                <div class="content-header">
                    <div class="title-primary">
                        <h4 class="text-center"><i class="fa fa-book text-black-50" aria-hidden="true"
                            > Enter your phone number for easier access</i
                        ></h4>
                    </div>
                    <br>
                </div>
				<div class="row">
					<div class="col-md-4 col-sm-3"></div>
					<div class="col-md-4 col-sm-3">
						<form class="form-contain">
                            <div class="input-group mimic-input">
                               <label for="verify">Enter your email/contact Number for verification:</label>
                                <input
                                    class="form-control text-box single-line"
                                    id="verify"
                                    name="verify"
                                    type="text"
                                    value=""
                                    placeholder="Email or Contact Number"
                                />
                            </div>
                            <div class="text-center">
                                <br>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-sign-in"> Submit</i>
                                </button>

                            </div>
                           
                        </div>
						</form>
					</div>
				</div>
			</div>
		</div>

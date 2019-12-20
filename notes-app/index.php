<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Your notes saver</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		</head>
		<body>
			
				<nav class="navbar navbar-expand-sm fixed-top navbar-dark navbar-custom" style="background-color:#62aacf;">
					<a href="#" class="navbar-brand mr-5" title="welcome to online notes">
						Online notes<sub style="font-size: 10px;font-style:italic;">....Save your notes here</sub>
					</a>
					<button id="what" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				
					<div class="collapse navbar-collapse" id="menu">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item otherli">
								<a href="#" class="nav-link">Help</a>
							</li>
							<li class="nav-item otherli">
								<a href="#" class="nav-link">Contact us</a>
							</li>
						</ul>
						
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#loginmodal" data-toggle="modal">Login</a>
							</li>
							
						</ul>
						
					</div>
				</nav>
				
				<div class="jumbotron" id="jumbotron">
					<h1>Online Notes Apps</h1>
					<p>Your notes wherever you go</p>
					<p>Easy to use, protects all your notes</p>
					
					<button type="button" class="btn btn-primary btn-lg signup" data-target="#signupmdal" data-toggle="modal">Sign up - <i>It's free</i></button>
				</div>
				
				
				<!--LOGIN FORM-->
				<form id="loginform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="loginmodaltitle">Login</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div id="loginMessage">
										<!--Login message from php file-->
									</div>
									
									<div class="form-group">
										<label for="loginemail" class="sr-only">Email:</label>
										<input type="email" name="loginemail" class="form-control" id="loginemail" placeholder="Email Address" maxlength="50"/>
									</div>
									<div class="form-group">
										<label for="loginpassword" class="sr-only">Password:</label>
										<input type="password" name="loginpassword" class="form-control" id="loginpassword" placeholder="Password" maxlength="30"/>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" name='rememberme' id="rememberme" class="form-check-input">Remember me
										</label>
										
										<a href="#forgotpasswordmodal" data-dismiss="modal" data-toggle="modal" style="cursor:pointer;float:right;">Forgot password?</a>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary mr-auto" data-dismiss="modal" data-target="#signupmdal" data-toggle="modal">Register</button>
									<button type="submit" class="btn btn-success" name="login">Login</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				<!--SIGN UP FORM-->
				<form id="signupform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="signupmdal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="signupmodaltitle">Sign up today and start using our Online Notes App!</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div id="signupmessage">
										<!--Sign up message from php file-->
									</div>
									<div class="form-group">
										<label for="username" class="sr-only">Username:</label>
										<input type="text" name="username" class="form-control" id="username" placeholder="Username" maxlength="30"/>
									</div>
									<div class="form-group">
										<label for="email" class="sr-only">Email:</label>
										<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" maxlength="50"/>
									</div>
									<div class="form-group">
										<label for="password" class="sr-only">Password:</label>
										<input type="password" name="password" class="form-control" id="password" placeholder="Choose a password" maxlength="30"/>
									</div>
									<div class="form-group">
										<label for="password2" class="sr-only">Confirm your password:</label>
										<input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm password" maxlength="30"/>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" name="signup">Sign up</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				
				
				<!--FORGOT PASSWORD-->
					
				<form method="post" id="forgotpasswordform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="forgotpasswordmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<div class="modal-title" id="forgotpasswordmodaltitle">
										<p>Forgot your password?</p>
										<h5>Enter your email address:</h5>
									</div>
									
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div>
										<!-- message from php file-->
									</div>
									
									<div class="form-group">
										<label for="forgotpasswordemail" class="sr-only">Email:</label>
										<input type="email" name="forgotpasswordemail" class="form-control" id="forgotpasswordemail" placeholder="Email Address" maxlength="50"/>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary mr-auto" data-dismiss="modal" data-target="#signupmdal" data-toggle="modal">Register</button>
									<button type="submit" class="btn btn-success" name="forgotpassword">Submit</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				<!--footer-->
				<div id="footer">
					<div class="container">
						<p>&copy getseyified 2018 - <?php 
							echo date("Y")
						?> </p>
					</div>
				</div>
				
				<!--
					SQL CODE
						CREATE TABLE users(
							user_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
							username varchar(30) NOT NULL,
							email varchar(50) NOT NULL,
							password varchar(30) NOT NULL,
							activation char(32) NOT NULL
						);
						
						CREATE TABLE rememberme(
							id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
							authentificator1 char(12) NOT NULL,
							f2authentificator2 char(64) NOT NULL,
							user_id int(11) NOT NULL,
							expires datetime NOT NULL
						);
				-->
			<script src="js/jquery-3.4.1.min.js"></script>
			<script src="index.js"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<!--<script src="index.js"></script>-->
		</body>
	</html>
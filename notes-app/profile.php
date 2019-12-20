<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Profile</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
			<style>
				#container{
					margin-top: 120px;
				}
				
				#container h2{
					margin-bottom: 40px;
					text-align: center;
					color: #333;
				}
				#container table tr{
					cursor: pointer;
				}
				
			</style>
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
							<li class="nav-item">
								<a class="nav-link active" href="#">Profile</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Help</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Contact us</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">My Notes</a>
							</li>
						</ul>
						
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link disabled" style="color:#f2f2f2;">Logged in as <b>Seyi Odunlade</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Log out</a>
							</li>
							
						</ul>
						
					</div>
				</nav>
				
				<div class="container" id="container">
					<div class="row">
						<div class=" offset-md-3 col-md-6">
							<h2>General Account Settings</h2>
							<div>
								<table class="table table-bordered table-hover table-dark">
									<tr data-target="#updateusername" data-toggle="modal">
										<td>Username</td>
										<td>Seyi Odunlade</td>
									</tr>
									<tr data-target="#updateemail" data-toggle="modal">
										<td>Email</td>
										<td>seyiodunlade1@gmail.com</td>
									</tr>
									<tr data-target="#updatepassword" data-toggle="modal">
										<td>Password</td>
										<td>hidden</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<!--UPDATE USERNAME FORM-->
				<form method="post" id="updateusernameform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="updateusername" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="updateusernametitle">Enter new username:</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div>
										<!--Login message from php file-->
									</div>
									
									<div class="form-group">
										<label for="username">Username:</label>
										<input type="text" name="username" class="form-control" id="username" maxlength="30"/>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success" name="submit">submit</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>	
				
				
				<!--UPDATE EMAIL FORM-->
				<form method="post" id="updateemailform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="updateemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="updateemailtitle">Enter new email:</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div>
										<!--Login message from php file-->
									</div>
									
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" name="email" class="form-control" id="email" maxlength="50"/>
									</div>
									
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success" name="submit">submit</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				
				
				<!--UPDATE PASSWORD FORM-->
				<form method="post" id="updatepasswordform">
				
					
					<!-- Modal -->
					<div class="modal fade" id="updatepassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="updatepasswordtitle">Update your password</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div>
										<!--Sign up message from php file-->
									</div>
									<div class="form-group">
										<label for="currentpassword" class="sr-only">Enter Current and New Password:</label>
										<input type="password" name="currentpassword" class="form-control" id="currentpassword" placeholder="Enter your current password here" maxlength="30"/>
									</div>
									<div class="form-group">
										<label for="password" class="sr-only">Enter your new password:</label>
										<input type="password" name="password" class="form-control" id="newpassword" placeholder="Enter your new password here" maxlength="30"/>
									</div>
									<div class="form-group">
										<label for="password2" class="sr-only">Confirm your new password:</label>
										<input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm your new password" maxlength="30"/>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success" name="signup">Update password</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
								</div>
							</div>
						</div>
					</div>
					
				</form>
				
				
				<!--FORGOT PASSWORD-->
				
				
				<!--footer-->
				<div id="footer">
					<div class="container">
						<p>&copy getseyified 2018 - <?php 
							echo date("Y")
						?> </p>
					</div>
				</div>
				
				
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.bundle.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>
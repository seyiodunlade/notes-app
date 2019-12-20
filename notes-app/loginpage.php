<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>User page</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
			<style>
				#container{
					margin-top: 120px;
				}
				
				#notePad, #allNotes, #done{
					display: none;
				}
				
				#buttons{
					margin-bottom: 20px;
				}
				#notePad textarea{
					width: 100%;
					max-width: 100%;
					border-color: #ca3dd9;
					border-left-width: 20px;
					color: #ca3dd9;
					background-color: #fbefff;
					padding: 10px;
					font-size: 16px;
					line-height: 1.5em;
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
								<a class="nav-link" href="#">Profile</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Help</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Contact us</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link active">My Notes</a>
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
							<div id="buttons">
								<button type="button" class="btn btn-info btn-lg" id="addNote">Add Note</button>
								<button type="button" class="btn btn-info btn-lg" id="allNotes">All Notes</button>
								<button type="button" class="btn btn-info btn-lg" style="float:right;" id="edit">Edit</button>
								<button type="button" class="btn btn-success btn-lg" style="float:right;" id="done">Done</button>
							</div>
							
							<div id="notePad">
								<textarea rows="10">
									
								</textarea>
							</div>
							
							<div id="notes" class="notes">
							
							</div>
						</div>
					</div>
					
				</div>
				
				
				
				
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
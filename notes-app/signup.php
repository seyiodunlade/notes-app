<?php

	//Start a session
	//session_start();
	
	//db connect
	include('connection.php');
	
	
	//error messages
	$missingUsername = '<p><strong>Please enter a username!</strong></p>';
	$missingEmail = '<p><strong>Please enter an Email Address!</strong></p>';
	$invalidEmail = '<p><strong>Please enter a valid Email Address!</strong></p>';
	$missingPassword = '<p><strong>Please enter a password!</strong></p>';
	$invalidPassword = '<p><strong>Your password must be at least six (6) characters long and should contain only numbers and letters!</strong></p>';
	$differentPassword = '<p><strong>Your passwords don\'t match!</strong></p>';
	$missingPassword2 = '<p><strong>Please confirm your password!</strong></p>';
	
	
	
	$errors = "";
	
		//Get users's username
		if(empty($_POST['username'])){
			
			$errors .= $missingUsername;
			
		}else{
			
			$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
			
		}
		
		
		
		//Get users's email address
		if(empty($_POST['email'])){
			
			$errors .= $missingEmail;
			
		}else{
			
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				
				$errors .= $invalidEmail;
				
			}
			
		}
		
		if(empty($_POST['password'])){
			
			$errors .= $missingPassword;
			
		}elseif(!(strlen($_POST['password']) > 6 and preg_match('/[a-z]/', $_POST['password']) and preg_match('/[0-9]/', $_POST['password']))){
				$errors .= $invalidPassword;
		}else{
				$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
				
				if (empty($_POST["password2"])){
					$errors .= $missingPassword2;
				}else{
					
					$password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
					
					if ($password !== $password2){
						$errors .= $differentPassword;
						echo $password;
						echo $password2;
					}
				}
				
		}
		
		//print error message
		if ($errors){
			
			$resultmessage = '<div class="alert alert-danger">'.$errors.'</div>';
			echo $resultmessage;
			
		}else{
	

	
			//if no error
				
				//prevent sql injection
				$username = mysqli_real_escape_string($conn, $username);
				 
				$email = mysqli_real_escape_string($conn, $email);
				
				$password = mysqli_real_escape_string($conn, $password);
				
				
				//Hash the password (128bits = 32 characters)
				$password = hash('sha256', $password);
				
				
				
				//check if username exists in db
				$sql = "SELECT * FROM users WHERE username= '$username'";
				
				$result = mysqli_query($conn, $sql);
			
				/*if(!$result){
					echo '<div class="alert alert-danger">Error running the query</div>';
					exit;
				}*/
				
				$results = mysqli_num_rows($result);
				
				if($results){
					
					echo '<div class="alert alert-warning">This username already exists</div>';
					exit;
					
				}
				
				//Check if email exists in db
				$sql = "SELECT * FROM users WHERE email= '$email'";
				
				$result = mysqli_query($conn, $sql);
			
				if(!$result){
					echo '<div class="alert alert-danger">Error running the query</div>';
					exit;
				}
				
				$results = mysqli_num_rows($result);
				
				if($results){
					
					echo '<div class="alert alert-warning">This email already exists</div>';
					exit;
					
				}
			
			
				//Create unique activation code
				//16 bytes are converted to bits(128bits), then converted from binary to hex
				$activationKey = bin2hex(openssl_random_pseudo_bytes(16));
			
			
				
				
				//Insert user details
				$sql = " INSERT INTO users(`username`, `email`, `password`, `activation`) VALUES('$username', '$email', '$password', '$activationKey') ";
				
				$result = mysqli_query($conn, $sql);
				
				echo '<div class="alert alert-success">You have created a new account</div>';
				
				/*if(!$result){
					echo '<div class="alert alert-danger">Error inserting your details!</div>';
					exit;
				}else{
					echo '<div class="alert alert-success">You have created a new account</div>';
				}*/
				
				
				
				/*
				$message = "Please click this link to activate your account:\n\n";
				
				$message .= "http://localhost/notes-app/index.php/activate.php?email=".urlencode($email)."&Key=".$activationKey;
				
				
				if (mail($email, 'confirm your registration', $message, 'From:'.'info@getseyified.com.ng')){
					echo '<div class="alert alert-success">Thank you for registring, <b>a confirmation email has been sent to'.$email.' to activate your account.</div>';
					exit;
					
				}
				
				*/
		
			
		}	
		
		
	

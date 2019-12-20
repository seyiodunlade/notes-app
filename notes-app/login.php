<?php
	
	session_start();
	
	include ('connection.php');
	
	
	
	$missingEmail = '<p><strong>Please enter an Email Address!</strong></p>';
	$missingPassword = '<p><strong>Please enter a password!</strong></p>';
	
	
	$errors = "";
	
	
	if(empty($_POST['loginemail'])){
			
		$errors .= $missingEmail;
			
	}else{
			
		$email = filter_var($_POST['loginemail'], FILTER_SANITIZE_EMAIL);
			
	}
		
		
		
	if(empty($_POST['loginpassword'])){
		
		$errors .= $missingPassword;
		
	}else{
		
		$password = filter_var($_POST['loginpassword'], FILTER_SANITIZE_STRING);
		//Hash the password (128bits = 32 characters)
		$password = hash('sha256', $password);
		$password = substr($password, 0,32);
	}
	
	
	
	//print error message
	if($errors){
		
		$resultmessage = '<div class="alert alert-danger">'.$errors.'</div>';
		echo $resultmessage;
		
	}else{
		
		//if no error
		
		//prevent sql injection	 
		$email = mysqli_real_escape_string($conn, $email);
		
		$password = mysqli_real_escape_string($conn, $password);
		
		
	
		//There was no row for activation
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		
		$result = mysqli_query($conn, $sql);
		
		$checkRow = mysqli_num_rows($result);
			
		if($checkRow !== 1){
				
			echo '<div class="alert alert-danger">Wrong username or password!</div>';
				
			echo $_POST['loginpassword'];
			echo $password;
				
				
		}else{
				
				$row = mysqli_fetch_array($result);
					
				$_SESSION['user_id'] = $row['user_id'];
				
				$_SESSION['username'] = $row['username'];
				
				$_SESSION['email'] = $row['email'];
				
				
				if($_POST['rememberme'] == 'unchecked'){
					//remember me not checked
					echo "success";
					//echo "unchecked!!!<br/>";
					//echo $_POST['rememberme'];
				}else{
					//echo "checked!!!<br/>";
					//echo $_POST['rememberme'];
					
					//Create two variables authentificator1 and 2
					$authentificator1 = bin2hex(openssl_random_pseudo_bytes(10));
					
					$authentificator2 = openssl_random_pseudo_bytes(20);
					
					function f1($a, $b){
						
						$c = $a. ',' .bin2hex($b);
						return $c;
					}
					
					function f2($a){
						
						$b = hash('sha256',$a);
						return $b;
					}
					
					$cookieValue = f1($authentificator1, $authentificator2);
					
					$fauthentificator2 = f2($authentificator2);
					
					$user_id = $_SESSION['user_id'];
					
					$expiration = date('Y-m-d H:i:s', time()+ 1296000);
					
					setcookie("rememberme", $cookieValue, time() + 1296000);
					
					$sql = "INSERT INTO rememberme (`authentificator1`, `f2authentificator2`, `user_id`, `expires`) VALUES ('$authentificator1', '$fauthentificator2', '$user_id', '$expiration')";
					
					$result = mysqli_query($conn, $sql);
					
					echo "success";
				
				}
			}
	
	
	}
		
		
		
		
		
		
		
		
		
		
		
		

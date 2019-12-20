
//AJAX CALL FOR SIGN UP FORM
	const signUpFunc = (e) => {
			console.log('working');
			e.preventDefault();
			
			const xhr = new XMLHttpRequest();
			
			var username = document.getElementById('username').value;
			var email = document.getElementById('email').value;
			var password = document.getElementById('password').value;
			var password2 = document.getElementById('password2').value;
			var params = 'username='+username+'&email='+email+'&password='+password+'&password2='+password2;
			
			
			xhr.open('POST', 'signup.php', true);
			
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			
			xhr.onload = () => {
				
				if(xhr.status == 200){
						
					document.querySelector('div#signupmessage').innerHTML = xhr.responseText;	
					
					console.log(xhr.responseText);
					
					document.getElementById('signupform').reset();
				}/*else{
					document.querySelector('div#loginMessage').innerHTML = xhr.responseText;
					console.log(xhr.responseText);
					console.log('fdfdsfsa');
				}*/

				
				
			}
				
			xhr.send(params);
		};
				
				
	document.getElementById('signupform').addEventListener('submit', signUpFunc);



//AJAX CALL FOR LOGIN FORM
	const LoginFunc = (e) => {
			console.log('working');
			e.preventDefault();
			var submit = document.getElementsByTagName('input')[2];
			//submit.disabled = 'true';
			const xhr = new XMLHttpRequest();
		
			
			var loginemail = document.getElementById('loginemail').value;
			var loginpassword = document.getElementById('loginpassword').value;
			var myCheckBox = document.getElementById('rememberme');
			if(myCheckBox.checked){
				document.getElementById('rememberme').value = 'checked';
			}else{
				document.getElementById('rememberme').value = 'unchecked';
			}
			var rememberme = document.getElementById('rememberme').value;
			var params = 'loginemail='+loginemail+'&loginpassword='+loginpassword+'&rememberme='+rememberme;
			
			
			xhr.open('POST', 'login.php', true);
			
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			
			xhr.onload = () => {
				
				if(xhr.status == 200){
					if(xhr.responseText == 'success'){
						window.location = "loginpage.php";
					}else{
						document.querySelector('div#loginMessage').innerHTML = xhr.responseText;
						console.log(xhr.responseText);
						console.log('fdfdsfsa');
					}

				
				}
			}
				
			xhr.send(params);
		};
				
				
	document.getElementById('loginform').addEventListener('submit', LoginFunc);








<?php
	$myusername = "deepali";
	$mypass = "password";

	if (isset($_POST['signIn'])) {
		$user = $_POST['user_login'];
		$pass = $_POST['password_login'];
		
		if ($user == $myusername and $pass == $mypass) {
			if (isset($_POST['remember'])) {
				setcookie('user_login', $user,time()+60*60*7);
				setcookie('password_login', $pass,time()+60*60*7);

			}
			session_start();
				$_SESSION['signIn'] = $user;
				header("location: fibster homepage/homepage.php");
		}else{
			echo "Username or Password is Invalid.<br> Click her to <a href = 'signIn.php'> try again</a>";
		}
	}else {
			header("location: signIn.php");
	}
	

?>
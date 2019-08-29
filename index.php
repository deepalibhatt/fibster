<?php
require_once("header.php"); 
?>

<?php
	if (isset($_POST['reg'])) {
		include('connect.php');

		$username = $_POST['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$em = $_POST['email'];
		$em2 = $_POST['email2'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];


//encrypt password and password 2 using md5 before sending to database
$password = password_hash($password, PASSWORD_DEFAULT);
		$sqlinsert="INSERT INTO users (username, first_name, last_name, email, password) VALUES ('$username', '$fname', '$lname', '$em','$password')";


		if (!mysqli_query($con, $sqlinsert)) {
			die('error inserting new record');
		}
		

	}
		




?>

	<div class="back">
<div style="width: 800px; margin: 0px auto 0px auto;">

		<table>
			<tr>
				<td width="60%" valign="top">
					<h2 style="width: 500px; margin: 0px auto 0px auto;"> Join Find Friends Today!</h2>
					</td>
				<td width="40%" valign="top">
					<h2> Sign up Below!</h2>
					<form action="#" method="POST">
						<input type="text" name="username" size="25" placeholder="Username"/><br/><br/>
						<input type="text" name="fname" size="25" placeholder="First Name"/><br/><br/>
						<input type="text" name="lname" size="25" placeholder="Last Name"/><br/><br/>
						<input type="text" name="email" size="25" placeholder="Email"/><br/><br/>
						<input type="text" name="email2" size="25" placeholder="Re-enter Email"/><br/><br/>
						<input type="text" name="password" size="25" placeholder="Password"/><br/><br/>
						<input type="text" name="password2" size="25" placeholder="Re-enter Password"/><br/><br/>
						<input type="submit" name="reg" value="Sign Up!" />
					</form>
					
					</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>
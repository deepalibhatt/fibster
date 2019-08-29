<?php
require_once("header.php"); 
?>

<?php
		if (isset($_COOKIE['user_login']) and isset($_COOKIE['pass'])) {
			$user = $_COOKIE['user_login'];
		    $pass = $_COOKIE['password_login'];

		    echo "<script>
		    	document.getElementById('user_login').value = 'user_login';
		    	document.getElementById('password_login').value = 'password_login';
		    </script>";
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
						<input type="text" name="user_login" size="25" placeholder="Username"/><br/><br/>
						<input type="text" name="password_login" size="25" placeholder="Password"/><br/><br/>
						<input type="checkbox" name="remember">Remember Me<br/><br/>
						<input type="submit" name="signIn" value="Sign In!" />
					</form>
					
					</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>
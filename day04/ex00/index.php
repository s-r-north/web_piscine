<html><body>
	<?php if ("OK" == $_GET['submit']) {
		session_start();
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		$login = $_SESSION['login'];
		$passwd = $_SESSION['passwd'];
	}
	else {
		$login = "";
		$passwd = "";
	}
	?>
	<form action="index.php" method="get">
		<p>Login: <input type="text" name="login" value=<?php echo $login; ?>></p>
		<p>Password: <input type="text" name="passwd" value=<?php echo $passwd; ?>></p>
		<p><input type="submit" name="submit" value="OK" /></p>
	</form>
</body></html>

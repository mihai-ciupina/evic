<html>
<head>
<title>Login Form</title>
</head>
<body>
<?php
if(isset($logout_message)) {
	echo "<div class='message'>";
	echo $logout_message;
	echo "</div>";
}
?>

<?php
if(isset($message_display)) {
	echo "<div class='message'>";
	echo $message_display;
	echo "</div>";
}
?>

<div id="main">
	<div id="login">
		<h2>Login Form</h2>
		<?php echo form_open('User_authentication/user_login_process'); ?>
		<?php
		echo "<div class='error_msg'>";
		if(isset($error_message)) {
			echo $error_message;
		}
		echo validation_errors();
		echo "</div>";
		?>
		<label>UserName: </label>
		<input type="text" name="username" id="name" placeholder="username" />
		<label>Password: </label>
		<input type="password" name="password" id="password" placeholder="********" />
		<input type="submit" value="Login" name="sumbit" />
		<a href="user_reset_password_form">Resetare parola</a>
		<?php echo form_close(); ?>
	</div>
</div>
</body>
</html>
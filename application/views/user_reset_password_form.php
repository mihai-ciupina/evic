<div class="bodyContents">


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
			<?php echo form_open('user_authentication/user_reset_password_reset'); ?>
			<?php
				echo "<div class='error_msg'>";
				if(isset($error_message)) {
					echo $error_message;
				}
				echo validation_errors();
				echo "</div>";

				echo form_label('Email: ');
				$data = array(
					'type' => 'email',
					'name' => 'email_value'
				);
				echo form_input($data);
			?>
			<input type="submit" value="Resetare parola" name="sumbit" />
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

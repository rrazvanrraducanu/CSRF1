<?php
session_start();

?>
<form action="change_pass.php" method="GET">
			New password:<br />
			<input type="password" AUTOCOMPLETE="off" name="password_new"><br />
			Confirm new password:<br />
			<input type="password" AUTOCOMPLETE="off" name="password_conf"><br />
			<br />
			<input type="submit" value="Change" name="Change">

		</form>

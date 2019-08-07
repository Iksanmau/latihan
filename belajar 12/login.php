<?php
require'validasi_login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login gan</title>
</head>
<body>
	<form action="" method="post">
		<tr>
			<td>
				<label>Isi Username Anda Gan</label><br>
				<input type="text" name="username"> <br>
			</td>
			<td>
				<label>Isi Password Anda Gan</label><br>
				<input type="password" name="password"> <br>
			</td>
			<td>
				<input type="submit" name="login">  <br>
			</td>
		</tr>
		<hr><hr>	
	</form>
</body>
</html>
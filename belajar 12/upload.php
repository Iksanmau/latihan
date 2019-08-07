<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> upload</title>
</head>
<body>
	<form action="validasi_upload.php" method="post" enctype="multipart/form-data">
		<tr>
			<td>
				<input type="file" name="uploadgan" id="uploadgan">
				<input type="submit" name="submit" value="uploadfotogan">
			</td>
		</tr>
	</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['submit'])){

	$target_dir = "uploads/";
	$file = basename($_FILES['uploadgan']['name']);
	$uploadd = $target_dir.$file;
	$name_file = $_FILES['uploadgan']['tmp_name'];
	
	$uploadmasuk = move_uploaded_file($name_file,$uploadd);
	$uploadOk = 1;

	$imagetypefile = pathinfo($uploadd,PATHINFO_EXTENSION);
	 	if ($imagetypefile != "jpg" && $imagetypefile != "png" && $imagetypefile != "gif" && $imagetypefile != "jpeg") {
	 		echo "sorry ateam terima nya file jpg,png,gif doang gan";
	 	}

	 	if ($uploadmasuk !== false) {
	 		echo "File is an image -".$uploadmasuk['mime']."";
	 		$uploadOk = 1;
	 		echo "<br><img src='".$target_dir.$file."' width=50%><br>";
	 		
	 		echo "login dulu ateam coba ke <a href='login.php'>login</a>";
	 	}else{
	 		
	 		$uploadOk = 0;
	 	}
}

session_unset();
session_destroy();
?>
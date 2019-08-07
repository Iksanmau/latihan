<?php
$conn = mysqli_connect('localhost','root','');
$database = mysqli_select_db($conn,'database');
?>
<?php
session_start();
if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysqli_query($conn,"SELECT * FROM login WHERE username = '$username' && password = '$password'");

	$cek = mysqli_num_rows($sql);
	if ($cek == true) {
		$_SESSION['status'] = "login";
		$namacookie = "prayganteng";
		$isicookie = $_SESSION['status'];
		setcookie($namacookie,$isicookie, time ()+ (84600*30),'/');
		header("location:upload.php");

		echo "sukses login gan";
	} else{
		echo "gagal";
	}
} 
?>
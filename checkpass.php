<?php
session_start();
$conn = mysqli_connect("localhost", "root", "12345678", "sportstore") or die($conn);
if (isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);  
	$query = "SELECT * FROM users_khach WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn, $query) or die( 'Lỗi truy vấn');
	$row = mysqli_fetch_array($result);
	if (!$result) {
		echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!")</script>';
		$_SESSION["isLogin"] = 0;
	} else {
		echo '<script>alert("Đăng nhập thành công!")</script>';
		$_SESSION["isLogin"] = 1;
	} 

    header("Location: http://localhost/Web_BanHang_PHP");
}
?>
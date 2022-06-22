<?php
session_start();
$conn = mysqli_connect("localhost", "root", "12345678", "sportstore") or die($conn);

if (isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "INSERT INTO users_khach (name, email, password) VALUES ('$name', '$email', '$password')");
echo '<script>alert("Đăng ký thành công")</script>';
header("location:http://localhost/Web_BanHang_PHP/Login.php");
}
?>
<?php
require_once('layouts/header.php');
// var_dump($_POST);

?>
<div class="container" style="margin-top: 20px; margin-bottom: 20px; margin-left: 450px">
	<form method="post" action="checkpass.php">
		<div class="row">
			<div class="col-md-6" align="center">
			<div class="form-group">
			<legend style="font-size:40px; font-weight:bold; color:black;">Đăng nhập</legend>
				</div>
				<div class="form-group">
					<input required="true" type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
				</div>
				<div class="form-group">
					<input required="true" type="password" class="form-control" id="phone" name="pass" placeholder="Nhập mật khẩu">
				</div>
				
				<div class="form-group">
				<input type="submit" value="ĐĂNG NHẬP" name="login" class="btn btn-success">
				</div>
				<div class="form-group">
					<a href="register.php" class="btn btn-primary">Bạn chưa có tài khoản? Đăng ký</a>
				</div>
			</div>
			
		</div>
	</form>
</div>
<?php
require_once('layouts/footer.php');
?>

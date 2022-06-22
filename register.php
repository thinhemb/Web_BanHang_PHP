<?php
require_once('layouts/header.php');

?>
<div class="container"  style="margin-top: 20px; margin-bottom: 20px; margin-left: 450px;">
	<form method="post" action="sol_register.php">
		<div class="row" width="100%">
			<div class="col-md-6" width="100%" align="center">
			<div class="form-group">
			<legend style="font-size:40px; font-weight:bold; color:black;">Đăng ký</legend>
				</div> 
                <div class="form-group">
					<input required="true" type="text" class="form-control"  name="name" placeholder="Nhập Họ tên">
				</div>
				<div class="form-group">
					<input required="true" type="email" class="form-control"  name="email" placeholder="Nhập email">
				</div>
				<div class="form-group">
					<input required="true" type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
				</div>
                <div class="form-group">
					<input required="true" type="password" class="form-control" name="password_in" placeholder="Nhập lại mật khẩu">
				</div>
                <button name="submit" type="submit" class="btn btn-success"  style="border-radius: 5px; font-size: 20px; width: 25%;">Đăng ký</button>
			</div>
		</div>
	</form>
</div>
<?php
require_once('layouts/footer.php');
?>
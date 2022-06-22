<?php
session_start();

if($_SESSION["isLogin"] == 1){
    $_SESSION["isLogin"] =0;
}

header("Location: http://localhost/Web_BanHang_PHP");

<?php 

session_start();
$username= $_POST['username'];
$password= $_POST['password'];
$code= strtolower($_POST['code']);
$fcode= strtolower($_SESSION['font']);

if ($fcode==$code) {
	echo "{$username}注册成功<br>密码为{$password}";
}else{
	echo "验证码错误";
}
 ?>

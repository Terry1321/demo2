<?php 
	include 'config.php';

	$name=$_POST['name'];
	$username=$_POST['username'];

	$sql="insert into class(name,username) value('{$name}','{$username}')";

	$sth=$pdo->prepare($sql);
	if ($sth->execute()) {
		echo "<script>location='index.php'</script>";
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>memcache用户遍历</title>
 </head>
	 <link rel="stylesheet" href="bs/css/bootstrap.min.css">
	 <script src="bs/js/jquery.js"></script>
	 <script src="bs/js/bootstrap.min.js"></script>
 <body>
 	
 </body>
 </html>
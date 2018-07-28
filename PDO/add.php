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
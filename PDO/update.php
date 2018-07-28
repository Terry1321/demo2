<?php 
	include 'config.php';

	$id=$_POST['id'];
	$name=$_POST['name'];
	$username=$_POST['username'];

	$sql="update class set name='{$name}',username='{$username}' where id={$id}";
	
	$sth=$pdo->prepare($sql);

	if ($sth->execute()) {
		echo "<script>location='index.php'</script>";
	}


 ?>
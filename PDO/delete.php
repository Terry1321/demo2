<?php 
	include 'config.php';

	$id=$_GET['id'];

	$sql="delete from class where id={$id}";
	$sth= $pdo->prepare($sql);
	if ($sth->execute()) {
		echo "<script>location='index.php'</script>";
	}else{
		echo "删除失败";
	}
 ?>
<?php 
	include 'config.php';
	include 'Page.class.php';

	$sql="select * from class";
			$sth=$pdo->prepare($sql);
			$sth->execute();
			$rst=$sth->fetchAll(PDO::FETCH_ASSOC);

	$pageTot=count($rst);
	// 分页
	$page=new Page($pageTot,3);

	$pagesql="select * from class limit ?,{$page->length}"; 
	$pagesth=$pdo->prepare($pagesql);
	
	$pagesth->bindValue(1,$page->offset,PDO::PARAM_INT);
	$pagesth->execute();
	$rst=$pagesth->fetchAll(PDO::FETCH_ASSOC);

	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src='bs/js/bootstrap.min.js'></script>
	<script src='bs/js/jquery.js'></script>
<body>
	<div class="container">
		<h1 class="page-header">
			用户管理
			<a href="insert.php" class='btn btn-primary btn-lg	'>添加</a>

		</h1>
		<table class='table table-hover table-bordered table-striped'>
			<tr>
				<th>ID</th>
				<th>CLASS</th>
				<th>USERNAME</th>
				<th>EDIT</th>
				<th>DELETE</th>
			</tr>
			<?php 
				foreach ($rst as $key => $row) {
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['name']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-warning'>EDIT</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>DELETE</a></td>";
					echo "</tr>";
				}
			 ?>
		</table>
		<ul class="pagination">
		    <li><a href='index.php?p=<?php echo "{$page->prevpage}" ?>'>&laquo;</a></li>
		        <?php 
			        for ($i=1; $i <=$page->pageTot; $i++) { 
			        	echo "<li><a href='index.php?p={$i}'>$i</a></li>";
			        }
		         ?>
		    <li><a href='index.php?p=<?php echo "{$page->nextpage}" ?>'>&raquo;</a></li>
		</ul>
	</div>
</body>
</html>

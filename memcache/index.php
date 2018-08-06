<?php 
		$mem=new Memcache;
		$mem->connect('127.0.0.1',"11211");
		if (!$rows=$mem->get('row')) {
			$pdo=new PDO('mysql:host=localhost;dbname=test','root','123456');
			$pdo->exec('set names utf8');
			$sql='select * from class';
			$sth=$pdo->prepare($sql);
			$sth->execute();
			$rows=$sth->fetchAll(PDO::FETCH_ASSOC);

			$row=$mem->set('row',$rows);

			$data=0;
		}else{
			$data=1;
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
 	<div class="container">
 		<h1 class="page-header">
	 		查看用户
	 		<a href='del.php' class="btn btn-primary btn-lg">清除缓存</a>
 		</h1>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>USERNAME</th>
			</tr>
			<?php 
				foreach ($rows as $row) {
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['name']}</td>";
					echo "<td>{$row['username']}</td>";
					echo "</tr>";
				}
			 ?>
		</table>
		<?php 
			if (!$data) {
				echo '<div class="alert alert-danger">此数据来自Mysql数据库</div>';
			}else{
				echo '<div class="alert alert-success">此数据来自Memcache缓存</div>';
			}

		 ?>
 	</div>
 </body>
 </html>
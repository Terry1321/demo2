<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户管理</title>
</head>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src='bs/js/bootstrap.min.js'></script>
	<script src='bs/js/jquery.js'></script>
<body>
	<div class="container">
	<h1 class="page-header">用户添加</h1>
		<form action="add.php" method="post"> 
			<p>
				<div class="form-gruop">
					<label>班级名称</label>
					<input type="text" name='name' class="form-control">
				</div>
			</p>
			<p>
				<div class="form-gruop">
					<label>学生名</label>
					<input type="text" name='username' class="form-control">
				</div>
			</p>
			<p>
				<div class="form-gruop">
					<input type="submit" value="添加" class="btn btn-success">
					<input type="submit" value="取消" class="btn btn-warning">
				</div>
			</p>
		</form>
	</div>
</body>
</html>
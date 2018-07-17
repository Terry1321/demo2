<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册(主要判断验证码是否可用)</title>
</head>
<body>
	<h1>用户注册</h1>
	<form action="check.php" method="post">
			<ul>
				<label>
					用户名：<input type="text" value="admin" name="username">
				</label>
			</ul>
			<ul>
				<label>
					密码： <input type="password" value="123456" name="password">
				</label>
			</ul>
			<ul>
				<label>
					验证码：<input type="text" name="code" >
				</label>
					<img src="code.php" onclick="this,src='code.php?id='+Math.random()">
			</ul>
			<input type="submit" value="提交">
	</form>
</body>
</html>
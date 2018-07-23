<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图片上传以及下载</title>
</head>
<?php 
	$dir="../Thumbnails";

	function scan($dir){
		$rst=array();
		$files=scandir($dir);
		foreach ($files as $file) {
			if($file!="."&&$file!=".."){
				$filepath=$dir.'/'.$file;
				if (is_dir($file)) {
					$sonfiles =scan($filepath);
					$sonfiles AND $rst =array_merge($rst,$sonfiles);
				}else{
					$rst[]=$filepath;
				}
			}
		}
				return $rst;
	}
 ?>
<body>
	<form action="Thumbnail.php" method="post" enctype="multipart/form-data">
		<h1>上传图片</h1>
		<input type="file" name="img">
		<p>
			<input type="submit" value="上传">
		</p>
	</form>
	<hr>
	<h1>文件下载</h1>	
	<?php 

	$files=scan($dir);

		foreach ($files as $file) {
				$filename=end(explode("/", $file));
				$pre=end(explode(".", $file));
				$preview=array('jpg','png','gif');
					
				if (in_array($pre, $preview)) {
					echo"<span>缩略图：</span>";
					echo"<img src='$file' width='100px'></img>";
					echo"<p>{$filename} <a href='down.php?file={$filename}'>下载</a></p>";
					echo"<hr></hr>";
				}else{
					echo"<p>{$filename} <a href='down.php?file={$filename}'>下载</a></p>";
					echo"<hr></hr>";

				}
		}
	 ?>
</body>
</html>

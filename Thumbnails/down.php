<?php 
	$file=$_GET['file'];

	echo $file;

	$size=filesize($file);
	//文件下载
	// 1.设置文件mime类型 
	header("content-type:application/octet-stream");

	// 2.设置文件名和内容类型
	header("content-disposition:attachment;filename={$file}");

	// 3.设置文件大小
	header("content-length:{$size}");

	// 4.下载文件
	readfile($filepath);
 ?>
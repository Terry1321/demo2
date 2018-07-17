<?php  	
	// 创建画布
		$img=imagecreatetruecolor(100,30);

	// 颜色
		$bgcolor=imagecolorallocate($img,mt_rand(150,255),mt_rand(150,255),mt_rand(150,255));
		$color=imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
		$fcolor=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,200),mt_rand(0,200));
			
	// 填充背景色
		imagefill($img,0,0,$bgcolor);

	// 添加干扰素
		for ($i=0; $i<500; $i++) { 
			imagesetpixel($img,mt_rand(0,100),mt_rand(0,30),$color);
		}	
		for ($i=0; $i<10; $i++) { 
			imageline($img,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$color);
		}	
		for ($i=0; $i<2; $i++) { 
			imagearc($img,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$color);
		}

	// 添加字
		$fontarr=array_merge(range(0, 9),range("A","Z"),range("a","z"));
		shuffle($fontarr);
		$font = join(array_slice($fontarr, 0,5));
		imagettftext($img,15,0,20,22,$fcolor,'./msyhbd.ttf',$font);

	// 在网页上显示
		header('content-type:image/png');
		imagepng($img);

	// 释放画布资源
	imagedestroy($img);

	// 传递验证码
	session_start();
	$_SESSION['font']=$font;
?>
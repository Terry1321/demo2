<?php 
// PHP写验证码
		// 创建画布资源
		$img = imagecreatetruecolor(100, 40);
		// 颜色
		$white = imagecolorallocate($img, 255, 255, 255);
		// 在画布上绘图
		imagefill($img,0,0,$white);

	 ?>

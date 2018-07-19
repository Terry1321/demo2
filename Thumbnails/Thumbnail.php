<?php
	 //获取图片数据
	$tmp_name=$_FILES['img']['tmp_name'];
	$name=$_FILES['img']['name'];
	$size=$_FILES['img']['size'];
	$pre=end(explode(".",$name));
	$img="srcimg/".time()."_".mt_rand().".".$pre;
	// 控制上传格式
	$allow = array('jpg','png','gif');
	$allowsize=300*1024;
	// 图片函数
	function thumb($img,$dstw,$dsth,$pre){
		// 获取原图的长和宽以及图片类型
		$arr=getimagesize($img);
		$srcw=$arr[0];
		$srch=$arr[1];
		$imgtype=$arr[2];

		// 按照图片分类执行相应的处理
		switch ($imgtype) {
			case "1":
				$imgfrom="imagecreatefromgif";
				$imgout="imagegif";
				break;
			
			case "2":
				$imgfrom="imagecreatefromjpeg";
				$imgout="imagejpeg";
				break;

			case "3":
				$imgfrom="imagecreatefrompng";
				$imgout="imagepng";
				break;
		}

		// 原图资源
		$srcimg=$imgfrom($img);

		// 等比例算法
		$scale =max($srcw/$dstw,$srcw/$dstw);
		$dstw=floor($srcw/$scale);
		$dsth=floor($srch/$scale); 

		// 缩略图资源
		$dstimg=imagecreatetruecolor($dstw, $dsth);

		//执行图片缩略
		imagecopyresampled($dstimg, $srcimg, 0, 0, 0, 0, $dstw, $dsth, $srcw, $srch);

		//获取文件目录
		$filename=basename($img);

		// 保存图片
		$imgout($dstimg,'./dstimg/'.$pre.$filename);

		// 关闭资源
		imagedestroy($srcimg);
		imagedestroy($dstimg);
	}
if (in_array($pre,$allow)) {
	if ($size<$allowsize) {
		if (move_uploaded_file($tmp_name,$img)) {
				thumb($img,200,200,'st_');
				thumb($img,500,500,'mt_');
		}
	}else{
		echo "图片超过上传大小";
	}
}else{
	echo "上传的图片格式只能为jpg，png，gif";
}
 ?>

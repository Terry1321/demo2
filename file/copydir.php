<?php 
	$srcdir="../code";
	$dstdir="copy_code";
		
	function copydir($srcdir,$dstdir){
		if (is_dir($srcdir)) {
			if (!file_exists($dstdir)) {
				mkdir($dstdir);
			}
			$files=scandir($srcdir);	
			foreach ($files as $file) {
				if ($file!='.'&&$file!='..') {
					$srcpath = $srcdir.'/'.$file;
					$dstpath = $dstdir.'/'.$file;
					if (is_dir($srcpath)){
						copydir($srcpath,$dstpath);
					}else{
						copy($srcpath,$dstpath);
					}
				}
			}
			return "复制成功";
		}else{
			return "文件不存在复制失败";
		}
	}
	 echo copydir($srcdir,$dstdir);
 ?>

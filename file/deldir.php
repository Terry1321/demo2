<?php 
	$dir="copy_code";
	function deldir($dir){
		if (is_dir($dir)) {
			$files=scandir($dir);
			foreach ($files as $file) {
				if ($file!='.'&&$file!='..') {
					$path=$dir."/".$file;
					if (is_dir($path)) {
						deldir($path);
					}else{
						unlink($path);
					}
				}
			}
				rmdir($dir);
				return "删除成功";
		}else{
			return "文件夹不存在";
		}
	}	
	echo deldir($dir);
 ?>

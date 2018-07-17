<?php 
	$dir="aaa";
	function deldir($dir){
		if (is_dir($dir)) {
			$files=scandir($dir);
			foreach ($files as $file) {
				if ($file!='.'&&$file!='..') {
					$fileadd=$dir."/".$file;
					if (is_dir($fileadd)) {
						deldir($fileadd);
					}else{
						unlink($fileadd);
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

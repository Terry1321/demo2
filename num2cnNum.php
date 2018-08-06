<?php 
	function num2cnNum($num){
		if (is_numeric($num)) {
			$cnNum=array('零','壹','贰','叁','肆','伍','陆','柒','捌','玖');
			$arr=array_keys($cnNum);
			$numArr=str_split($num);
			$numLen=strlen($num);
			for ($i=0; $i<$numLen;) { 
				for ($j=0; $j<10 ; $j++){
					if ($numArr[$i]==$arr[$j]) {
						$rst[]=$cnNum[$j];
						$i++;
					}
				}
			}
			$strRst=join(',',$rst);
			return $strRst;
		}else{
			echo "你输入的不是数字";
		}	
	}
	
	$rst=num2cnNum(932914698);
	echo $rst;
 ?>

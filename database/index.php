<?php 
	include 'Model.class.php';
	include 'function.php';
	// 查询方法：
	$rst=table('class')->select();
		echo '<pre>';
		print_r($rst);


	// //模拟从表单获取需要添加的数据
	// $arr=array(
	// 	'name' => 'class6',
	// 	'username' => 'user6',
	//  );
	 
	// //添加方法：
	// if(table('class')->insert($arr)){
	// 	echo "添加成功";
	// }else{
	// 	echo "添加失败";
	// }
	


	// // 模拟从表单获取需要更新的数据
	// $arr=array(
	// 'id' => '5',
	// 'name' => 'class5',
	// 'username' => 'user5',
	// );
	// // 修改方法
	// if(table("class")->update($arr)){
	// 	echo "修改成功";
	// }else{
	// 	echo "修改失败";
	// }
 	
 // 	// 模拟从表单获取需要删除的数据
 // 	$arr=array(
	// 'id' => '6',
	// 'name' => 'class6',
	// 'username' => 'user6',
	// );

 // 	$id=reset($arr);
 // 	// 删除方法
 // 	if (table("class")->delete("id",$id)) {
 // 		echo '删除成功';
 // 	}else{
 // 		echo '删除失败';
 // 	}
	

 ?>
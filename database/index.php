<?php 
	include 'Model.class.php';
	include 'function.php';

	// 查询方法：
	$rst=table('class')->select();

	//模拟从表单获取需要添加的数据
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
	// 	'id' => '6',
	// 	'name' => 'class6',
	// 	'username' => 'user6',
	// );

	// $id=reset($arr);
	// unset($arr['id']);
	// // 修改方法
	// if(table("class")->where('id',$id)->update($arr)){
	// 	echo "修改成功";
	// }else{
	// 	echo "修改失败";
	// }
 	
 //	// 模拟从表单获取需要删除的数据
 // 	$arr=array(
	// 	'id' => '5',
	// 	'name' => 'class5',
	// 	'username' => 'user5',
	// );
 // 	$id=reset($arr);
 // 	// 删除方法
 // 	if (table("class")->where('id',$id)->delete()) {
 // 		echo '删除成功请刷新页面';
 // 	}else{
 // 		echo '删除失败';
 // 	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table border=1 width="500px">
 		<tr>
			<th>ID</th>
			<th>class</th>
			<th>username</th>
 		</tr>
 		<?php foreach ($rst as $key => $value) { ?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['username'] ?></td>
			</tr>
 		<?php } ?>
 	</table>

 </body>
 </html>
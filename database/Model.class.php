<?php 
	class Model{
		// 定义属性
		public $table;
		public $where;
		// 构造方法
		public function __construct($t){
			$this->table=$t;
			mysql_connect('localhost','root','123456');
			mysql_query("set names utf-8");
			mysql_select_db('test');

		}
		// 搜索方法
		public function select($condition="*"){
			$sql="select {$condition} from {$this->table}";
			$rst=mysql_query($sql);
			$rows=mysql_fetch_assoc($rst);
			if ($rst) {
				while ($rows=mysql_fetch_assoc($rst)) {
					$row[]=$rows;
				}
				return $row;
			}else{
				return "查询失败";
			}
		}

		// 增加方法
		public function insert($arr){
				
			foreach ($arr as $keys => $vals) {
				$key[]=$keys;
				$val[]='\''.$vals.'\'';
			}

			$k =join(',',$key);
			$v =join(',',$val);

			$sql = "insert into {$this->table}($k) values($v)";
			if (mysql_query($sql)) {
				return ture;
			}else{
				return false;
			}
		}
		// //where方法
		// public function where($condition,$val){
		// 	$this->where=$condition."=".$val;
		// 	echo $this->where;
		// 	return $this;	
		// }
	
		// update方法
		public function update($arr){
			$id=reset($arr);
			unset($arr['id']);
			foreach ($arr as $key => $vals) {
				$val[]=$key.'=\''.$vals.'\'';
			}
			$v = join(",",$val);
			$sql = " update {$this->table} set $v where id={$id} ";
			if (mysql_query($sql)) {
				return ture;
			}else{
				return false;
			}
		}

		public function delete($condition,$val){
			$con = $condition."=".$val;

			$sql = "delete from {$this->table} where {$con}";

			if(mysql_query($sql)){
				return ture;
			}else{
				return false;
			}
		}
	}
 ?>
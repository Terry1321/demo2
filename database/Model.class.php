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
		//where方法
		public function where($condition,$val){
			$this->where='where '.$condition."=".$val;
			return $this;	
		}
	
		// update方法
		public function update($arr){
			if ($this->where) {
				foreach ($arr as $key => $vals) {
					$val[]=$key.'=\''.$vals.'\'';
				}
				$v = join(",",$val);
				$sql = " update {$this->table} set $v  {$this->where} ";
				if (mysql_query($sql)) {
					return $this;
				}else{
					return false;
				}
			}else{
				echo '语法错误没有where()'.'<br>';
			}
		}


		public function delete(){
			if ($this->where) {
				$sql = "delete from {$this->table} {$this->where}";
				if(mysql_query($sql)){
					return $this;
				}else{
					return false;
				}
			}else{
				echo '语法错误没有where()'.'<br>';
			}
		}
	}
 ?>
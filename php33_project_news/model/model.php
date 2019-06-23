<?php 
class model{

	//lay nhieu ban ghi
	public function get_all($sql){
		global $db;
		$result=mysqli_query($db,$sql);
		$arr=array();
		while($rows=mysqli_fetch_object($result)){
			$arr[]=$rows;
		}
		return $arr;
	}

	//lay 1 ban ghi
	public function get_a_record($sql){
		global $db;
		$result=mysqli_query($db,$sql);
		$rows=mysqli_fetch_object($result);
		return $rows;
	}

	//thuc thi cau truy van
	public function execute($sql){
		global $db;
		$insert_id=0;
		if(mysqli_query($db,$sql))
			$insert_id=mysqli_insert_id($db);
	}

	//dem so luong cac ban ghi
	public function num_rows($sql){
		global $db;
		$result=mysqli_query($db,$sql);
		return mysqli_num_rows($result);
	}
}
?>
<?php
class controller_new_detail{
	public $model;
	public function __construct(){
		$this->model=new model();
		include "view/frontend/new_detail.php";
	}
}
new controller_new_detail();
?>
<?php
class controller_home{
	public $model;
	public function __construct(){
		$this->model=new model();
		include "view/frontend/home.php";
	}
}
new controller_home();
?>
<?php
class controller_inc_category{
	public $model;
	public function __construct(){
		$this->model=new model();
		include "view/frontend/inc_category.php";
	}
}
new controller_inc_category();
?>
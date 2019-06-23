<?php
class controller_hotnews{
	public $model;
	public function __construct(){
		$this->model=new model();
		include "view/frontend/hotnews.php";
	}
}
new controller_hotnews();
?>
<?php
	class controller_menu_category{
		public $model;
		public function __construct(){
			$this->model=new model();
			//load view
			include "view/frontend/view_menu_category.php";
		}
	}
	new controller_menu_category();
?>
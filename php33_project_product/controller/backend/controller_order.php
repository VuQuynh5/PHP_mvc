<?php 
	class controller_order{
		public $model;
		public function __construct(){
			$this->model = new model();
			//---------
			//phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 7;
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select order_id from tbl_order");
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (la bien p truyen tu url)
			$page = isset($_GET["p"])&&$_GET["p"]>=1 ? ($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $page*$record_per_page;
			//lay cac ban ghi
			$arr = $this->model->get_all("select * from tbl_order order by order_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_order.php";
			//---------
		}
	}
	new controller_order();
 ?>
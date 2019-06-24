<?php 
	class controller_order_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"]:"";
			switch($act){
				case "da_giao_hang":
					$order_id = isset($_GET["order_id"]) ? $_GET["order_id"]:0;
					$this->model->execute("update tbl_order set trangthai=1 where order_id=$order_id");
					echo "<script>location.href='admin.php?controller=order';</script>";
				break;
			}
			//load view
			include "view/backend/view_order_detail.php";
		}
	}
	new controller_order_detail();
 ?>
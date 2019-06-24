<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			//------
			//neu user an nut "Thanh toán"
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hoten = $_POST["hoten"];
				$diachi = $_POST["diachi"];
				$dienthoai = $_POST["dienthoai"];
				$email = $_POST["email"];
				/*
					1. insert hoten,diachi,dienthoai,email ban ghi vao tbl_customer -> lay id vua moi insert vao -> customer_id
					2. insert 1 ban ghi (customer_id,ngay,gia) vao tbl_order -> lay id vua moi insert vao -> order_id
					3. duyet qua cac phan tu cua session cart, voi moi phan tu duyet qua thi insert thanh 1 ban ghi trong tbl_order_detail
				*/
				//buoc 1
				$customer_id = $this->model->execute("insert into tbl_customer set hoten='$hoten',diachi='$diachi',dienthoai='$dienthoai',email='$email'");	
				//$cutomer_id = $_SESSION["customer_id"];
				//buoc 2
				$tonggia = 0;
				foreach($_SESSION["cart"] as $product)
					$tonggia = $tonggia + $product["number"]*$product["c_price"];
				$order_id = $this->model->execute("insert into tbl_order set customer_id=$customer_id,date=now(),gia=$tonggia");
				//buoc 3
				foreach($_SESSION["cart"] as $key=>$value){
					//insert ban ghi
					$this->model->execute("insert into tbl_order_detail set order_id=$order_id,fk_product_id=".$value["pk_product_id"].",gia=".$value["c_price"].",soluong=".$value["number"]);
				}	
				//xoa gio hang
				$_SESSION["cart"] = array();
				echo "<script>location.href='index.php?controller=cart';</script>";
			}
			//------
			//load view
			include "view/frontend/view_checkout.php";
		}
	}
	new controller_checkout();
 ?>
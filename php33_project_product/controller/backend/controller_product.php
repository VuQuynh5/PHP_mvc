<?php
class product {

	public $model;
	public function __construct(){
		$this->model=new model();

		//phan trang
		//quy trinh tinh so ban ghi trong 1 trang
		$record_per_page=15;
		//tnh tong so ban ghi
		$total_record=$this->model->num_rows("select pk_product_id from tbl_product");
		//tinh so trang -> ceil  la lam tron len
		$num_page=ceil($total_record/$record_per_page);
		//lay bien p truyen tu url
		$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
		//tai trang p, xac dinh xem lay tu ban ghi nao
		$from=$p * $record_per_page;
		//thuc hien truy van sql
		$arr=$this->model->get_all("select * from tbl_product order by  pk_product_id  desc limit $from,$record_per_page");

		//load file
		include "view/backend/list_product.php";
	}
}
new product();
?>
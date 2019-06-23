<?php
class news {

	public $model;
	public function __construct(){
		$this->model=new model();
		//-----------
		$id=isset($_GET["id"])?$_GET["id"]:0;
		//phan trang
		//quy trinh tinh so ban ghi trong 1 trang
		$record_per_page=5;
		//tnh tong so ban ghi
		$total_record=$this->model->num_rows("select pk_news_id from tbl_news where fk_category_news_id=$id ");
		//tinh so trang -> ceil  la lam tron len
		$num_page=ceil($total_record/$record_per_page);
		//lay bien p truyen tu url
		$p = isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
		//tai trang p, xac dinh xem lay tu ban ghi nao
		$from=$p * $record_per_page;
		//thuc hien truy van sql
		$arr=$this->model->get_all("select * from tbl_news where fk_category_news_id=$id order by  pk_news_id  desc limit $from,$record_per_page");

		//load file
		include "view/frontend/news_category.php";
	}
}
new news();
?>
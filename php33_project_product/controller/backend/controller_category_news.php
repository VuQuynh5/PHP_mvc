<?php
class controller_category_news{
	public $model;
	public function __construct(){
		$this->model=new model();

		$number_one_page=5;
		$all_page=$this->model->num_rows("select pk_category_news_id from tbl_category_news;");
		$num_page=ceil($all_page/$number_one_page);
		$p=isset($_GET["p"])&&is_numeric($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
		$from=$p * $number_one_page;

		$rows=$this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc limit $from,$number_one_page ");
		include "view/backend/list_category_news.php";
	}
}

new controller_category_news();
?>
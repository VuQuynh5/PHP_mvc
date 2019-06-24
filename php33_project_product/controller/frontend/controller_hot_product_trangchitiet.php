<?php
  class controller_hot_product_trangchitiet{
    public $model;
    public function __construct(){
      $this->model=new model();
      //load view
      include "view/frontend/view_hot_product_trangchitiet.php";
    }
  }
  new controller_hot_product_trangchitiet();
?>
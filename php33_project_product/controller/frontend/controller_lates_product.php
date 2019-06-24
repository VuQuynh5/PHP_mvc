<?php
  class controller_lates_product{
    public $model;
    public function __construct(){
      $this->model=new model();
      //load view
      include "view/frontend/view_lates_product.php";
    }
  }
  new controller_lates_product();
?>
<!-- card -->
<form method="post" action="index.php?controller=cart&act=update">
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col"> </th>
              <th scope="col">Product</th>
              <th scope="col" class="text-center">Quantity</th>
              <th scope="col" class="text-right">Price</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($_SESSION["cart"] as $product):?>
            <tr>
              <td><img src="public/upload/product/<?php echo $product['c_img'];?>" style="width:50px;"/></td>
              <td><?php echo $product['c_name'];?></td>
              <td><input class="form-control" type="number" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['pk_product_id']; ?>" /></td>
              <td class="text-right"><?php echo $product['c_price']; ?></td>
              <td class="text-right"><a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"];?>" style="font-size: 11px;" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            </tr>
            <?php endforeach; ?> 
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><strong>So luong cac san pham</strong></td>
              <td class="text-right"><?php echo $this->cart_number(); ?> San pham</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><strong>Tong gia</strong></td>
              <td class="text-right"><?php echo number_format($this->cart_total());?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col mb-2">
      <div class="row">
        <div class="col-md-12 col-sm-6 text-right"> 
          <a href="index.php" class="btn btn-primary">Tiep tuc mua hang</a> 
          <input type="submit" value="Cap nhat san pham" class="btn btn-success">
          <a href="index.php?controller=cart&act=destroy" class="btn btn-info">Xoa gio hang</a><?php if($this->cart_number()>0): ?>
          <a href="index.php?controller=checkout" class="btn btn-success">Thanh toan</a><?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- end card --> 
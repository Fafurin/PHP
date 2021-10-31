<?php 
  session_start();
  require_once('goods.php');
  foreach($goods as $item){ ?>
<div>
  <h3><?php echo $item['title'];?></h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloribus excepturi enim, dolor iure velit.</p>
  <p><?php echo $item['price'] . ' руб.';?></p>
  <a href="<?php echo $item['img'];?>" target="_blank">
        <img src="<?php echo $item['img'];?>" alt="" width = 100px>
  </a>
  <a href="index.php?add-to-cart-product-id=<?php echo $item['product_id'];?>">Add to cart</a>
</div> 
<?php }

if($_GET['add-to-cart-product-id']){
  $_SESSION['cart'][$_GET['add-to-cart-product-id']] = $_GET['add-to-cart-product-id'];
}
?>
  <a href="cart.php">Корзина</a>


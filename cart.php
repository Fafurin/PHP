<?php
  session_start();
  require_once('goods.php');
  if(isset($_SESSION['cart']) && $_SESSION['cart'] !== NULL){?>
  <h2>Корзина</h2>
  <?php
   foreach($_SESSION['cart'] as $cart_item_id){ ?>
      <div>
        <h3><?php echo $goods[$cart_item_id]['title'];?></h3>
        <a href="<?php echo $goods[$cart_item_id]['img'];?>" target="_blank">
              <img src="<?php echo $goods[$cart_item_id]['img'];?>" alt="" width = 50px>
        </a>
        <p><?php echo $goods[$cart_item_id]['price'] . ' руб.';?></p>
        <a href="cart.php?remove-from-cart-product-id=<?php echo $goods[$cart_item_id]['product_id'];?>">Удалить из корзины</a>
      </div>
   <?php
   }
  }
  if($_GET['remove-from-cart-product-id']){
    unset($_SESSION['cart'][$_GET['remove-from-cart-product-id']]);
  }

 
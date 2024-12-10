<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>
   </div>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>


  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="responsive.css">

</head>

<body>

   <!-- header section -->
   <section id="header-section">
    <div class="header">
      <div class="nav-logo">
        <h1><a href="index.php"><img width="325%" src="img/BOOKTOPIA__1_-removebg-preview.png"></a>
      </div>


     
      <div class="nav-icon flex">
        <div><a href="search.php"><img src="img/icons8-search-52.png" alt=""></a></div>

        <div class="user-acc"><img src="img/user.svg" alt=""></div>
        <div><a href="favorite.php"><img src="img/icons8-wishlist-50.png" alt=""></a></div>
        <div><a href="cart.php"><img src="img/cart.svg" alt=""></a></div>

        <div class="nav-toggle" id="navbar-toggle">
          <img src="img/navtoggle.png" alt="t" width="100%">
        </div>
      </div>
    </div>
    <div class="navbar" id="navbar-link">
      <div class="account-info">
        <div class="acco-img flex">
          <img src="img/myphoto.jpg" alt="">
        </div>
        <div class="acc-info flex">
        <h2><span><?php echo $_SESSION['user_name']; ?></span></h2>
          <p class="p2-text">reader</p>
        </div>
      </div>
      <ul>
        <li><a href="index.php
      " class="active">Home</a></li>
        <li><a href="shop.php
      ">Novels</a></li>
        <li><a href="shop2.php
      ">Mangas</a></li>
        <li><a href="aboutus.php
      ">About US</a></li>
        <li><a href="contact_us.php
      ">Contact Us</a></li>
      </ul>
    </div>
  </section>

  <!-- login form -->
  <section class="login-form">
    <div class="close-icon" onclick="close()"><img width="50px" src="img/close.png"></a></div>
    <div class="form-container">       
    <div class="user">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete">Logout</a>
         </div>
        </div>
     
    
  </section>

<!-- cart page -->

<section class="main-cart">
  <div class="cart-heading flex ">
    <img src="img/cart.svg" alt="cart img">
    <h2> My Cart</h2>
  </div>
  <div class="container cart-content flex">
    <div class="cart-items" id="cart-item">
      <div class="cart-item-heading flex">
        <div class="cart-i-img">Items</div>
        <div class="cart-i-name"></div>
        <div class="cart-i-price">Price</div>
        <div class="cart-i-quantity">Quantity</div>
        <div class="cart-i-total">Total</div>
        <div class="item-remove"></div>
      </div>
      <!-- <div class="cart-i flex">
        <div class="cart-i-img">
          <img src="img/book1.jpg" alt="book">
        </div>
        <div class="cart-i-name"><div class="book-n">The Alchemist</div>
        <p class="p3-text book-w">Paulo coelho</p></div>
        <div class="cart-i-price">Rs. 299</div>
        <div class="cart-i-quantity">
          <input type="number" name="" min="1" max="20" value="1">
        </div>
        <div class="cart-i-total">Rs. 299</div>
        
      </div> -->
    
    </div>
    <div class="cart-bill">
       <!-- <div class="cart-bill-div flex">
          <h5>
            Subtotal : 
          </h5>
          <p class="p2-text">
            00
          </p>
       </div>
       <div class="cart-bill-div flex">
        <h5>Sales Tax : </h5>
        <p class="p2-text">
          rs.104
        </p>
       </div> -->
       <div class="cart-bill-div flex">
        <h5>
          Coupon Code : 
        </h5>
        <p class="p2-text">
          <a href="">Add coupon</a>
        </p>
       </div>
       <div class="cart-bill-grand flex">
         <h5>Grand Total</h5>
         <p class="p-text" >Rs 00</p>
       </div>
       <div class="cart-checkout">
        <div>You are eligible for free delivery</div>
        <div>
        <a href="checkout.php"><button class="check-btn">
              CheckOut
          </button></a>
        </div>
       </div>

    </div>
  </div>
</section>

  

<script src="script.js"></script>
<script src="cart.js"></script>
  


</body>

</html>
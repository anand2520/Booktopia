<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

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
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="shop.html">Novels</a></li>
        <li><a href="shop2.html">Mangas</a></li>
        <li><a href="aboutus.html">About US</a></li>
        <li><a href="contact_us.html">Contact Us</a></li>
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


  <!-- cart section -->


  <section class="main-favorite">
    <div class="cart-heading flex ">
      <img src="img/favorite-64.png" alt="cart img">
      <h2> Favorite-Items</h2>
    </div>
    <div class="container fav-container flex">
      <!-- <div class="fav-item flex">
        <div class="fav-img">
          <img src="img/book4.jpg" alt="book">
        </div>
        <div class="fav-dis flex">
          <div class="fav-name">Khovayela ni Khojama</div>
          <div class="fav-author">Jules vern</div>
          <div class="fav-ratting"><img src="img/rating.png" alt=""></div>

          <div class="fav-btn flex">
            <div class="fav-cart-btn">
              <button class="fav-cart-i">add to cart</button>
            </div>
            <div class="fav-del-btn">
              <button class="fav-del-i"><img src="img/dustbin.png" alt=""></button>

            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>



  <script src="script.js"></script>
  <script>
    window.onload = function () {
      const favItems = JSON.parse(localStorage.getItem('favItems')) || []

      favItems.forEach(text => {

        const txt = ` <div class="fav-item flex">
        <div class="fav-img">
          <img src="img/${text[0]}" alt="book">
        </div>
        <div class="fav-dis flex">
          <div class="fav-name">${text[1]}</div>
          <div class="fav-author">${text[2]}</div>
          <div class="fav-ratting"><img src="img/rating.png" alt=""></div>

          <div class="fav-btn flex">
            <div class="fav-cart-btn" onclick="addtocart('${text[0]}','${text[1]}','${text[2]}',${text[3]},${text[4]})">
              <button class="fav-cart-i">add to cart</button>
            </div>
            <div class="fav-del-btn" onclick="removeitem('${text[1]}',this)">
              <button class="fav-del-i"><img src="img/dustbin.png" alt=""></button>
            </div>
          </div>
        </div>
      </div> `

        document.getElementsByClassName('fav-container')[0].innerHTML += txt
      });

    }


    function removeitem(x,id) {
      id.parentElement.parentElement.parentElement.remove();
      const favItems = JSON.parse(localStorage.getItem('favItems')) || []

      for (i = 0; i < favItems.length; i++) {
        if (JSON.stringify(favItems[i][1]) == JSON.stringify(x)) {
          favItems.splice(i, 1);
          localStorage.setItem('favItems', JSON.stringify(favItems));
          break;

        }
      }

    }

    function addtocart(cImg, cName, cAuthor, cPrice) {

      list_i = [cImg, cName, cAuthor, cPrice, 1]

      if (isalreadyincart(list_i) == true) {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        cartItems.push(list_i)
        localStorage.setItem('cartItems', JSON.stringify(cartItems))

        alert("Added");

      }
      else {
        alert("Already in cart");
      }

    }

    function isalreadyincart(list_i) {
      const cartItems = JSON.parse(localStorage.getItem('cartItems')) || []
      for (let i = 0; i < cartItems.length; i++) {


        if (cartItems[i][1] == list_i[1] && cartItems[i][2] == list_i[2]) {
          return false;
        }
      }
      return true;
    }

  </script>
</body>

</html>
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
  <title>Shop page</title>
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
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="shop.php">Novels</a></li>
        <li><a href="shop2.php">Mangas</a></li>
        <li><a href="aboutus.php">About US</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
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

  <section class="s-shop-section">
    <div class="container s-shop-container">
      <div class="s-shop-content">
        <div class="s-shop-heading flex ">
          <h1>Novels</h1>
        </div>
        <div class="s-shop-area">

          <div class="s-shop-items">
            <div class="s-shop-items-head flex">
              <div class="left">
                <p class="p2-text">29 books are listed</p>
              </div>
              <div class="right flex">
                <div class="s-sort">
                  <div class="sort-btn">Default Sort &nbsp; <span>+</span></div>
                  <div class="sort-content flex">
                    <a href="#">Price</a>
                    <a href="#">Most viewd</a>
                    <a href="#">Best selling</a>
                    <a href="#">Trending</a>
                    <a href="#">New arrival</a>
                  </div>
                </div>
                <div id="filter-icon">
                  <img src="img/filter.png" alt="filter">
                </div>
              </div>
            </div>
            <div class="s-book-container flex">

              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/twts.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Adventures</p>
                  <div class="book-n">The Adventures of Tom Sawyer</div>
                  <p class="p3-text book-w">Mark Twain</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">300</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('twts.jpg','The Adventures of Tom Sawyer','Mark Twain',300)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('twts.jpg','The Adventures of Tom Sawyer','Mark Twain',300)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/aaw.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Adventures</p>
                  <div class="book-n">Alice's Adventures in Wonderland</div>
                  <p class="p3-text book-w">Lewis Carroll</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('aaw.jpg','Alices Adventures in Wonderland','Lewis Carroll',509)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('aaw.jpg','Alices Adventures in Wonderland','Lewis Carroll',509)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tkamb.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Thriller</p>
                  <div class="book-n">To Kill a Mockingbird</div>
                  <p class="p3-text book-w">Harper Lee</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">450</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tkamb.jpg','To Kill a Mockingbird','Harper Lee',450)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tkamb.jpg','To Kill a Mockingbird','Harper Lee',450)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tgg.jpg " alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Tragedy</p>
                  <div class="book-n">The Great Gatsby</div>
                  <p class="p3-text book-w">F. Scott Fitzgerald</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">300</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tgg.jpg','The Great Gatsby','F. Scott Fitzgerald',300)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tgg.jpg','The Great Gatsby','F. Scott Fitzgerald',300)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tcir.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Literary realism</p>
                  <div class="book-n">The Catcher in the Rye</div>
                  <p class="p3-text book-w">J.D. Salinger</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">350</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tcir.png','The Catcher in the Rye','J.D. Salinger',350)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tcir.png','The Catcher in the Rye','J.D. Salinger',350)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/1984.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Dystopian Fiction</p>
                  <div class="book-n">1984</div>
                  <p class="p3-text book-w">George Orwell</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">300</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('1984.png','1984','George Orwell',300)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('1984.png','1984','George Orwell',300)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tdos.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Mystery & Crime-Fiction</p>
                  <div class="book-n">The Adventures of Sherlock Holmes</div>
                  <p class="p3-text book-w">	Arthur Conan Doyle</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tdos.jpg','The Adventures of Sherlock Holmes','	Arthur Conan Doyle',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tdos.jpg','The Adventures of Sherlock Holmes','	Arthur Conan Doyle',500 )"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>

              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/th.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Tragedy</p>
                  <div class="book-n">The Handmaid's Tale</div>
                  <p class="p3-text book-w">Margaret Atwood</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">345</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('th.jpg','The Handmaids Tale','Margaret Atwood',345)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('th.jpg','The Handmaids Tale','Margaret Atwood',345)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/dune.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Adventure Fiction</p>
                  <div class="book-n">Dune</div>
                  <p class="p3-text book-w">Frank Herbert</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">700</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('dune.png','Dune','Frank Herbert',700)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('dune.png','Dune','Frank Herbert',700)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/cp.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Epistolary novel</p>
                  <div class="book-n">The Color Purple</div>
                  <p class="p3-text book-w">	Alice Walker</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">250</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('cp.png','The Color Purple','	Alice Walker',250)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('cp.png','The Color Purple','	Alice Walker',250)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tf.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Romance Novel</p>
                  <div class="book-n">The Fault in Our Stars</div>
                  <p class="p3-text book-w">John Green</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tf.png','The Fault in Our Stars','John Green',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tf.png','The Fault in Our Stars','John Green',500)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/ar.jpeg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Psychological Fiction</p>
                  <div class="book-n">The God of Small Things</div>
                  <p class="p3-text book-w">Arundhati Roy</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">599</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('ar.jpeg','The God of Small Things','Arundhati Roy',599)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('ar.jpeg','The God of Small Things','Arundhati Roy',599)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/af.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Historical Fiction</p>
                  <div class="book-n">A Fine Balance</div>
                  <p class="p3-text book-w">Rohinton Mistry</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">349</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('af.jpg','A Fine Balance','Rohinton Mistry',349)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('af.jpg','A Fine Balance','Rohinton Mistry',349)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/name.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Bildungsroman</p>
                  <div class="book-n">The Namesake</div>
                  <p class="p3-text book-w">Jhumpa Lahiri</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">299</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('name.jpg','The Namesake','Jhumpa Lahiri',299)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('name.jpg','The Namesake','Jhumpa Lahiri',299)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/TKR.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Bildungsroman</p>
                  <div class="book-n">The Kite Runner</div>
                  <p class="p3-text book-w">Khaled Hosseini</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">250</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('TKR.jpg','The Kite Runner','Khaled Hosseini',250)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('TKR.jpg','The Kite Runner','Khaled Hosseini',250)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/life.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Adventure Fiction</p>
                  <div class="book-n">Life of Pi</div>
                  <p class="p3-text book-w">Yann Martel</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">600</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('life.jpg','Life of Pi','Yann Marteln',600)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('life.jpg','Life of Pi','Yann Marteln',600)"><a href="#"><img src="img/cart.svg"
                          alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/secret.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Self-help book</p>
                  <div class="book-n">The Secret</div>
                  <p class="p3-text book-w">Rhonda Byrne</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">350</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('secret.jpg','The Secret','Rhonda Byrne',350)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('secret.jpg','The Secret','Rhonda Byrne',350)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/pil.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Fiction</p>
                  <div class="book-n">The Pilgrimage</div>
                  <p class="p3-text book-w">Paulo Coelho</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('pil.jpg','The Pilgrimage','Paulo Coelho',399)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('pil.jpg','The Pilgrimage','Paulo Coelho',399)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/prophet.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Poetry</p>
                  <div class="book-n">The Prophet</div>
                  <p class="p3-text book-w">Kahlil Gibran</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">450</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('prophet.jpg','The Prophet','Kahlil Gibran',450)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('prophet.jpg','The Prophet','Kahlil Gibran',450)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/death.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Crime Fiction</p>
                  <div class="book-n">Death on the Nile </div>
                  <p class="p3-text book-w">Agatha Christie</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">199</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('death.jpg','Death on the Nile ','Agatha Christie',199)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('death.jpg','Death on the Nile ','Agatha Christie',199)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/insomnia.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Psychological Thriller</p>
                  <div class="book-n">Insomnia</div>
                  <p class="p3-text book-w">Stephen King</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('insomnia.jpg','Insomnia','Stephen King',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('insomnia.jpg','Insomnia','Stephen King',500)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/shaw.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Suspense</p>
                  <div class="book-n">Shawshank Redemption</div>
                  <p class="p3-text book-w">	Stephen King</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('shaw.jpg','Shawshank Redemption','	Stephen King',399)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('shaw.jpg','Shawshank Redemption','	Stephen King',399)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tgw.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Crime Fiction</p>
                  <div class="book-n">The Girl with the Dragon Tattoo </div>
                  <p class="p3-text book-w">Stieg Larsson</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">299</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tgw.jpg','The Girl with the Dragon Tattoo','Stieg Larsson',299)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tgw.jpg','The Girl with the Dragon Tattoo','Stieg Larsson',299)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tsl.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Bildungsroman</p>
                  <div class="book-n">The Secret Life of Bees</div>
                  <p class="p3-text book-w">Sue Monk Kidd</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tsl.jpg','The Secret Life of Bees','Sue Monk Kidd',399)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tsl.jpg','The Secret Life of Bees','Sue Monk Kidd',399)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/tm.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Self-help book</p>
                  <div class="book-n">Think Like a Monk</div>
                  <p class="p3-text book-w">Jay Shetty</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">509</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('tm.jpg','Think Like a Monk','Jay Shetty',509)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('tm.jpg','Think Like a Monk','Jay Shetty',509)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/ah.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Self-help book</p>
                  <div class="book-n">Atomic Habits</div>
                  <p class="p3-text book-w">James Clear</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('ah.jpg','Atomic Habits','James Clear',399)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('ah.jpg','Atomic Habits','James Clear',399)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/five.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Fiction</p>
                  <div class="book-n">Five Point Someone</div>
                  <p class="p3-text book-w">Chetan Bhagat</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">349</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('five.jpg','Five Point Someone','Chetan Bhagat',349)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('five.jpg','Five Point Someone','Chetan Bhagat',349)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/2.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Romance Novel</p>
                  <div class="book-n">2 States</div>
                  <p class="p3-text book-w">Chetan Bhagat</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">399</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('2.jpg','2 States','Chetan Bhagat',399)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('2.jpg','2 States','Chetan Bhagat',399)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/hg.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Romance Novel</p>
                  <div class="book-n">Half Girlfriend</div>
                  <p class="p3-text book-w">Chetan Bhagat</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">250</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('hg.jpg','Half Girlfriend','Chetan Bhagat',250)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('hg.jpg','Half Girlfriend','Chetan Bhagat',250)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div>

      </div>
    </div>

  </section>

  
  <section class="footer">
    <div class="">
      <div class="top-footer padding-1 flex">
        <div class="subscribe">
          <div class="subscribe-head flex">
            <img src="img/envelope-outline.svg" alt="icon" width="50px" height="50px">
            <p style="margin: 0;">Subscribe to get Updates of Book on email</p>
          </div>
          <div class="subscribe-inp flex">
            <div class="inp-div1"><input type="text" name="uname" class="form-inp" placeholder="Enter Your name">
            </div>
            <div class="inp-div1"><input type="email" name="email" class="form-inp" placeholder="Enter email">
            </div>
            <div class="inp-btn"><input type="button" value=" Subscribe" class="primary-btn"></div>

          </div>
        </div>

        <!-- <div class="footer-img">
              <img src="img/footer-img.png" alt="" >
      </div> -->
        <!-- <div></div> -->
      </div>

      <div class="bottom-footer padding-1 flex">
        <div class="footer-col-1 flex">
          <div>
            <h2>Booktopia</h2>
          </div>
          <div>
            <p style="font-size: 16px;">We're Bringing Our Online Experience Offline Soon</p>
          </div>
          <div>
            <h4><strong>Contact Us</strong></h4>
          </div>
          <div>
            <p><strong>Address: </strong>Indus University, Rancharda Ahmendabad</p>
            <p><strong>Phone:</strong>+91 9904414690 /+91 9974835039</p>
            <p><strong>Time:</strong>Mon-Sat (9:00AM - 5:00PM)</p>
          </div>
          <div>
            <h4><strong>Follow Us</strong></h4>
          </div>
          <div>
              <a href="https://www.instagram.com/"><img width="26px" src="img/instagram-logo.png"></a>
              <a href="https://www.whatsapp.com/"><img width="27px" src="img/whatsapp.png"></a>
              <a href="https://www.snapchat.com/"><img width="27px" src="img/snapchat.png"></a>
              <a href="https://www.facebook.com/"><img width="24px" src="img/facebook.png"></a>
              <a href="https://www.youtube.com/"><img width="27px" src="img/youtube.png"></a>
            
          </div>
        </div>
        <div class="footer-col-2 flex">
          <div class="footer-col-2-1 flex">
            <h4><strong>About</strong></h4>
            <a href="aboutus.php">About Us</a>
            <a href="#">Delivery information</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="">Terms & Condition</a>
            <a href="contact_us.php">Contact us</a>
          </div>
          <div class="footer-col-2-2 flex">
            <h4><strong>My Account</strong></h4>
            <a href="cart.html">View Cart</a>
            <a href="favorite.html ">My Whishlist</a>
            <a href="">Track My Order</a>
            <a href="">Help</a>
          </div>
        </div>
        <div class="footer-col-3 flex">
          <h4><strong>Payment</strong></h4>
          <p>Secured Payment</p>
          <div></div>
        </div>
      </div>
      <hr>
      <div class="copywrite padding-1">
        <div>
          <p class="p3-text"> Copyright ©2023. All Rights Reserved By Anand & Drashti.</p>
        </div>
        <div>
          <p class="p3-text"><a href="">Term & Condition</a></p>
          <p class="p3-text"><a href="">Privacy-Policy</a></p>
        </div>
      </div>
    </div>
  </section>


  <script src="script.js"></script>
  <script>

    const filtericon = document.getElementById('filter-icon')
    const shopfilter = document.getElementsByClassName('s-shop-filter')


    filtericon.addEventListener('click', () => {
      shopfilter[0].classList.toggle('s-shop-active')
    })


  </script>

  <script>
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
    function addtofav(cImg, cName, cAuthor, cPrice) {

      list_j = [cImg, cName, cAuthor, cPrice, 1]

      if (isalreadyinfav(list_j) == true) {
        const favItems = JSON.parse(localStorage.getItem('favItems')) || [];

        favItems.push(list_j)
        localStorage.setItem('favItems', JSON.stringify(favItems))

        alert("Added");

      }
      else {
        alert("Already in favorite");
      }

    }

    function isalreadyinfav(list_j) {
      const favItems = JSON.parse(localStorage.getItem('favItems')) || []
      for (let i = 0; i < favItems.length; i++) {


        if (favItems[i][1] == list_j[1] && favItems[i][2] == list_j[2]) {
          return false;
        }
      }
      return true;
    }
  </script>

  <script>
    const mainelement = document.getElementsByClassName('s-book-card')

    for (i = 0; i < mainelement.length; i++) {
      const mainimg = mainelement[i].querySelector('.s-book-card-img').getElementsByTagName('img')[0]

      const mainname = mainelement[i].querySelector('.book-n').innerHTML
      const maincat = mainelement[i].querySelector('.book-c').innerHTML
      
      const mainwri = mainelement[i].querySelector('.book-w').innerHTML
      const mainprice = mainelement[i].querySelector('.book-p').innerHTML

      mainimg.onclick = function (){
        const mainItems = JSON.parse(localStorage.getItem('mainItems')) || [];

        mainItems[0] = [mainimg.getAttribute('src') , mainname , maincat , mainwri , mainprice]
        localStorage.setItem('mainItems', JSON.stringify(mainItems))

        window.location.href='bshop.php';

      }
    }
  </script>
</body>

</html>


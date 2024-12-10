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
          <h1>Mangas</h1>
        </div>
        <div class="s-shop-area">

          <div class="s-shop-items">
            <div class="s-shop-items-head flex">
              <div class="left">
                <p class="p2-text">15 Mangas are listed</p>
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
                  <img src="img/naruto.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Naruto</div>
                  <p class="p3-text book-w">Masashi Kishimoto</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('naruto.png','Naruto','Masashi Kishimoto',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('naruto.png','Naruto','Masashi Kishimoto',500)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/aot.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Attack on Titan</div>
                  <p class="p3-text book-w">Hajime Isayama</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">600</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('aot.jpg','Attack on Titan','Hajime Isayama',600)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('aot.jpg','Attack on Titan','Hajime Isayama',600)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/death1.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Thriller</p>
                  <div class="book-n">Death Note</div>
                  <p class="p3-text book-w">Tsugumi Ohba</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">450</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('death1.jpg','Death Note','Tsugumi Ohba',450)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('death1.jpg','Death Note','Tsugumi Ohba',450)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/op.jpeg " alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">One Piece</div>
                  <p class="p3-text book-w">Eiichiro Oda</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">900</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('op.jpeg','One Piece','Eiichiro Oda',900)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('op.jpeg','One Piece','Eiichiro Oda',900)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/bleach.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Bleach</div>
                  <p class="p3-text book-w">	Tite Kubo</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">550</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('bleach.jpg','Bleach','	Tite Kubo',550)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('bleach.jpg','Bleach','	Tite Kubo',550)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/your.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Your Name.</div>
                  <p class="p3-text book-w">Makoto Shinkai</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">400</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('your.jpg','Your Name.','Makoto Shinkai',400)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('your.jpg','Your Name.','Makoto Shinkai',400)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/kmy.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Demon Slayer: Kimetsu no Yaiba</div>
                  <p class="p3-text book-w">		Koyoharu Gotōge</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('kmy.png','Demon Slayer: Kimetsu no Yaiba','Koyoharu Gotōge',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('kmy.png','Demon Slayer: Kimetsu no Yaiba','Koyoharu Gotōge',500 )"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>

              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/jjk.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Jujutsu Kaisen</div>
                  <p class="p3-text book-w">Gege Akutami</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">700</div>
                  <div class="s-book-card-btn">
                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('jjk.jpg','Jujutsu Kaisen','Gege Akutami',700)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('jjk.jpg','Jujutsu Kaisen','Gege Akutami',700)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/db.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Dragon Ball</div>
                  <p class="p3-text book-w">Akira Toriyama</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">700</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('db.jpg','Dragon Ball','Akira Toriyama',700)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('db.jpg','Dragon Ball','Akira Toriyama',700)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/boruto.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Boruto- Two Blue Vortex</div>
                  <p class="p3-text book-w">Masashi Kishimoto</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">550</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('boruto.png','Boruto- Two Blue Vortex','Masashi Kishimoto',550)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('boruto.png','Boruto- Two Blue Vortex','Masashi Kishimoto',550)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/haikyu.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Haikyu !!</div>
                  <p class="p3-text book-w">Haruichi Furudate</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">500</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('haikyu.jpg','Haikyu !!','Haruichi Furudate',500)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('haikyu.jpg','Haikyu !!','Haruichi Furudate',500)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/berserk.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">Berserk</div>
                  <p class="p3-text book-w">Kentaro Miura</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">350</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('berserk.png','Berserk','Kentaro Miura',350)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('berserk.png','Berserk','Kentaro Miura',350)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/opm.png" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">One Punch Man</div>
                  <p class="p3-text book-w">Yusuke Murata</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">550</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('opm.png','One Punch Man','Yusuke Murata',550)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('opm.png','One Punch Man','Yusuke Murata',550)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/mha.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">My Hero Academia</div>
                  <p class="p3-text book-w">Kohei Horikoshi</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">300</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('mha.jpg','My Hero Academia','Kohei Horikoshi',300)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('mha.jpg','My Hero Academia','Kohei Horikoshi',300)"><a href="#"><img
                          src="img/cart.svg" alt="add to cart"></a></div>
                  </div>
                </div>
              </div>
              <div class="s-book-card">
                <div class="s-book-card-img flex">
                  <img src="img/cow.jpg" alt="book-img">
                </div>
                <div class="s-book-card-disc flex">
                  <p class="p3-text book-c">Manga</p>
                  <div class="book-n">CowBoy Bebop</div>
                  <p class="p3-text book-w">Hajime Yatate</p>
                  <div class="rating-img"><img src="img/rating.png" alt="rating"></div>
                  <div class="book-p">800</div>
                  <div class="s-book-card-btn">

                    <div><a href="https://www.whatsapp.com/"><img src="img/share.png" alt=""></a></div>
                    <div onclick="addtofav('cow.jpg','CowBoy Bebop','Hajime Yatate',800)"><a href="#"><img
                          src="img/favorite-64.png" alt="like"></a></div>
                    <div onclick="addtocart('cow.jpg','CowBoy Bebop','Hajime Yatate',800)"><a href="#"><img
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


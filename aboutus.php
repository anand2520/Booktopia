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


    <!--  about us section -->


    <section class="about-section">

        <div class="about-page-heading flex">
            <h1>About BookShelf</h1>
            <p class="p2-text">Home > About Us</p>
        </div>
        <div class="about-motive container flex">
            <div class="a-motive-dis">
                <h1 class="about-in-heading">Our Vision</h1>
                <p class="p-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus cupiditate praesentium accusamus
                    atque tempora laudantium aspernatur ut iste maxime sequi corporis quod, reiciendis minima eaque
                    possimus officia porro omnis! Quia quisquam reiciendis odit corporis corrupti!
                </p>
            </div>
            <div class="a-motive-img">
                  <img src="img/a-heros.jpg" alt="image">
            </div>
        </div>
        <div class="about-feature ">
            <div class="container about-feature-in">
                <h1 class="about-in-heading">Best ever Bookstore</h1>
                <p class="p-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo ipsum, quos velit odio
                    tempora, deleniti, iusto magnam voluptatem incidunt accusamus inventore commodi sequi molestias.
                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem modi consectetur blanditiis iusto
                    totam est voluptate nam?
                </p>
            </div>
            <div class="a-feature-items container">
                <div class="a-f-item flex">
                    <div class="a-f-item-img">
                        <img src="img/bookicon.png" alt="">
                    </div>
                    <div class="a-f-item-text">
                        <h4><strong>Popular & New Book</strong></h4>
                        <p class="p2-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, inventore cumque! Saepe,
                            porro!
                        </p>
                    </div>
                </div>
                <div class="a-f-item flex">
                    <div class="a-f-item-img">
                        <img src="img/delivery.png" alt="">
                    </div>
                    <div class="a-f-item-text">
                        <h4><strong>Free & Fast Delivery</strong></h4>
                        <p class="p2-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, inventore cumque! Saepe,
                            porro!
                        </p>
                    </div>
                </div>
                <div class="a-f-item flex">
                    <div class="a-f-item-img">
                        <img src="img/supportexp.png" alt="">
                    </div>
                    <div class="a-f-item-text">
                        <h4><strong>9 year old & good contact support</strong></h4>
                        <p class="p2-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, inventore cumque! Saepe,
                            porro!
                        </p>
                    </div>
                </div>
            </div>
  
        </div>


        <div class="about-app">
            <div class="a-app-info container flex">
                <h3><strong>Download Our App for better experience</strong></h3>
                <p class="p2-text">
                    over 70000+ Download
                    and 2500+ daily active user 
                </p>
                <p class="p2-text">
                    We sell around 40000 on last year
                </p>
                <div><button class="secondary-btn">Play Store</button>
                    <button class="secondary-btn">App Store</button></div>
            </div>
        </div>
 

        <div class="about-author ">
            <div class=" container">
                <h1 class="about-in-heading">Authors we are connected with</h1>
            </div>
            <div class="a-author-photos container flex">
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/chetanbhagat.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Chetan Bhagat
                            <p class="p3-text">14 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/drsaradthakar.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Dr. Sarad Thakar
                            <p class="p3-text">24 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/julesvern.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Jules Verne
                            <p class="p3-text">54 Books</p>
                        </div>
                    </div>
                 </div>
                   <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/PauloCoelho.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Paulo Coelho
                            <p class="p3-text">8 Books</p>
                        </div>
                    </div>
                 </div>
                
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/amishtripathi.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Amish Tripathi
                            <p class="p3-text">12 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/AgathaChristie.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Agatha Christie
                            <p class="p3-text">19 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/chetanbhagat.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Chetan Bhagat
                            <p class="p3-text">14 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/drsaradthakar.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Dr. Sarad Thakar
                            <p class="p3-text">24 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/julesvern.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Jules Verne
                            <p class="p3-text">54 Books</p>
                        </div>
                    </div>
                 </div>
                   <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/PauloCoelho.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Paulo Coelho
                            <p class="p3-text">8 Books</p>
                        </div>
                    </div>
                 </div>
                
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/amishtripathi.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Amish Tripathi
                            <p class="p3-text">12 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/AgathaChristie.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Agatha Christie
                            <p class="p3-text">19 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/chetanbhagat.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Chetan Bhagat
                            <p class="p3-text">14 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/drsaradthakar.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Dr. Sarad Thakar
                            <p class="p3-text">24 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/julesvern.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Jules Verne
                            <p class="p3-text">54 Books</p>
                        </div>
                    </div>
                 </div>
                   <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/PauloCoelho.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Paulo Coelho
                            <p class="p3-text">8 Books</p>
                        </div>
                    </div>
                 </div>
                
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/amishtripathi.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Amish Tripathi
                            <p class="p3-text">12 Books</p>
                        </div>
                    </div>
                 </div>
                 <div class="a-authors">
                    <div class="a-author-in">
                        <div class="a-author-in-img">
                            <img src="img/AgathaChristie.jpeg" alt="photo">
                        </div>
                        <div class="a-author-in-name">
                            Agatha Christie
                            <p class="p3-text">19 Books</p>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>



    <!-- footer section -->


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
              <div class="inp-btn1"><input type="button" value=" Subscribe" class="primary-btn"></div>
  
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



</body>

</html>
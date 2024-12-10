
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
  <title>BOOKTOPIA Website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="responsive.css">
  <script src="validation.js"></script>
  
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
        <div><a href="cart.html"><img src="img/cart.svg" alt=""></a></div>

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
    <style>
        body {
  font-family: sans-serif;
}

h1 {
  font-size: 32px;
  font-weight: bold;
}

p {
  font-size: 16px;
  line-height: 1.5;
}

ul {
  list-style-type:lower-roman;
  padding-left: 20px;
}

li {
  margin-bottom: 10px;
}

.container {
  width: 1500px;
  margin: 0 auto;
}
    </style>
<head>
  <title>Booktopia Privacy Policy</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ7849wpNE9IetM4tHv4U/EjKMxwov4pR202SD" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Booktopia Privacy Policy</h1>
    <p>This privacy policy explains how Booktopia collects, uses, and discloses your personal information when you visit our website or use our services.</p>
    <h2>What information do we collect?</h2>
    <p>We collect the following information from you:</p>
    <ul>
      <li>Your name and contact information (such as your email address and phone number)</li>
      <li>Your billing and shipping information</li>
      <li>Your order history and purchase information</li>
      <li>Your IP address and browsing history</li>
    </ul>
    <h2>How do we use your information?</h2>
    <p>We use your information to:</p>
    <ul>
      <li>Process your orders and provide you with the products and services you have requested</li>
      <li>Communicate with you about your orders and other important matters</li>
      <li>Improve our website and services</li>
      <li>Protect our website and services from fraud and other illegal activity</li>
    </ul>
    <h2>How do we disclose your information?</h2>
    <p>We do not disclose your personal information to third parties for their own marketing purposes. However, we may share your information with third parties who provide services to us, such as our payment processor and shipping carrier.</p>
    <h2>How do we protect your information?</h2>
    <p>We take all reasonable steps to protect your personal information from unauthorized access, use, disclosure, alteration, or destruction. We use a variety of security measures, including encryption and firewalls, to protect your information.</p>
    <h2>Your choices</h2>
    <p>You have the following choices regarding your personal information:</p>
    <ul>
      <li>You can access and update your personal information by logging into your Booktopia account.</li>
      <li>You can request that we delete your personal information by contacting us at booktopia@gmail.com</li>
      <li>You can opt out of receiving marketing emails from us by clicking the unsubscribe link in any marketing email we send you.</li>
    </ul>
    <h2>Changes to this privacy policy</h2>
    <p>We may update this privacy policy from time to time. If we make any significant changes, we will notify you by posting a notice on our website or sending you an email.</p>
    <p>Contact us</p>
    <p>If you have any questions about this privacy policy, please contact us at booktopia@gmail.com</p>
    <br>
    <br>
  </div>
</body>
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
              <a href="https://www.facebook.com/"><img width="23px" src="img/facebook.png"></a>
              <a href="https://www.youtube.com/"><img width="26px" src="img/youtube.png"></a>
            
          </div>
        </div>
        <div class="footer-col-2 flex">
          <div class="footer-col-2-1 flex">
            <h4><strong>About</strong></h4>
            <a href="aboutus.html">About Us</a>
            <a href="#">Delivery information</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="">Terms & Condition</a>
            <a href="contact_us.html">Contact us</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <script src="script.js"></script>
</html>
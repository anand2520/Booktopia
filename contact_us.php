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
    


    <!--  contact us section -->

    <section class="contact-us">

        <div class="">
            <div class="contact-img flex">
                <div class="contact-heading">
                    Stay connected with Us
                </div>
                <div class="contact-form flex">
                    <form action="" class="c-form">
                        <div>
                            <div><label for="c-name">First Name</label></div>
                            <input type="text" name="" id="c-name">
                        </div>
                        <div>
                            <div><label for="c-l-name">Last Name</label></div>
                            <input type="text" name="" id="c-l-name">
                        </div>
                        <div>
                            <div><label for="email">Email Adress</label></div>
                            <input type="c-email" name="" id="c-email">
                        </div>
                        <div>
                            <div>
                                <label for="c-massage">Message /feedback</label>
                            </div>
                            <textarea name="" id="c-textarea" cols="35" rows="5"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="send">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="contact-details">
            <div class="container">
                <div class="contact-card">
                    <div class="c-icon">
                        <img src="img/location.png" alt="">
                    </div>
                    <div class="c-heading">visit Us</div>
                    <p class="p3-text">
                        Lorem ipsum dolor sit amet, consectetur at obcaecati consectetur eveniet.
                    </p>
                    <div style="color:#2bb187">Botad,Gujarat,India</div>
                </div>
                <div class="contact-card">
                    <div class="c-icon">
                        <img src="img/call1.png" alt="">
                    </div>
                    <div class="c-heading">Call Us</div>
                    <p class="p3-text">
                        Lorem ipsum dolor sit amet, consectetur at obcaecati consectetur eveniet.
                    </p>
                    <div style="color:#2bb187">+91 00000 00000</div>
                </div>
                <div class="contact-card">
                    <div class="c-icon">
                        <img src="img/envelope-outline.svg" alt="">
                    </div>
                    <div class="c-heading">Email Us</div>
                    <p class="p3-text">
                        Lorem ipsum dolor sit amet, consectetur at obcaecati consectetur eveniet.
                    </p>
                    <div style="color:#2bb187">bookshelf@bookstore.com</div>
                </div>
            </div>
        </div>

        <div class="container c-map">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27706.393089105117!2d71.75645415991366!3d22.108118607843107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958cf867b1de48b%3A0x5fac28f978984dfe!2sLathidad%2C%20Gujarat%20364710!5e0!3m2!1sen!2sin!4v1677747083560!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="c-footer">
            <div class="container">
                <div>Support us</div>
                <div class="f-icon-div">
                    <div class="footer-icon">
                        <img src="img/social1.png" alt="icon">
                    </div>
                    <div class="footer-icon">
                        <img src="img/social2.png" alt="icon">
                    </div>
                    <div class="footer-icon">
                        <img src="img/social3.png" alt="icon">
                    </div>
                    <div class="footer-icon">
                        <img src="img/social 4.png" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>


</body>

</html>
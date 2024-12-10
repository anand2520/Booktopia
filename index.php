<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];


  $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

  if(mysqli_num_rows($check_cart_numbers) > 0){
    
  }else{
     mysqli_query($conn, "INSERT INTO `cart`(user_id, name,  image) VALUES('$user_id', '$product_name', '$product_price','$product_image')") or die('query failed');
     
  }

}

/*if(isset($_POST['submit'])){
$cImg = mysqli_real_escape_string($conn, $_POST['book_img']);
$cName = mysqli_real_escape_string($conn, $_POST['book_name']);
$cAuthor = mysqli_real_escape_string($conn, $_POST['book_author']);
$cPrice= mysqli_real_escape_string($conn, $_POST['book_price']);
$select_books = mysqli_query($conn, "SELECT * FROM `book` WHERE book_img = '$cImg' AND book_name = '$cName' AND book_author = '$cAuthor' AND book_price = '$cPrice'") or die('query failed');
mysqli_query($conn, "INSERT INTO `book`(book_img,book_name, book_author, book_price) VALUES('$cImg ', '$cName', '$cAuthor', '$cPrice')") or die('query failed');
}
*/
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


  <!--  hero - section -->
  <section class="hero-section flex">
    <div class="container hero-content flex">
      <div class="hero-img">
        <img src="img/image-removebg-preview.png" alt="image" width=750px>
      </div>
      <div class="hero-text flex">
        <h2 class="p2-text hero-text-head">The Literary Oasis: A Haven for Book Lovers</h2>
        <h1>Escape into the world of books </h1>
        <p class="p2-text hero-text-dis">Welcome to our bookstore! We're passionate about books and we're excited
           to help you find the perfect one for you. We have a wide selection of books to choose from, including 
           fiction, non-fiction, children's books, and more. We also offer free shipping on orders over 500 Rs.</p>
           <a href="shop.php"><button>Shop Now</button></a>
      </div>
    </div>
  </section>

  <!--  feature section -->

  <section class="feature-section container">
    <div class="feature-content flex padding-1">
      <div class="feature-item flex">
        <div class="feature-item-text">
          <h4> <strong>Free Delivery</strong></h4>
          <p class="p3-text">Over 500 Rs. cart value <br>All over India </p>
        </div>
        <div class="feature-img">
          <img src="img/feature2.png" alt="png">
        </div>
      </div>
      <div class="feature-item flex">
        <div class="feature-item-text">
          <h4> <strong>Secured Payment</strong></h4>
          <p class="p3-text">Your money is secured<br>Prefer card payment / UPI </p>
        </div>
        <div class="feature-img">
          <img src="img/feature5.png" alt="png">
        </div>
      </div>
      <div class="feature-item flex">
        <div class="feature-item-text">
          <h4> <strong>24 hour Support</strong></h4>
          <p class="p3-text">Our team is always with you to support 24 hour </p>
        </div>
        <div class="feature-img">
          <img src="img/feature6.png" alt="png">
        </div>
      </div>
    </div>
  </section>

  <!-- best selling book -->

  <section>
    <div class="container padding-2 best-selling">
      <div class="book-div-heading ">
        <h1>Best Selling Items</h1>

      </div>
      <div class="book-card-container flex">
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/1984.png" alt="book" name="book-img">
          </div>
          <div class="book-disc flex">
            <div class="book-name" name="book-name">
              <h3>1984</h3>
            </div>
            <div class="book-author" name="book-author">
              <p class="p2-text">George Orwell</p>
            </div>
            <div class="book-price" name="book-price">300</div>
            <div><a href="#" class="secondary-btn" value="add to cart" name="add_to_cart" 
                onclick="addtocart('1984.png', '1984', 'Georger Orwell', 300)">Buy</a></div>

          </div>
          <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0)
            while($fetch_products = mysqli_fetch_assoc($select_products))
              ?>
          <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">


        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/tkamb.jpg" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h4>To Kill A Mockingbird</h4>
            </div>
            <div class="book-author">
              <p class="p2-text">Harper Lee</p>
            </div>
            <div class="book-price">450</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('tkamb.jpg', 'To Kill A Mockingbird', 'Harper Lee', 450)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/naruto.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>Naruto</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Masashi Kishimoto</p>
            </div>
            <div class="book-price">500</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('naruto.png', 'Naruto', 'Masashi Kishimoto',500)">Buy</a></div>

          </div>
      
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/chain.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>Chainsawman</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Tatsuki Fujimoto</p>
            </div>
            <div class="book-price">600</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('chain.png', 'Chainsawman', 'Tatsuki Fujimoto', 600)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/book1.jpg" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>The Alchemist</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Paulo Coelho</p>
            </div>
            <div class="book-price"> 299</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('book1.jpg', 'The Alchemist', 'paulo coelho', 299)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/tcir.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h4>The Catcher in the Rye</h4>
            </div>
            <div class="book-author">
              <p class="p2-text">J.D. Salinger</p>
            </div>
            <div class="book-price">350</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('tcir.png', 'The Catcher in the Rye', 'J.D. Salinger', 350)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/kmy.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>Demon Slayer</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Koyoharu Gotouge</p>
            </div>
            <div class="book-price">550</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('kmy.png', 'Demon Slayer', 'Koyoharu Gotouge', 550)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/dune.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>Dune</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Frank Herbert</p>
            </div>
            <div class="book-price">700</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('dune.png', 'Dune', 'Frank Herbert',700)">Buy</a></div>
          </div>
        </div>
        <div class="book-card">
          <div class="book-img flex">
            <img src="img/cp.png" alt="book">
          </div>
          <div class="book-disc flex">
            <div class="book-name">
              <h3>The Color Purple</h3>
            </div>
            <div class="book-author">
              <p class="p2-text">Alice Walker</p>
            </div>
            <div class="book-price">250</div>
            <div><a href="#" class="secondary-btn"
                onclick="addtocart('cp.png', 'The Color Purple', 'Alice Walker', 250)">Buy</a></div>
          </div>
      </div>
    </div>

  </section>

    <hr>
  <!-- offer-section  -->
  <section>
    <div class="offer-section container padding-1  flex ">
      <div class="offer-section-img">
        <img src="img/bunch2.jpg" alt="book-img" class="offer-s-i-1">
        <img src="img/bunch1.avif" alt="book-img" class="offer-s-i-2">
        <img src="img/books.jpg" alt="book-img" class="offer-s-i-3">
        <img src="img/book10.gif" alt="book-img" class="offer-s-i-4">
      </div>
      <div class="offer-dis flex">
        <img src="img/book11.png" alt="book-img" class="offer-s-i-5">
        <h1 class="p2-text"><strong><b><u>BEST DEAL</u></b></strong></h1>
        <h2> <strong> Get Dozen of Books</strong> </h2>
        <p class="p-text">At just 1499 Rs.</p>
        <a href="#" class="primary-btn">claim</a>
      </div> 
    </div>
  </section>



  <!-- all time best -->


  <section class="all-time-book-section">
    <div class="container padding-2 all-time-best">
      <div class="book-div-heading ">
        <h1><b>All time best</b></h1>
      </div>
      <div class="b-c-container flex">
        <div class="book-card-c-text flex">
          <h1>Most Popular Novels in India</h1>
          <p class="p2-text">The following novels were the best-selling in India the previous year. </p>
        </div>
        <div class="book-card-c-items book-card-container flex">
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/ar.jpeg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>The God of Small Things</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Arundhati Roy</p>
              </div>
              <div class="book-price"> 599</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('ar.jpeg', 'The God of Small Things', 'Arundhati Roy', 599)">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/tiol.jpg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>The Inheritance of Loss</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Kiran Desai</p>
              </div>
              <div class="book-price"> 349</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('tiol.jpg', 'The Inheritance of Loss', 'Kiran Desai', 349)">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/twt.png" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>The White Tiger</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Aravind Adiga</p>
              </div>
              <div class="book-price "> 299</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('twt.png', 'The White Tiger', 'Aravind Adiga', 299)">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/tg.jpg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>The Great Indian Novel</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Shashi Tharoor</p>
              </div>
              <div class="book-price "> 399</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('book3-1.jpg', 'The Great Indian Novel', 'Shashi Tharoor', 399)">Buy</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="b-c-container flex">
        <div class="book-card-c-text flex">
          <h1>Most Popular Manga in India</h1>
          <p class="p2-text">The following Mangas are the best-selling in India the previous year. </p>
        </div>
        <div class="book-card-c-items book-card-container flex">
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/op.jpeg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>One Piece</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Eiichiro Oda</p>
              </div>
              <div class="book-price"> 450</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('op.jpeg', 'One Piece', 'Eiichiro Oda', 450  )">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/db.jpg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>Dragon Ball Super</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Akira Toriyama</p>
              </div>
              <div class="book-price"> 300</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('db.jpg', 'Dragon Ball Super', 'Akira Toriyama', 300)">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/boruto.png" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>Boruto- Two Blue Vortex</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Masashi Kishimoto</p>
              </div>
              <div class="book-price "> 500</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('boruto.png', 'Boruto- Two Blue Vortex', 'Masashi Kishimoto', 500)">Buy</a></div>
            </div>
          </div>
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/bleach.jpg" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>Bleach</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">Tite Kubo</p>
              </div>
              <div class="book-price "> 400</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('bleach.jpg', 'Bleach', 'Tite Kubo', 400)">Buy</a></div>
            </div>
          </div>
        </div>
      </div>
  </section>
  


 

  <div class="container">
    <div class="book-div-heading ">
      
      <h1>What our customer said</h1>
    </div>
  </div>
  <div class="reviews-container">
    <div class="review-row flex">
      <div class="review-column">
        <div class="review-img">
          <img src="img/myphoto.jpg" alt="image">
        </div>
        <div>
          <div class="review-text">
            <p class="p2-text">
              "BOOKTOPIA stands out for its vast selection and free worldwide shipping. 
               Navigating their user-friendly site is a joy, and their commitment to offering diverse titles makes it a
               haven for book enthusiasts globally."
            </p>
            <div>
              <p class="p2-text cust-name"><span>Aayushi</span> Shah</p>
            </div>
          </div>

        </div>

      </div>
      <div class="review-column">
        <div class="review-img">
          <img src="img/myphoto.jpg" alt="image">
        </div>
        <div>
          <div class="review-text">
            <p class="p2-text">
              "BOOKTOPIA is a literary paradise, offering an extensive collection that caters to every reader's taste. 
               With user-friendly navigation, unbeatable prices, and swift delivery, it's the go-to online bookstore for 
               an unparalleled reading experience."
            </p>
            <div>
              <p class="p2-text cust-name"><span>Khwahish</span> Patel </p>
            </div>
          </div>

        </div>

      </div>
      <div class="review-column">
        <div class="review-img">
          <img src="img/myphoto.jpg" alt="image">
        </div>
        <div>
          <div class="review-text">
            <p class="p2-text">
              "BOOKTOPIA combines the charm of a physical bookstore with the convenience of online shopping. 
               Boasting a comprehensive catalog,exclusive editions, and seamless browsing, it's a top choice 
               for bibliophiles seeking both variety and a touch of nostalgia."
            </p>
            <div>
              <p class="p2-text cust-name"><span>Dev</span> Salot </p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <!--  offer section  -->

  <section class="offer">
    <div class="offer-container container padding-1 flex">
      <div class="row-1 flex">
        <div class="offer-banner-1">
          <h3>carzy deal</h3>
          <h2>Buy 1 Get 1 free </h2>
          <p class="p3-text"> on any educational book</p>
          <button class="secondary-btn">Learn More</button>
        </div>
        <div class="offer-banner-2">
          <h3>carzy deal</h3>
          <h2>Get Full pack </h2>
          <p class="p3-text"> purchase any series of book at 40% off</p>
          <button class="secondary-btn">Get the deal</button>
        </div>
      </div>
      <div class="row-2 flex">
        <div class="offer-banner-3">
          <h3>carzy deal</h3>
          <h2>seasonal offer </h2>
          <p class="p3-text"> upto 50% off</p>
        </div>
        <div class="offer-banner-4">
          <h3>carzy deal</h3>
          <h2>New arrivals</h2>
          <p class="p3-text"> Lorem ipsum dolor sit amet consectetur adipisicing. </p>
          <button class="secondary-btn">Explore</button>
        </div>
        <div class="offer-banner-5">
          <h3>Wait end</h3>
          <h2>upcoming Book </h2>
          <p class="p3-text"> Lorem ipsum dolor sit amet consectetur.</p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  <script src="script.js"></script>
 

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
  </script>


  <script>
    const mainelement = document.getElementsByClassName('book-card')

    for (i = 0; i < mainelement.length; i++) {
      const mainimg = mainelement[i].querySelector('.book-img').getElementsByTagName('img')[0]

      const mainname = mainelement[i].querySelector('.book-name').getElementsByTagName('h3')[0].innerHTML

      const mainwri = mainelement[i].querySelector('.book-author').getElementsByTagName('p')[0].innerHTML
      const mainprice = mainelement[i].querySelector('.book-price').innerHTML

      mainimg.onclick = function () {
        const mainItems = JSON.parse(localStorage.getItem('mainItems')) || [];

        mainItems[0] = [mainimg.getAttribute('src'), mainname, 'category', mainwri, mainprice]
        localStorage.setItem('mainItems', JSON.stringify(mainItems))

        window.location.href = 'bshop.php';

      }
    }
  </script>
</body>

</html>
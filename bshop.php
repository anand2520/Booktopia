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
    

    <!-- big shopping page -->

    <section class="detailed-item">
        <div class="container b-detailed-content">
            <div class="b-d-content-img">
                <div class="b-big-img">
                    <img src="img/ts.jpg.crdownload" alt="book" id="main-img">
                </div>
                <div class="b-small-img">
                    <img src="img/book3-1.jpg" alt="book" class="s-img">
                    <img src="img/book3-2.jpg" alt="book" class="s-img">
                    <img src="img/book3-2.jpg" alt="book" class="s-img">
                </div>
            </div>
            <div class="b-d-content-text">
                <div class="b-d-category">Biography</div>
                <h3 class="b-d-name"> એકલો જાને રે.. </h3>
                <p class="p-text writer">dr. Sarad thakar</p>
                <div>rs.<span class="price"> 299</span></div>
                <div><input type="number" name="abc" id="abc" value="1">
                    <button class="secondary-btn" onclick="addtocart()">Add to cart</button>
                </div>

                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quas adipisci, laboriosam explicabo,
                    aperiam id dolor dolorem numquam ducimus impedit rerum nobis neque pariatur qui doloribus animi
                    voluptate omnis doloremque dignissimos, amet eveniet similique? Sapiente.</div>

                <div class="alldetail"><span onclick="displayfun()">show more +</span>
                    <div class="detailofbook">
                        <table>
                            <tr>
                                <td class="left">Book Name :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                            <tr>
                                <td class="left">Author Name :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                            <tr>
                                <td class="left">book category :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                            <tr>
                                <td class="left">publisher :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                            <tr>
                                <td class="left">release-year :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                            <tr>
                                <td class="left">wordwide sell :- </td>
                                <td>Lorem, ipsum dolor.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section>
      <div class="container padding-2 best-selling">
        <div class="book-div-heading ">
          <h1>Best Selling Items</h1>
          
        </div>
        <div class="book-card-container flex">
          <div class="book-card">
            <div class="book-img flex">
              <img src="img/1984.png" alt="book">
            </div>
            <div class="book-disc flex">
              <div class="book-name">
                <h3>1984</h3>
              </div>
              <div class="book-author">
                <p class="p2-text">George Orwell</p>
              </div>
              <div class="book-price">300</div>
              <div><a href="#" class="secondary-btn"
                  onclick="addtocart('1984.png', '1984', 'Georger Orwell', 300)">Buy</a></div>
            </div>
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
    <script>

        function displayfun() {
            let abc = document.getElementsByClassName('detailofbook')
            abc[0].style.display = 'block';
        }

        let mainImg = document.getElementById('main-img')
        let smallImg = document.getElementsByClassName('s-img')

        smallImg[0].onclick = function () {
            mainImg.src = smallImg[0].src
        }
        smallImg[1].onclick = function () {
            mainImg.src = smallImg[1].src
        }
        smallImg[2].onclick = function () {
            mainImg.src = smallImg[2].src
        }
    </script>

<script>
    
window.onload = function () {
    const mainItems = JSON.parse(localStorage.getItem('mainItems')) || []

    const pbimg = document.getElementById('main-img').src = `${mainItems[0][0]}`
    const psimg1 = document.getElementsByClassName('s-img')[0].src = `${mainItems[0][0]}`
    const psimg2 = document.getElementsByClassName('s-img')[1].src
    = `img/rom1.jpg`
    const psimg3 = document.getElementsByClassName('s-img')[2].src 
    = `img/rom1.jpg`
    const pname = document.getElementsByClassName('b-d-content-text')[0].getElementsByClassName('b-d-name')[0].innerText = `${mainItems[0][1]}`
    const pcat = document.getElementsByClassName('b-d-content-text')[0].getElementsByClassName('b-d-category')[0].innerHTML = `${mainItems[0][2]}`
    const pwri = document.getElementsByClassName('b-d-content-text')[0].getElementsByClassName('p-text writer')[0].innerHTML = `${mainItems[0][3]}`
    const pprice = document.getElementsByClassName('b-d-content-text')[0].getElementsByClassName('price')[0].innerHTML = `${mainItems[0][4]}`



}

</script>

<script>

    function addtocart() {
      const mainItems = JSON.parse(localStorage.getItem('mainItems')) || []
      const quan2 = document.getElementById('abc').value
      const img2 = JSON.stringify(mainItems[0][0])
      list_i = [img2.slice(5,-1),mainItems[0][1], mainItems[0][3], mainItems[0][4],  quan2 || 1]

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

      mainimg.onclick = function (){
        const mainItems = JSON.parse(localStorage.getItem('mainItems')) || [];

        mainItems[0] = [mainimg.getAttribute('src') , mainname , 'category' , mainwri , mainprice]
        localStorage.setItem('mainItems', JSON.stringify(mainItems))

        window.location.href='bshop.html';

      }
    }
  </script>

</body>

</html>
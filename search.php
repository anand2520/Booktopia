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
<style>
  body{
    background-color:#f1eee9;
  }
* {
  box-sizing: border-box;
  
}

#myInput {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #000000;
  margin-bottom: 12px;
 
}

#myTable {
  border-collapse:separate;
  width: 100%;
  border: 1px solid #000000;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  
  padding: 15px;
}

#myTable tr {
  border-bottom: 1px solid #000000;
  background-color: #869fb5;

}

#myTable tr.A, #myTable tr:hover {
  background-color: #ad959a;
}
h1{text-align: center;
  font-family:'Courier New', Courier, monospace;
}

</style>

</head>
<body>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
  <tr class="A">
    <th>Books</th>
    <th>Authors</th>
  </tr>
  <tr>
    <td>The Adventures of Tom Sawyer</td>
    <td>Mark Twain</td>
  </tr>
  <tr>
    <td>Alice's Adventures in Wonderland</td>
    <td>Lewis Carroll</td>
  </tr>
  <tr>
    <td>The Lord of the Rings</td>
    <td>J.R.R. Tolkien</td>
  </tr>
  <tr>
    <td>To Kill a Mockingbird</td>
    <td>Harper Lee</td>
  </tr>
  <tr>
    <td>The Great Gatsby</td>
    <td>F. Scott Fitzgerald</td>
  </tr>
  <tr>
    <td>Chainsawman</td>
    <td>Tatsuki Fujimoto</td>
  </tr>
  <tr>
    <td>Harry Potter</td>
    <td>J.K. Rowling</td>
  </tr>
  <tr>
    <td>The Hunger Games</td>
    <td>Suzanne Collins</td>
  </tr>
  <tr>
    <td>The Catcher in the Rye</td>
    <td>J.D. Salinger</td>   
  </tr>
  <tr>
    <td>1984</td>
    <td>George Orwell</td>   
  </tr>
  <tr>
    <td>The Adventures of Sherlock Holmes</td>
    <td>Arthur Conan Doyle</td>   
  </tr>
  <tr>
    <td>The Handmaid's Tale</td>
    <td>Margaret Atwood</td>   
  </tr>
  <tr>
    <td>Dune</td>
    <td>Frank Herbert</td>   
  </tr>
  <tr>
    <td>The Hitchhiker's Guide to the Galaxy</td>
    <td>Douglas Adams</td>   
  </tr>
  <tr>
    <td>The Color Purple</td>
    <td>Alice Walker</td>   
  </tr>
  <tr>
    <td>The Fault in Our Stars</td>
    <td>John Green</td>   
  </tr>
  <tr>
    <td>The God of Small Things</td>
    <td>Arundhati Roy</td>   
  </tr>
  <tr>
    <td>A Fine Balance</td>
    <td>Rohinton Mistry</td>   
  </tr>
  <tr>
    <td>The Namesake</td>
    <td>	Jhumpa Lahiri</td>   
  </tr>
  <tr>
    <td>The Kite Runner</td>
    <td>Khaled Hosseini</td>   
  </tr>
  <tr>
    <td>Attack on Titan</td>
    <td>Hajime Isayama</td>   
  </tr>
  <tr>
    <td>Naruto</td>
    <td>Masashi Kishimoto</td>   
  </tr>
  <tr>
    <td>One Piece</td>
    <td>Eiichiro Oda</td>   
  </tr>
  <tr>
    <td>Death Note</td>
    <td>Tsugumi Ohba</td>   
  </tr>
  <tr>
    <td>Bleach</td>
    <td>Tite Kubo</td>   
  </tr>
  <tr>
    <td>Your Name.</td>
    <td>Makoto Shinkai</td>   
  </tr>
  <tr>
    <td>Demon Slayer: Kimetsu no Yaiba</td>
    <td>Koyoharu Gotōge</td>   
  </tr>
  <tr>
    <td>Jujutsu Kaisen</td>
    <td>Gege Akutami</td>   
  </tr>
  <tr>
    <td>Dragon Ball</td>
    <td>Akira Toriyama</td>   
  </tr>
  <tr>
    <td>Life of Pi</td>
    <td>Yann Martel</td>   
  </tr>
  <tr>
    <td>The Secret</td>
    <td>Rhonda Byrne</td>   
  </tr>
  <tr>
    <td>The Pilgrimage</td>
    <td>Paulo Coelho</td>   
  </tr>
  <tr>
    <td>The Prophet</td>
    <td>Kahlil Gibran</td>   
  </tr>
  <tr>
    <td>Death on the Nile</td>
    <td>Agatha Christie</td>   
  </tr>
  <tr>
    <td>Insomnia</td>
    <td>Stephen King</td>   
  </tr>
  <tr>
    <td>Shawshank Redemption</td>
    <td>Stephen King</td>   
  </tr>
  <tr>
    <td>The Hitchhiker's Guide to the Galaxy</td>
    <td>Douglas Adams</td>   
  </tr>
  <tr>
    <td>The Girl with the Dragon Tattoo</td>
    <td>Stieg Larsson</td>   
  </tr>
  <tr>
    <td>The Secret Life of Bees</td>
    <td>Sue Monk Kidd</td>   
  </tr>
  <tr>
    <td>Think Like a Monk</td>
    <td>Jay Shetty</td>   
  </tr>
  <tr>
    <td>Five Point Someone</td>
    <td>Chetan Bhagat</td>   
  </tr>
  <tr>
    <td>2 States</td>
    <td>Chetan Bhagat</td>   
  </tr>
  <tr>
    <td>Half Girlfriend</td>
    <td>Chetan Bhagat</td>   
  </tr>
</table>
<script src="script.js"></script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;

  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>

<?php
include_once './db.inc.php';
include './header.inc.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookHouse</title>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,600&family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amaranth:ital@0;1&display=swap" rel="stylesheet">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">


</head>

<body>

  <!-- -------------Navigation------------------- -->
  <!-- -------------Navigation------------------- -->
  <nav>
    <ul>
      <li class="logo"><a href="./index.html">BookHouse</a></li>
      <li class="li-btn"><span class="fas fa-bars"></span></li>
      <div class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>



      </div>

      <div class="nav-right">

        <li class="search-icon">
          <input type="search" placeholder="Search">

          <label class="icon">

            <span class="fas fa-search"></span>

          </label>
        </li>
        <li class="list-item" id="list-item"><i class="fas fa-user"></i>


          <ul class="nav-drop-menu">
            <div class="center">
              <h1>Login</h1>
              <form method="post">
                <div class="txt_field">
                  <input type="text" required>

                  <label>Username</label>
                </div>
                <div class="txt_field">
                  <input type="password" required>
                  <span></span>
                  <label>Password</label>
                </div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
                <div class="signup_link">
                  Not a member? <a href="./register.html">Signup</a>
                </div>
              </form>
            </div>
          </ul>
          <!-- <span class="cart"><i class="fas fa-shopping-cart"></i></span> -->

        </li>

        <div class='cart-wrapper'>
          <div class="cart">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <div class="cart-badge"><span id="cart-count">0</span></div>
          <div class="box" id="box">

          </div>
        </div>


      </div>
    </ul>

  </nav>
  <!-- ------------------Navigation End------------ -->

  <!-- Cart Items Details -->

  <!-- <div class="small-container cart-page">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Sub-Total</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/b2.png" alt="">
            <div>
              <p>Deathly Hallows</p>
              <small>Price: £20.00</small>
              <br>
              <a href="">Remove</a>

            </div>
          </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>£10.00</td>
      </tr>
    </table>
  </div> -->

  <!-- Php Test Section -->

  <section class="cart-test">
    <div class="cart-container">
      <form class="cart-form" action="signup.inc.php" method="POST">

        <input type="text" name="first" placeholder="Firstname">
        <br>
        <input type="text" name="last" placeholder="Last Name">
        <br>
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <button class="test-btn" type="Submit" name="submit">Sign Up</button>
      </form>

    </div>





  </section>



  <!-- Php Test Section -->





  <!---------------------------- Footer------------------- -->

  <hr>

  <footer>
    <div class="footer-wrapper">
      <div class="foot-list">
        <ul>
          <li class="foot-title">Services</li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Shipping & Delivery</a></li>
          <li><a href="#">Returns & Refunds</a></li>
          <li><a href="#">Student Discounts</a></li>
        </ul>
      </div>
      <div class="foot-list">
        <ul>
          <li class="foot-title">Help</li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a>
          <li><a href="#">Cookie Policy</a></li>
          <li><a href="#">Track Your Order</a></li>
          <li><a href="#">My Account</a></li>
        </ul>
      </div>
      <div class="foot-list">
        <ul>
          <li class="foot-title">About Us</li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Loyalty Cards</a></li>
          <li><a href="#">BookHouse Careers</a></li>
          <li><a href="#">WEEE Policy</a></li>
        </ul>
      </div>



    </div>
    <div class="news-letter">
      <div class="subscribe">
        <h2 class="subscribe-title">BookHouse</h2>
        <p class="subscribe-copy">Subscribe to keep up with exciting new offers & updates.</p>
        <div class="form">
          <input type="email" class="form-email" placeholder="Enter your email address" />
          <button class="form-button">Send</button>
        </div>
        <div class="notice">
          <input type="checkbox">
          <span class="notice-copy">I agree to my email address being stored and uses to recieve monthly
            newsletter.</span>
        </div>
      </div>
      <div class="accept-pay">
        <div class="pay-image">
          <img src="./images/payments.png" alt="">
        </div>
      </div>
    </div>
    <div class="socials">


      <!-- <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li> -->

      <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
      <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
      <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>

    </div>

    <p class="copy">&copy; BookHouse | All rights Reserved 2022</p>

  </footer>






  <!-------------------------- Scripts------------------- -->
  <script>
  $('.li-btn span').click(function() {
    $('.nav-links').toggleClass("show");
    $('li.btn span').toggleClass("show");
  });
  </script>

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <script src="./app.js"></script>
</body>

</html>
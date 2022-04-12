<?php
include_once './db.inc.php';
include './header.inc.php';
include './functions.inc.php';
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

  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

  <!-- -------------Navigation------------------- -->
  <nav>
    <ul>
      <li class="logo"><a href="./index.php">BookHouse</a></li>
      <li class="li-btn"><span class="fas fa-bars"></span></li>
      <div class="nav-links">
        <li><a href="./index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="./review.php">Reviews</a></li>
        <li><a href="#">Contact</a></li>


        <li><a href="./login.php">Login</a></li>



      </div>

      <div class="nav-right">

        <li class="search-icon">
          <input type="search" placeholder="Search">

          <label class="s-icon">

            <span class="fas fa-search"></span>

          </label>
        </li>
        <li class="list-item" id="list-item"><i class="fas fa-user"></i>


          <ul class="nav-drop-menu">
            <div class="center">
              <h1>Login</h1>


              <!-- <form class="login-form" action="./login.inc.php" method="post">
                <label>Email</label>
                <input type="text" name="uid" placeholder="Username or Email">
                <label>Password</label>
                <input type="password" name="pwd" placeholder="Password">
                <a href="./index.php">
                  <input class="login-btn" type="submit" name="submit"></input>
              </form> -->
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
                  Not a member? <a href="./signup-page.php">Signup</a>
                </div>
              </form>



            </div>
          </ul>

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

  <!-- Signup Form -->


  <section class="signup">
    <div class="signup-box">
      <h1 class="signup-title">Sign Up</h1>
      <h4 class="signup-sub">Its Free and only takes a minute!</h4>
      <form class="su-form" action="signup.inc.php" method="POST">
        <label>First Name</label>
        <input type="text" name="first" placeholder="">
        <label>Last Name</label>
        <input type="text" name="last" placeholder="">
        <label>Email</label>
        <input type="email" name="email" placeholder="">
        <label>Username</label>
        <input type="text" name="uid" placeholder="">
        <label>Password</label>
        <input type="password" name="pwd" placeholder="">
        <label>Confirm Password</label>
        <input type="password" name="pwdrepeat" placeholder="">
        <a href="./index.php">
          <input class="login-btn" type="submit" name="submit"></input><a />


      </form>
      <p>By clicking the signup button you agree to our T's & C's.</p>
      <p class="tc" href="#">Terms & Conditions</p>
    </div>
    <div class="form-info">
      <p class="para-2">Already have an account?</p> <a class="para-2-link" href="./login.php">Login Here</a>
    </div>

    <div class="error-box">

      <?php
      // Error messages
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo '<div style="font-size:24px;color:red;font-weight:500;letter-spacing:2px;">Fill in All Fields! </div>';
        } else if ($_GET["error"] == "invaliduid") {
          echo '<div style="font-size:20px;color:red;font-weight:500;letter-spacing:2px;">Choose another username! </div>';
        } else if ($_GET["error"] == "invalidemail") {
          echo '<div style="font-size:20px;color:red;font-weight:500;letter-spacing:2px;">Invalid Email </div>';
        } else if ($_GET["error"] == "passwordsdontmatch") {
          echo '<div style="font-size:20px;color:red;font-weight:500;letter-spacing:2px;">Passwords dont match! </div>';
        } else if ($_GET["error"] == "stmtfailed") {
          echo '<div style="font-size:20px;color:red;font-weight:500;letter-spacing:2px;">Something went wrong! </div>';
        } else if ($_GET["error"] == "usernametaken") {
          echo '<div style="font-size:20px;color:red;font-weight:500;letter-spacing:2px;">Username already taken! </div>';
        } else if ($_GET["error"] == "emailtaken") {
          echo '<div style="font-size:20px;color:red;font-weight:bold;">Email already taken! </div>';
        } else if ($_GET["error"] == "none") {
          echo '<div style="font-size:20px;color:white;font-weight:500;letter-spacing:2px;">You have Signed up! </div>';
        }
      }
      ?>
    </div>
  </section>


  <!-- Sign Up Form -->

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
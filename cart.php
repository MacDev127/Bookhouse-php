<?php
include_once './db.inc.php';
include './header.inc.php';

session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
  if (!empty($_SESSION["shopping_cart"])) {
    foreach ($_SESSION["shopping_cart"] as $key => $value) {
      if ($_POST["code"] == $key) {
        unset($_SESSION["shopping_cart"][$key]);
        $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if (empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
    }
  }
}

if (isset($_POST['action']) && $_POST['action'] == "change") {
  foreach ($_SESSION["shopping_cart"] as &$value) {
    if ($value['code'] === $_POST["code"]) {
      $value['quantity'] = $_POST["quantity"];
      break; // Stop the loop after we've found the product
    }
  }
}

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







  <div class="cart">
    <?php
    if (isset($_SESSION["shopping_cart"])) {
      $total_price = 0;
    ?>
    <table class="table">
      <tbody>
        <tr>
          <td></td>
          <td>ITEM NAME</td>
          <td>QUANTITY</td>
          <td>UNIT PRICE</td>
          <td>ITEMS TOTAL</td>
        </tr>
        <?php
          foreach ($_SESSION["shopping_cart"] as $product) {
          ?>
        <tr>
          <td>
            <img src='<?php echo $product["image"]; ?>' width="50" height="40" />
          </td>
          <td><?php echo $product["name"]; ?><br />
            <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
              <input type='hidden' name='action' value="remove" />
              <button type='submit' class='remove'>Remove Item</button>
            </form>
          </td>
          <td>
            <form method='post' action=''>
              <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
              <input type='hidden' name='action' value="change" />
              <select name='quantity' class='quantity' onChange="this.form.submit()">
                <option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
                <option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
                <option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
                <option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
                <option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
              </select>
            </form>
          </td>
          <td><?php echo "$" . $product["price"]; ?></td>
          <td><?php echo "$" . $product["price"] * $product["quantity"]; ?></td>
        </tr>
        <?php
            $total_price += ($product["price"] * $product["quantity"]);
          }
          ?>
        <tr>
          <td colspan="5" align="right">
            <strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
          </td>
        </tr>
      </tbody>
    </table>
    <?php
    } else {
      echo "<h3>Your cart is empty!</h3>";
    }
    ?>
  </div>

  <div style="clear:both;"></div>

  <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
  </div>



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
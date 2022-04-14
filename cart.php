<?php

include_once './db.inc.php';
include './header.inc.php';
session_start();


if (isset($_POST['add_to_cart'])) {

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = ''") or die('query failed');

  if (mysqli_num_rows($select_cart) > 0) {
    $message[] = 'product already added to cart!';
  } else {
    mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
    $message[] = 'product added to cart!';
  }
};

if (isset($_POST['update_cart'])) {
  $update_quantity = $_POST['cart_quantity'];
  $update_id = $_POST['cart_id'];
  mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
  $message[] = 'cart quantity updated successfully!';
}

if (isset($_GET['remove'])) {
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
  header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
  mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
  header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shopping cart</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

  <?php
  if (isset($message)) {
    foreach ($message as $message) {
      echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
    }
  }
  ?>

  <!-- -------------Navigation------------------- -->
  <nav>
    <ul>
      <li class="logo"><a href="./index.php">BookHouse</a></li>
      <li class="li-btn"><span class="fas fa-bars"></span></li>
      <div class="nav-links">
        <li><a href="./index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="./review.php">Reviews</a></li>
        <li><a href="./">Cart</a></li>


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
            <a href="./cart.php"> <i class="fas fa-shopping-cart"></i></a>
          </div>
          <div class="cart-badge"><span id="cart-count">0</span></div>
          <div class="box" id="box">

          </div>
        </div>


      </div>
    </ul>

  </nav>
  <!-- ------------------Navigation End------------ -->

  <section class="cart-page">



    <div class="products">

      <h1 class="title">Best Sellers</h1>

      <div class="box-container">

        <?php
        $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
        if (mysqli_num_rows($select_product) > 0) {
          while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        <form method="post" class="cart-box" action="">
          <img src="images/<?php echo $fetch_product['image']; ?>" alt="">
          <div class="name"><?php echo $fetch_product['name']; ?></div>
          <div class="price">£<?php echo $fetch_product['price']; ?></div>
          <input type="number" min="1" name="product_quantity" value="1">
          <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
          <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
          <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">

          <button class="cart-btn" type="submit" name="add_to_cart" value="add to cart">Add to Cart<span> <i
                class="fa-solid fa-cart-shopping"></i></span></button>
        </form>
        <?php
          };
        };
        ?>

      </div>

    </div>

    <div class="shopping-cart">

      <h1 class="title">shopping cart</h1>

      <table>
        <thead>
          <th>image</th>
          <th>name</th>
          <th>price</th>
          <th>quantity</th>
          <th>total price</th>
          <th>action</th>
        </thead>
        <tbody>
          <?php
          $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = ''") or die('query failed');
          $grand_total = 0;
          if (mysqli_num_rows($cart_query) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
          ?>
          <tr>
            <td><img src="images/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>£<?php echo $fetch_cart['price']; ?></td>
            <td>
              <form action="" method="post">
                <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                <!-- <input type="submit" name="update_cart" value="update" class="option-btn"> -->
                <button class="option-btn" type="submit" name="update_cart" value="update">Update Cart</button>
              </form>
            </td>
            <td>£<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="./cart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"
                onclick="return confirm('Remove Item from Cart?');">Remove<span> <i
                    class="fa-solid fa-trash"></i></span></a></td>
          </tr>
          <?php
              $grand_total += $sub_total;
            }
          } else {
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
          }
          ?>
          <tr class="table-bottom">
            <td colspan="4">grand total :</td>
            <td>£<?php echo $grand_total; ?></td>
            <td><a href="./cart.php?delete_all" onclick="return confirm('delete all from cart?');"
                class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Delete All <span><i
                    class="fa-solid fa-trash"></i></span></a></td>
          </tr>
        </tbody>
      </table>

      <div class="checkout-btn">
        <a href="#" class="check-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to Checkout <i
            class="fa-solid fa-basket-shopping"></i></a>
      </div>

    </div>

    </sec>
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




        <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a>

      </div>

      <p class="copy">&copy; BookHouse | All rights Reserved 2022</p>

    </footer>

</body>

</html>
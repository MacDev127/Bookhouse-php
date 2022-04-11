<?php
session_start();


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

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>


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


        <li><a href="#">Login</a></li>



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




  <!-- --------------Banner Section----------------------------- -->

  <section class="banner">

    <div class="banner-box">

      <div class="banner-content">
        <h3>J.K Rowling</h3>
        <h4>The Complete Collection</h4>
        <p>J.K Rowling is one of the worlds bestselling authors, all thanks to her books – the Harry Potter series,
          which announced her to the world and made her a household name. Today, the series is one of the
          highest-grossing books in history.
          And since the inception of her career, J K Rowling has won multiple awards and has sold over 500 million
          copies of her books, thus cementing her status as the first world’s billionaire author. </p>
        <div class="banner-button">
          <button class="banner-btn">Shop Now</button>
        </div>
      </div>


      <div class="banner-image">
        <img src="./images/hg-logo.png" alt="">

      </div>

    </div>

  </section>

  <!-- --------------Banner Section End----------------------------- -->


  <!-- -------------------featured section--------------  -->

  <section class="featured">



    <h1 class="title">Featured Books </h1>



    <div class="swiper featured-slider">

      <div class="swiper-wrapper">


        <!-- -----------------------Test End ---------------->

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f1.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Cursed Child</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>




            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>

          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f2.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The IckaBog</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£9.00</p>
            </div>

            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>

          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f3.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Tales of Beedle the Bard</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£10.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f4.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">Fantastic Beasts</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f5.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Crimes of GrindleWald</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£10.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f6.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Christmas Pig</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£9.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/f7.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">Quidditch Through the Ages</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>






      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!-- -------------------featured section End--------------  -->





  <div class="delivery">
    <div class="free-icon">
      <i class="fa-solid fa-truck"></i>
      <p> Free Delivery on Orders over £15</p>
    </div>
  </div>

  <!----------------- Latest Section----------------------------- -->
  <section class="latest">

    <h1 class="title"> New Releases</h1>


    <div class="swiper featured-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/harry-potter-olly-moss-chamber-of-secrets-404x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Chamber of Secrets</h4>

            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="images/harry-potter-olly-moss-deathly-hallows-400x600.jpg" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Deathly Hallows</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="imageS/harry-potter-olly-moss-goblet-of-fire-406x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Goblet of Fire</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="images/harry-potter-olly-moss-half-blood-prince-407x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Half Blood Prince</h4>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="images/harry-potter-olly-moss-order-of-the-phoenix-411x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">Order of the Phoenix</h4>

            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="images/harry-potter-olly-moss-philosophers-stone-400x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Philosophers Stone</h4>

            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="images/harry-potter-olly-moss-prisoner-of-azkaban-409x600.png" alt="">
          </div>
          <div class="content">
            <h4 class="book-title">The Prisoner of Azkaban</h4>

            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>






      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>


  </section>
  <!----------------- Latest Section End----------------------------- -->

  <!-- Service offer boxes -->
  <div class="service-offer">
    <div class="offer">
      <i class="fa-solid fa-truck"></i>
      <h3 class="offer-title">Free Delivery</h3>
      <p>On Orders Over £15</p>

    </div>
    <div class="offer">
      <i class="fa-solid fa-clock"></i>
      <h3 class="offer-title">Fast Dispatch</h3>
      <p>On All Titles!</p>

    </div>
    <div class="offer">
      <i class="fa-solid fa-sterling-sign"></i>
      <h3 class="offer-title">Top Savings</h3>
      <p>Exclusive Online Prices</p>

    </div>

  </div>

  <!-- <-- Service offer boxes end --> -->

  <!---------------------------------------- Best sellers section----------------- -->
  <section class="best-sell">

    <h1 class="title">Best Sellers </h1>
    <h3 class="sub-title">The Harry Potter Series</h3>

    <div class="swiper featured-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b1.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b2.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b3.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b4.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b5.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b6.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>

        <div class="swiper-slide box">

          <div class="image">
            <img src="./images/b7.png" alt="">
          </div>
          <div class="content">
            <h3>featured books</h3>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half-stroke"></i>

              <p>£8.00</p>
            </div>
            <button id="btn-add">Add to Cart<i class="fa-solid fa-cart-shopping"></i></button>
          </div>
        </div>






      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>
  <!---------------------------------------- Best sellers section----------------- -->



  <!-- For all products page -->


  <!-- <div class="container">
    <h2 class="title">Latest Collection</h2>
    <h4 class="sub-title">The Wizarding World</h4>
    <div class="row-area">
      <div class="col-4">
        <img src="./images/b4.png" alt="">

        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <p>£30.00</p>
          <a href="#" class="btn">Add to Cart<i class="fa-solid fa-cart-shopping" id="btn-cart"></i></a>
        </div>
      </div>
      <div class="col-4">
        <img src="./images/b2.png" alt="">

        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <p>£40.00</p>
          <a href="#" class="btn">Add to Cart<i class="fa-solid fa-cart-shopping" id="btn-cart"></i></a>
        </div>
      </div>
      <div class="col-4">
        <img src="./images/b5.png" alt="">

        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <p>£20.00</p>
          <a href="#" class="btn">Add to Cart<i class="fa-solid fa-cart-shopping" id="btn-cart"></i></a>
        </div>
      </div>
      <div class="col-4">
        <img src="./images/b3.png" alt="">

        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <p>£30.00</p>
          <a href="#" class="btn">Add to Cart<i class="fa-solid fa-cart-shopping" id="btn-cart"></i></a>
        </div>
      </div>
      <div class="col-4">
        <img src="./images/b7.png" alt="">

        <div class="rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
          <p>£30.00</p>
          <a href="#" class="btn">Add to Cart<i class="fa-solid fa-cart-shopping" id="btn-cart"></i></a>
        </div>
      </div>
  
    </div> -->
  <!-- ----------For all products page---------------------------------------- -->




  <section class="testimonials">

    <div class="title">
      Readers Reviews
    </div>

    <div class="test-container">

      <div class="test-box">

        <div class="box-top">

          <div class="profile">
            <div class="profile-img">

              <img src="">
            </div>

            <div class="name-user">

            </div>


          </div>
          <div class="test-review"></div>
        </div>
      </div>

    </div>

  </section>


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
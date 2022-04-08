<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  require_once "db.inc.php";
  require_once 'functions.inc.php';

  // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($first, $last, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ./signup-page.php?error=emptyinput");
    exit();
  }
  // Proper username chosen
  if (invalidUid($uid) !== false) {
    header("location: ./signup-page.php?error=invaliduid");
    exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ./signup-page.php?error=invalidemail");
    exit();
  }
  // Do the two passwords match?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ./signup-page.php?error=passwordsdontmatch");
    exit();
  }
  // Is the username taken already
  if (uidExists($conn, $username) !== false) {
    header("location: ./signup-page.php?error=usernametaken");
    exit();
  }
  if (uidExists($conn, $email) !== false) {
    header("location: ./signup-page.php?error=emailtaken");
    exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  createUser($conn, $first, $last, $email, $username, $pwd);
} else {
  header("location: ./signup-page.php");
  exit();
}





//---------------------- Do Not Delete---------------------------//

// $sql = "INSERT INTO `users` ( `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES ( '$first', '$last', '$email', '$uid', '$pwd');";
// mysqli_query($conn, $sql);

// header("Location: ./index.php?signup=success");

// $first = $_POST['first'];
// $last = $_POST['last'];
// $email = $_POST['email'];
// $uid = $_POST['uid'];
// $pwd = $_POST['pwd'];


// $sql = "INSERT INTO `users` ( `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES ( '$first', '$last', '$email', '$uid', '$pwd');";
// mysqli_query($conn, $sql);

// header("Location: ../cart.php?signup=success");

// $first = $_POST['first'];
// $last = $_POST['last'];
// $email = $_POST['email'];
// $rating = $_POST['rating'];
// $review = $_POST['review'];
// $date = $_POST['Review_date'];

// $sql = "INSERT INTO `review-test` ( `First_name`, `Last_name`, `Customer_email`, `Rating`, `Review`) VALUES ($first, $last, $email, $rating, $review);";
// mysqli_query($conn, $sql);

// header("Location: ./index.php?review=success");
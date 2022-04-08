<?php

if (isset($_POST["submit"])) {


  // include_once './db.inc.php';

  // First we get the form data from the URL


  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $bookname = $_POST['bookname'];
  $grade = $_POST['grade'];
  $review = $_POST['review'];

  // Run error handlers to catch any user mistakes

  require_once 'db.inc.php';
  require_once 'functions.inc.php';

  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ./review.php?error=invalidemail");
    exit();
  }





  // $sql = "INSERT INTO `review` ( `first_name`, `last_name`, `customer_email`, `bookname`, `grade`,`review`) VALUES ('$first', '$last', '$email', '$bookname', '$grade', '$review');";
  // mysqli_query($conn, $sql);

  createReview($conn, $first, $last, $email, $bookname, $grade, $review);
} else {
  header("location: ./review.php");
  exit();


  header("Location: ./review.php?review=success");
}



















 //---------------------- Do Not Delete---------------------------//

// $sql = "INSERT INTO `users` ( `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES ( '$first',
// '$last', '$email', '$uid', '$pwd');";
// // mysqli_query($conn, $sql);

// // header("Location: ./index.php?signup=success");

// e'];// $first = $_POST['first'];
// // $last = $_POST['last'];
// // $email = $_POST['email'];
// // $uid = $_POST['uid'];
// // $pwd = $_POST['pwd'];


// // $sql = "INSERT INTO `users` ( `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES ( '$first',
// '$last', '$email', '$uid', '$pwd');";
// // mysqli_query($conn, $sql);

// // header("Location: ../cart.php?signup=success");

// $first = $_POST['first'];
// $last = $_POST['last'];
// $email = $_POST['email'];
// $rating = $_POST['rating'];
// $review = $_POST['review']; -->
// // $date = $_POST['Review_dat
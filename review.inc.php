<?php

if (isset($_POST["submit"])) {


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


  createReview($conn, $first, $last, $email, $bookname, $grade, $review);
} else {
  header("location: ./review.php");
  exit();


  header("Location: ./review.php?review=success");
}

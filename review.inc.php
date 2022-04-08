<?php

include_once './db.inc.php';



$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$review = $_POST['review'];



$sql = "INSERT INTO `review` ( `first_name`, `last_name`, `customer_email`, `rating`, `review`) VALUES ('$first', '$last', '$email', '$rating', '$review');";
mysqli_query($conn, $sql);

header("Location: ./review.php?review=success");





















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
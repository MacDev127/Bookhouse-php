<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // We then run error handlers to catch any user mistakes


  require_once 'db.inc.php';
  require_once 'functions.inc.php';

  // Left inputs empty
  if (emptyInputLogin($username, $pwd) !== false) {
    header("location: ./login.php?error=emptyinput");
    exit();
  }

  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  loginUser($conn, $username, $pwd);
} else {
  header("location: ./login.php");
  exit();
}
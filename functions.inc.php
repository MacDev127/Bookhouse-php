<?php


// Check for empty input signup
function emptyInputSignup($first, $last, $email, $username, $pwd, $pwdRepeat)
{
  $result = "";
  if (empty($first) || empty($last) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

// Check invalid username
function invalidUid($username)
{
  $result = "";
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

// Check invalid email
function invalidEmail($email)
{
  $result = "";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

// Check if passwords matches
function pwdMatch($pwd, $pwdrepeat)
{
  $result = "";
  if ($pwd !== $pwdrepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

// Check if username is in database, if so then return data
function uidExists($conn, $username)
{
  $sql = "SELECT * FROM users WHERE user_uid = ? OR user_email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./signup-page.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $username);
  mysqli_stmt_execute($stmt);

  // "Get result" returns the results from a prepared statement
  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

// Insert new user into database
function createUser($conn, $first, $last, $email, $username, $pwd)
{
  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";

  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./signup-page.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  header("location: ./signup-page.php?error=none");


  exit();
}




function createReview($conn, $first, $last, $email, $bookname, $grade, $review)
{
  $sql = "INSERT INTO review (first_name, last_name, customer_email, bookname, grade, review) VALUES (?, ?, ?, ?, ?, ?);";

  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./review.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "ssssss", $first, $last, $email, $bookname, $grade, $review);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  header("location: ./success.php?success=review_created");


  exit();
}

// Check for empty input login
function emptyInputLogin($username, $pwd)
{
  $result = "";
  if (empty($username) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}



// Log user into website
function loginUser($conn, $username, $pwd)
{
  $uidExists = uidExists($conn, $username);

  if ($uidExists === false) {
    header("location: ./index.php?success=loggedin");
    exit();
  }

  $pwdHashed = $uidExists["user_pwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ./index.php?success=loggedin");
    exit();
  } elseif ($checkPwd === true) {
    session_start();
    $_SESSION["user_id"] = $uidExists["user_id"];
    $_SESSION["user_uid"] = $uidExists["user_uid"];
    header("location: ./index.php?success=loggedin");
    exit();
  }
}
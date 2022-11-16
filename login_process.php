<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Remember pass word check on
if (isset($_POST['remember'])) {
  $remember = true;
} else {
  $remember = false;
}

// connect DB
require 'connect.php';
$sql = "select * from users where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$num_rows = mysqli_num_rows($result);

if ($num_rows == 1) {
  // Session save
  session_start();
  $each = mysqli_fetch_array($result);
  $id = $each['id'];
  $_SESSION['id'] = $id;
  $_SESSION['name'] = $each['name'];

  // Set cookie
  if ($remember) {
    $token = uniqid('user_', true);
    $sql = "update users set token = '$token' where id = '$id'";
    mysqli_query($connect, $sql);

    setcookie('remember', $token, time() + 30 * 24 * 60 * 60);
  }

  header('location:user.php');
} else {
  header('location:login.php?error= Your email or password was incorrect!');
}

mysqli_close($connect);
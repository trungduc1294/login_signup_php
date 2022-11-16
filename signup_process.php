<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'connect.php';

// Check email exits
$sql = "select count(*) from users where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
  header('location:signup.php?error= This email has been exits!');
  exit;
}

$sql = "insert into users(name, email, password) value ('$name', '$email', '$password')";
mysqli_query($connect, $sql);

header('location:login.php');

mysqli_close($connect);
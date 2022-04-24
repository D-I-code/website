

<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

$name = $surname = $email = $comment = " ";
$nameErr = $surnameErr = $emailErr = $commentErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  if (empty($_POST["name"])) {
    $nameErr = " Name required.";
  } else {
    echo $name;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $surname = $_POST["surname"];
  if (empty($_POST["surname"])) {
    $surnameErr = " Surname required.";
  } else {
    echo $surname;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  if (empty($_POST["email"])) {
    $emailErr = " Email required.";
  } else {
    echo $email;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comment = $_POST["comment"];
  if (empty($_POST["comment"])) {
    $commentErr = " Comment required.";
  } else {
    echo $comment;
  }
}


$success = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"]) && !empty($_POST["comment"])) {
    $success = "<h2 style='background-color:rgb(8, 196, 64);color:white;'>Application submitted.</h2>";
  } else {
    $success = "<h2 style='background-color:Red;color:white;'>Please try again.</h2>";
  }
}


?>

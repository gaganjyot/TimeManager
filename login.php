<?php

session_start();
if(isset($_SESSION["user_"])) {
    header("Location: home.php");
}

// DB settings
include("db.php");

// Values posted from html form
$username = $_POST['username'];
$password = $_POST['password'];

// select a collection (analogous to a relational database's table)
$collection = $db->users;

// Array values to be retrieved from the database
$user_vals = array("username" => $username, "password" => $password);

// Query ^_^
$cursor = $collection->findOne($user_vals);

if ( $cursor ) {
  $_SESSION["user_"] = $cursor["username"];
  header("Location: home.php");
} else {
    header("Location: index.html");
}

?>
<?php

include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

// select a collection (analogous to a relational database's table)
$collection = $db->users;

// Values to be inserted
$user_info = array("username" => $username, "password" => $password);

// Query ^_^
$cursor = $collection->insert($user_info);

?>

<center>
<h1> Thankyou For Registering <h1>
<h2><a href = "index.html">login</a></h2>
</center>
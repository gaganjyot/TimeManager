<?php

include("db.php");

session_start();
if(!isset($_SESSION["user_"])) {
    header("Location: index.html");
}

// select a collection (analogous to a relational database's table)
$collection = $db->time;

$username = $_SESSION["user_"];
$task_name = $_POST['task_name'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];

// Array values to be retrieved from the database
$user_vals = array("username" => $username, "task_name" => $task_name, "start_time" => $start_time, "end_time" => $end_time);

// Query ^_^
$cursor = $collection->insert($user_vals);

?>
11<html>
<head>
<title>Task Added</title>
</head>
<body>
<center>
<h1>Task added Successfully </h1>
<a href = "add_task.html"> Add More Task </a><br>
<a href = "list_tasks.php"> List All Tasks </a><br>
<a href = "logout.php" > Logout</a>
</center>
</body>
</html>

<?php

include("db.php");

session_start();
if(!isset($_SESSION["user_"])) {
    header("Location: index.html");
}

// select a collection (analogous to a relational database's table)
$collection = $db->time;

$username = $_SESSION["user_"];

// Array values to be retrieved from the database
$user_vals = array("username" => $username);

// Query ^_^
$cursor = $collection->find($user_vals);
?>

<html>
<head>
<title>ALL Tasks</title>
</head>
<body>
<a href = "logout.php" > Logout</a>
<center>
<a href = "add_task.html"> Add More Task </a><br>
<a href = "list_tasks.php"> List All Tasks </a><br>
</center>
</body>
</html>

<?php
echo '<center><table border=1>';
echo '<tr><td>Task Name</td><td>Start Time </td><td> End Time </td></tr>';
foreach ($cursor as $doc) {
  echo '<tr><td>'. $doc['task_name'] . '</td><td>'. $doc['start_time'] .
  '</td><td>'.$doc['end_time'].'</td></tr>';
}
echo '</table></center>';
?>


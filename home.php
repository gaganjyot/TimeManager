<?php

session_start();

// Check session and if passes, display add task and view list options
if (isset($_SESSION["user_"])) {
  echo '<center>';
  echo '<h1>Welcome Back!<br>' . $_SESSION["user_"]. '</h1><BR>';
  echo '<a href="add_task.html"> Add a New Task</a>';
  echo '<BR>';
  echo '<a href="list_tasks.php"> List all the tasks </a>';
  echo '<BR>';
  echo '<a href = "logout.php" > Logout</a>';
  echo '</center>';
} else {
  echo "Please Login";
  header("Location: index.html");
}
?>

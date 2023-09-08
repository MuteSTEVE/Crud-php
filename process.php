<?php
  $home = ' <a href="index.php">Home</a>';

  if(isset($_POST['action'])) {
    echo $_POST['action'] && $_POST['action'] == 'insert' ? 'Insert data' . $home : 'Edit data' . $home;
  }

  if(isset($_GET['delete'])) {
    echo "Delete data <a href='index.php'>Home</a>";
  }
?>

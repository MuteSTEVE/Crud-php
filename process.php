<?php
  $home = ' <a href="index.php">Home</a>';

  $insert = 'Insert data'; 
  $edit = 'Edit data'; 
  $delete = 'Delete data';

  echo isset($_POST['action']) ? $insert . $home : $edit . $home;
  echo isset($_GET['delete']) ? $delete . $home : '';
?>

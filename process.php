<?php
  $home = ' <a href="index.php">Home</a>';

  if(isset($_POST['action'])) {
    echo $_POST['action'] && $_POST['action'] == 'insert' ? 'Insert data' . $home : 'Edit data' . $home;
  }

  if(isset($_GET['delete'])) {
    echo "Delete data <a href='index.php'>Home</a>";
  }

  // form.php
  $floppy = ' <i class="fa-solid fa-floppy-disk"></i>';
  $plane = ' <i class="fa-solid fa-paper-plane"></i>';

  $value = isset($_GET['edit']) ? 'Edit' : 'Insert';
  $text = isset($_GET['edit']) ? 'Save Changes ' . $floppy : 'Submit ' . $plane;
?>

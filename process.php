<?php
  $home = ' <a href="index.php">Home</a>';

  switch($_POST['action']) {
    case 'insert':
      echo 'Insert data' . $home;
      break;
    case 'edit':
      echo 'Edit data' . $home;
      break;
  }

  if(isset($_GET['delete'])) {
    echo 'Delete data' . $home;
  }

  isset($_GET['delete']) == 'delete' ? 'Delete' . $home : '' ;

  // form.php
  $floppy = ' <i class="fa-solid fa-floppy-disk"></i>';
  $plane = ' <i class="fa-solid fa-paper-plane"></i>';

  $value = isset($_GET['edit']) ? 'edit' : 'insert';
  $text = isset($_GET['edit']) ? 'Save Changes ' . $floppy : 'Submit ' . $plane;
?>

<?php
  // Insert and Edit
  if(isset($_POST['action'])) {
    if($_POST['action'] == "insert") {
      echo "Insert data <a href='koneksi.php'>Home</a> ";
    }else if($_POST['action'] == "edit") {
      echo "Edit data <a href='koneksi.php'>Home</a> ";
    }
  }

  // Delete
  if(isset($_GET['delete'])) {
    echo "Delete data <a href='koneksi.php'>Home</a>";
  }
?>

<?php
  if(isset($_POST['action'])) {
    if($_POST['action'] == "insert") {
      echo "Insert data";
    }else if($_POST['action'] == "edit") {
      echo "Edit data";
    }
  }
?>

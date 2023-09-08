<?php
  $host = 'localhost';
  $dbname = 'operator';
  $user = 'root';
  $password = 'root';

  $success = '<br><p class="text-center">Connected to PRTS neural network</p>';
  $failed = '<p class="text-center">failed</p>';

  $connection = mysqli_connect($host, $user, $password, $dbname);
  $status = ($connection) ? $success : $failed;
?>

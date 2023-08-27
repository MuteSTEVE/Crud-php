<?php
  $host = 'localhost';
  $dbname = 'operator';
  $user = 'postgres';
  $password = 'postgres';

  $connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");
  $status = ($connection) ? "<h1>Koneksi terhubung</h1>" : "<h1>Gagal</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Koneksi.php</p>    
  <hr>
  <?php
    echo $status;
  ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Koneksi.php</p>    
  <hr>
  <?php
    $host = 'localhost';
    $dbname = 'operator';
    $user = 'postgres';
    $password = 'postgres';

    $connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");
    if ($connection) {
      echo "<h1>Koneksi Terhubung</h1>";
    }
    else {
      echo "<h1>Gagal</h1>";
    }
  ?>
</body>
</html>

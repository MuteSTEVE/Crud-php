<?php
  $host = 'localhost';
  $dbname = 'operator';
  $user = 'postgres';
  $password = 'postgres';

  $connection = pg_connect("host=$host dbname=$dbname user=$user password=$password");
  $status = ($connection) ? "<p>Koneksi terhubung<p>" : "<p>Gagal<p>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
  </head>
  <body>
    <div class="container">
      <?php
        echo $status;
      ?>
      <hr>

      <div class="d-flex justify-content-between">
        <p>Arknights operator record</p>
        <button type="button" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus"></i> Add record</button>
      </div>
      <br>

      <div class="table-responsive">
        <table class="text-center table table-striped table-hover">
          <thead>
            <tr class="table-dark">
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">Gender</th>
              <th scope="col">Height</th>
              <th scope="col">Faction</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Magallan</td>
              <td></td>
              <td>Female</td>
              <td>160 cm</td>
              <td>Rhine lab</td>
              <td>October 7</td>
              <td>
                <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Gummy</td>
              <td></td>
              <td>Female</td>
              <td>155 cm</td>
              <td>Ursus</td>
              <td>October 2</td>
              <td>
                <button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </body>
</html>

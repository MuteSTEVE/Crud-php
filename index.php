<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="js/script.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
  </head>
  <body>
    <main class="bg-img">
      <nav class="bg-dark text-center navbar ">
        <div class="container-fluid d-flex justify-content-center">
          <span class="text-light navbar-brand mb-0 h1"><i class="fa-solid fa-chess-rook"></i> Arknights operator record collection</span>
        </div>
      </nav>
      <br>
      <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Home</a></li>
          </ol>
        </nav>
        <hr>

        <div class="container">
          <div class="row">
            <div class="col-6">
              <p>Arknights operator record</p>
            </div>
            <div class="col-6 text-end">
              <a href="form.php" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus"></i> Add record</a>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table id="example" cellspacing="0" width="100%" class="table table-striped table-hover">
            <thead>
              <tr class="table-dark text-center">
                <th scope="col">No</th>
                <th scope="col">Codename</th>
                <th scope="col">Class</th>
                <th scope="col">Image</th>
                <th scope="col">Rarity</th>
                <th scope="col">Gender</th>
                <th scope="col">Race</th>
                <th scope="col">Height</th>
                <th scope="col">Birth</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Magallan</td>
                <td>Supporter</td>
                <td></td>
                <td>6</td>
                <td>Female</td>
                <td>Liberi</td>
                <td>160 cm</td>
                <td>October 7</td>
                <td>
                  <a href="form.php?edit=1" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="process.php?delete=1" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Gummy</td>
                <td>Defender</td>
                <td></td>
                <td>4</td>
                <td>Female</td>
                <td>Ursus</td>
                <td>155 cm</td>
                <td>October 2</td>
                <td>
                  <a href="form.php?edit=2" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="process.php?delete=2" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </main>
  </body>
</html>

<?php
  include('connection.php');

  $query = "SELECT * FROM operator";
?>

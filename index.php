<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    bg-img {
      position: relative;
    }

    bg-img::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("img/bg_bridge.png");
      background-size: cover;
      background-position: center;
      filter: blur(5px); /* Add blur effect to the pseudo-element */
      z-index: -1; /* Send the pseudo-element to the background */
      margin: 0; /* Set margin to 0 */
      padding: 0; /* Set padding to 0 */
    }
    </style>
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
          <table class="text-center table table-striped table-hover">
            <thead>
              <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Codename</th>
                <th scope="col">Image</th>
                <th scope="col">Gender</th>
                <th scope="col">Race</th>
                <th scope="col">Height</th>
                <th scope="col">Place</th>
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
                <td>Liberi</td>
                <td>160 cm</td>
                <td>Columbia</td>
                <td>October 7</td>
                <td>
                  <a href="form.php?edit=1" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="process.php?delete=1" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Gummy</td>
                <td></td>
                <td>Female</td>
                <td>Ursus</td>
                <td>155 cm</td>
                <td>Ursus</td>
                <td>October 2</td>
                <td>
                  <a href="form.php?edit=2" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="process.php?delete=2" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

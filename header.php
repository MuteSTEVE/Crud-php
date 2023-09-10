<?php
  $arrow = isset($_GET['edit']) ? 'Edit record' : (isset($_GET['insert']) ? 'Insert record' : '');
  $title = isset($_GET['edit']) ? 'Edit record' : (isset($_GET['insert']) ? 'Insert record' : 'Index');

  $nav = '
    <nav class="bg-dark text-center navbar ">
    <div class="container-fluid d-flex justify-content-center">
    <span class="text-light navbar-brand mb-0 h1"><i class="fa-solid fa-chess-rook"></i> Arknights operator record collection</span>
    </div>
    </nav>
  ';

  $breadcrumb = '
    <br>
    <nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" style="text-decoration: none;">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">' . $arrow . '</li>
      </ol>
    </nav>
    <hr>
  ';

  $cdn = '
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  ';
?>

<?php
  include('connection.php');
  $query = "SELECT * FROM operator";
  $sql = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($sql);

  $arrow = isset($_GET['edit']) ? 'Edit record' : (isset($_GET['insert']) ? 'Insert record' : '');

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
?>

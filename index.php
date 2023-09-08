<?php
  include('connection.php');

  $query = "SELECT * FROM operator";
  $sql = mysqli_query($connection, $query);
  $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
        $('#example').DataTable();
      } );
    </script>

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
              <h5 class="font-italic"><i class="fa-solid fa-box-archive"></i> Arknights operator record</h5>
            </div>
            <div class="col-6 text-end">
              <a href="form.php" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus"></i> Add record</a>
            </div>
          </div>
        </div>
        <br>

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
              <?php
                $sql = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($sql)) {
              ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['codename']; ?></td>
                <td><?= $row['class']; ?></td>
                <td><?= $row['image']; ?></td>
                <td><?= $row['rarity']; ?></td>
                <td><?= $row['gender'] == 1 ? 'Male' : 'Female' ?></td>
                <td><?= $row['race']; ?></td>
                <td><?= $row['height']; ?> cm</td>
                <td><?= $row['birth']; ?></td>
                <td>
                  <a href="form.php?edit=<?= $row['id'] ?>" type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="process.php?delete=<?= $row['id'] ?>" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>

      </div>
    </main>
  </body>
</html>
<?= $status ?>

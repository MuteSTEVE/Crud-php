<?php
  include('connection.php');
  include('header.php');

  $query = "SELECT * FROM operator";
  $sql = mysqli_query($connection, $query);
  $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <?= $cdn ?>
    <script>
    $(document).ready( function () {
      $('#example').DataTable();
    } );
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
  </head>
  <body>
    <?= $nav ?>
    <div class="container">
      <?= $breadcrumb ?>

      <div class="container">
        <div class="row">
          <div class="col-6">
            <h5 class="font-italic"><i class="fa-solid fa-box-archive"></i> Arknights operator record</h5>
          </div>
          <div class="col-6 text-end">
            <a href="form.php?insert" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus"></i> Add record</a>
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
              <th scope="col">Image</th>
              <th scope="col">Class</th>
              <th scope="col">Rarity</th>
              <th scope="col">Gender</th>
              <th scope="col">Race</th>
              <th scope="col">Height</th>
              <th scope="col">Birth</th>
              <th scope="col">Faction</th>
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
              <td><?= $row['image']; ?></td>
              <td><?= $row['class']; ?></td>
              <td><?= $row['rarity']; ?></td>
              <td><?= $row['gender'] == 1 ? 'Male' : 'Female' ?></td>
              <td><?= $row['race']; ?></td>
              <td><?= $row['height']; ?> cm</td>
              <td><?= $row['birth']; ?></td>
              <td><?= $row['faction']; ?></td>
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
  </body>
</html>
<?= $status ?>

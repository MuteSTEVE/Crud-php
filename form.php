<?php
  $floppy = ' <i class="fa-solid fa-floppy-disk"></i>';
  $plane = ' <i class="fa-solid fa-paper-plane"></i>';

  $value = isset($_GET['edit']) ? 'edit' : 'insert';
  $text = isset($_GET['edit']) ? 'Save Changes ' . $floppy : 'Submit ' . $plane;

  $fieldset = isset($_GET['edit']) ? '<fieldset disabled>' : '';
  $fieldsetc = isset($_GET['edit']) ? '</fieldset>' : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

  <title>Document</title>
</head>
<body>
    <nav class="text-center navbar bg-body-tertiary">
      <div class="container-fluid d-flex justify-content-center">
        <span class="navbar-brand mb-0 h1">Arknights Operator Record collection</span>
      </div>
    </nav>

    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" style="text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Insert record</li>
        </ol>
      </nav>

      <div class="card border-light">
        <div class="card-body">
          <form method="POST" action="process.php">
            <div class="mb-3 row">
              <label for="codename" class="col-sm-2 col-form-label">Codename</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="codename">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="image" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="image">
              </div>
            </div>

            <?= $fieldset ?>
              <div class="mb-3 row">
                <label for="disabled-form-select" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                  <select id="disabled-form-select" class="form-select" aria-label="Default select example">
                    <option selected>Select gender</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                  </select>
                </div>
              </div>
            <?= $fieldsetc ?>
            
            <div class="mb-3 row">
              <label for="race" class="col-sm-2 col-form-label">Race</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="race">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="height" class="col-sm-2 col-form-label">Height</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="height" placeholder="cm">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="place" class="col-sm-2 col-form-label">Place</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="place" placeholder="place of birth">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="date" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="date" placeholder="mm-dd-yy">
              </div>
            </div>
            <div class="mb-3 row">
              <div class="text-center">
                <a href="index.php" type="submit" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Cancel</a>
                <button type="submit" name="action" value="<?= $value ?>" class="btn btn-primary">
                  <?= $text ?>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div> 
</body>
</html>

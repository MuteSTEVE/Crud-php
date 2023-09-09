<?php
  include('connection.php');
  include('process.php');

  $fieldset = isset($_GET['edit']) ? '<fieldset disabled>' : '';
  $fieldsetc = isset($_GET['edit']) ? '</fieldset>' : '';

  $query = "SELECT * FROM operator";
  $sql = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($sql);
  $star = ' Star';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">

<title><?= $value ?></title>
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

            <div class="mb-3 row">
              <label for="disabled-form-select" class="col-sm-2 col-form-label">Class</label>
              <div class="col-sm-10">
                <select id="disabled-form-select" class="form-select" aria-label="Default select example">
                  <option selected>Select class</option>
                  <option value="Caster"><i class="fa-solid fa-hat-wizard"></i>Caster</option>
                  <option value="Guard">Guard</option>
                  <option value="Medic">Medic</option>
                  <option value="Sniper">Sniper</option>
                  <option value="Specialist">Specialist</option>
                  <option value="Supporter">Supporter</option>
                  <option value="Defender">Defender</option>
                  <option value="Vanguard">Vanguard</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="rarity" class="col-sm-2 col-form-label">Rarity</label>
              <div class="col-sm-10">
                <input type="number" min="1" max="6" class="form-control" id="rarity">
              </div>
            </div>

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
              <label for="birth" class="col-sm-2 col-form-label">Birth</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="birth" birthholder="birth of birth" placeholder="place of birth">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="faction" class="col-sm-2 col-form-label">Faction</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="faction" factionholder="faction of faction">
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

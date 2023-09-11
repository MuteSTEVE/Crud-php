<?php
  include('process.php');
  include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= $cdn ?>
<title><?= $title ?></title>
</head>
<body>
    <?= $nav ?>
    <div class="container">
      <?= $breadcrumb ?>

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
                <input type="text" class="form-control" id="birth" placeholder="place of birth">
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

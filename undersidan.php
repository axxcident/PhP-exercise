<!DOCTYPE html>
<?php include("functions.php") ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css?timestamp=<?php echo microtime() ?>">
  <script src="hotreload.js?timestamp=<?php echo time(); ?>"></script>
  <title>Undersidan</title>
</head>
<?php include "header.php" ?>
<section>
  <h3>Undersidan</h3>
  <form method="post">
    <label for="multiplier">Ange en multiplikator: </label>
    <input type="number" id="multiplier" name="multiplier" value=1 min=1 max=9 required>
    <button type="submit">Uppdatera</button>
  </form>

  <h5>Multiplikationstabellen</h5>
  <?php
  $multiplikationsVariabeln = 1;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $multiplikationsVariabeln = isset($_POST['multiplier']) ? $_POST['multiplier'] : 1;
  }
  ?>
  <ul>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo ("<li>
      $multiplikationsVariabeln * $i är lika med: " . $multiplikationsVariabeln * $i . "
      </li>");
    }
    ?>
  </ul>
</section>
<?php include "footer.php" ?>

</html>

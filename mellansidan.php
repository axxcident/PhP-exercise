<!DOCTYPE html>
<?php include("functions.php") ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css?timestamp=<?php echo microtime() ?>">
  <script src="hotreload.js?timestamp=<?php echo time(); ?>"></script>
  <title>Mellansida</title>
</head>
<?php include "header.php" ?>
<section>
  <h4>Mellansidan</h4>
  <form action="" method="get" class="elprisform">
    <label for="elpris">Aktuellt elpris (kr/KwH): </label>
    <input type="number" name="elpris" id="elpris" required step="any">
    <label for="usage">Aktuell förbrukning (KwH): </label>
    <input type="number" name="usage" id="usage" required step="any">
    <button type="submit">Beräkna priset</button>
  </form>
  <p><?php echo calculatePrice(); ?></p>

</section>
<?php include "footer.php" ?>
</html>

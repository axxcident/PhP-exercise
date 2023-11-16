<!DOCTYPE html>
<?php include("functions.php") ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css?timestamp=<?php echo (microtime()) ?>">
  <script src="hotreload.js?timestamp=<?php echo time(); ?>"></script>
  <title>lab2</title>
</head>

<body>
  <?php include "header.php" ?>
  <section>
    <h2>Välkommen</h2>
    <h3>
      <?php
      echo getGreetingBasedOnTime();
      ?>
    </h3>
  </section>
  <?php include "footer.php" ?>
</body>

</html>

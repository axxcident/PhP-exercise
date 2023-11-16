<!DOCTYPE html>
<?php include("functions.php") ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css?timestamp=<?php echo (microtime()) ?>">
  <script src="hotreload.js?timestamp=<?php echo time(); ?>"></script>
  <title>Översidan</title>
</head>
<?php include "header.php" ?>
<section>
  <h3>
    <?php echo "<p>Idag är det: " . date('F j') . " en " . translateWeekDay(date('l')) . "</p>"; ?>
  </h3>
  <?php
  $currentDate = date('Y-m-d H:i:s');
  $greetingMessage = printDateIsEvenString($currentDate);
  echo "<p>$greetingMessage</p>";
  ?>
</section>
<?php include "footer.php" ?>

</html>

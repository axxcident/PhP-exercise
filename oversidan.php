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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['datum'])) {
  $selectedDate = $_POST['datum'];
  $formattedDate = date('F j', strtotime($selectedDate));
  $dayOfWeek = translateWeekDay(date('l', strtotime($selectedDate)));
  $displayMessage = "Det valda datumet är $formattedDate en $dayOfWeek";
} else {
  $displayMessage = "Idag är det: " . date('F j') . " en " . translateWeekDay(date('l'));
}
?>
  <h3>
    <?php echo "<p>$displayMessage</p>"; ?>
  </h3>

  <form action="" method="post" class="formdatum">
    <label for="datum">Välj datum: </label>
    <input type="date" name="datum" id="datum">
    <button type="submit">Ändra datum</button>
  </form>
<?php
$currentDate = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['datum'])) {
  $currentDate = $_POST['datum'];
}

$greetingMessage = printDateIsEvenString($currentDate);
echo "<p>$greetingMessage</p>";
?>

</section>
<?php include "footer.php" ?>

</html>

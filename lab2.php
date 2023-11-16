<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<?php include "functions.php" ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css?timestamp=<?php echo microtime() ?>">
  <script src="hotreload.js?timestamp=<?php echo time(); ?>"></script>
  <title>lab2</title>
</head>

<body>
  <?php include "header.php" ?>
  <section>
    <form class="namnform" action="" method="get">
      <label for="namn">Ange ditt namn: </label>
      <input type="text" name="namn" id="namn">
      <button type="submit">göre</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $namn = isset($_GET['namn']) ? $_GET['namn'] : "";
    }
    ?>
    <?php
    echo "<h2>Välkommen $namn</h2>";
    ?>
    <h3>
      <?php
      echo getGreetingBasedOnTime();
      ?>
    </h3>
    <?php echo "<a href='logout.php'>Logout</a>"; ?>
  </section>
  <?php include "footer.php" ?>
</body>

</html>

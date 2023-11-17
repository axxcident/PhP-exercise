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
  <section class="labb2">
    <!-- <form class="namnform" action="" method="get">
      <label for="namn">Ange ditt namn: </label>
      <input type="text" name="namn" id="namn">
      <button type="submit">göre</button>
    </form> -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //   $namn = isset($_GET['namn']) ? $_GET['namn'] : "";
    // }
    $namn = $_SESSION['user'];
    ?>
    <?php
    echo "<h2>Välkommen $namn</h2>";
    ?>
    <h3>
      <?php
      echo getGreetingBasedOnTime();
      ?>
    </h3>
    <?php echo "<a class='logout' href='logout.php'>Logout</a>"; ?>
  </section>
  <?php include "footer.php" ?>
</body>

<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("modalBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementById("closeModal");

  // When the user clicks the button, open the modal
  btn.onclick = function () {
    modal.style.display = "block";
    btn.style.display = "none";
  };

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
    btn.style.display = "block";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  };
</script>

</html>

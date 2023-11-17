<?php
session_start();

// Check if the user is already logged in, redirect to the main page if true
if (isset($_SESSION['user'])) {
  header("Location: lab2.php");
  exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputUsername = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
  $inputPassword = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';


  // Store the entered username and password in the session
  $_SESSION['user'] = $inputUsername;
  $_SESSION['password'] = $inputPassword;
  // Store hashed password in the session
  $_SESSION['hashed_password'] = password_hash($inputPassword, PASSWORD_DEFAULT);


  // Redirect to the main page after storing in the session
  header("Location: lab2.php");
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
  <title>Logga in</title>
</head>

<body>
  <section>
    <h4>Logga in</h4>
    <form action="" method="post" class="loginform" enctype="multipart/form-data">
      <label for="namn">namn: </label>
      <input type="text" name="username" id="username" autocomplete="username" required>
      <label for="usage">lösenord: </label>
      <input type="password" name="password" id="password" autocomplete="current-password" required>
      <button type="submit">Skapa profil & logga in</button>
    </form>
    <?php
    if (isset($loginError)) {
      echo "<p>$loginError</p>";
    }
    ?>
  </section>
  <?php include "footer.php" ?>
</body>

</html>

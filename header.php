<?php
$namn = $_SESSION['user'];
?>
<header class="header">
  <nav class="sub-header">
    <a href="lab2.php">Hemmåt</a>
    <a href="oversidan.php">Översidan</a>
    <a href="undersidan.php">Undersidan</a>
    <a href="mellansidan.php">Mellansidan</a>
  </nav>
  <!-- The Modal -->
  <?php echo "<button id='modalBtn'>profil: $namn</button>"; ?>
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-title">
        <span class="close" id="closeModal">&times;</span>
        <p>This is a modal. Add your content here.</p>
      </div>
      <a class='head-logout' href='logout.php'>Logout</a>
    </div>
  </div>
</header>

<!-- if (password_verify($inputPassword, $_SESSION['hashed_password'])) {
    // Passwords match
} -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $sak = "Hejsan";
  $sak2 = "Världen";
  $sak3 = ["Hej", "Världsamfundet"];
  function funkis()
  {
    echo "Från en php funktion";
  }
  function grunkis($inlägg)
  {
    echo $inlägg;
  }
  ?>
  <h1>
    <?php
    echo $sak . " " . $sak2;
    ?>
  </h1>
  <h2>
    <?php
    echo $sak3[0] . " " . $sak3[1];
    ?>
  </h2>
  <ul>
    <?php
    for ($i = 10; $i <= 19; $i++) {
      echo "<li>$i</li>";
    }
    ?>
  </ul>
  <p>
    <?php
    funkis();
    echo "<br>";
    grunkis("Hej från funktion med parameter");
    ?>
  </p>
</body>

</html>

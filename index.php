<!DOCTYPE html>
<html>
<head>
  <title>Huong Dang 948bcd</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>

  <?php
  $correctnumber = 26;

  if (isset($_GET['guess'])) {
      $guess = $_GET['guess'];
      if (!is_numeric($guess)) {
          echo "Your guess is not a number";
      } else if ($guess < $correctnumber) {
          echo "Your guess is too low";
      } else if ($guess > $correctnumber) {
          echo "Your guess is too high";
      } else {
          echo "Congratulations - You are right";
      }
  } else {
      echo "Missing guess parameter <br />";
      echo "Your guess is too short";
  }
  ?>
</body>
</html>

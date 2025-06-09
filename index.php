<!DOCTYPE html>
<html>
<head>
  <title>Huong Dang 948bcd 7af3fa3c 0e71fdf4</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>

  <?php
$correctnumber=45; //change this number //
if(isset($_GET['guess']))
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is too short";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>
</body>
</html>

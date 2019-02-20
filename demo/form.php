<?php
if (isset($_POST['submit'])) {
    $minimun = 5;
    $maximun=10;

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($username)<$minimun) {
        echo "Username has to be longer than 5";
    }
    if(strlen($username)>$maximun) {
        echo "Username has to be shorter than 10";
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
  <input type="text" name="username" placeholder="Enter Username">
  <input type="password" name="password" placeholder="Enter Password"><br>
  <input type="submit" name="submit">
</form>



</body>
</html>

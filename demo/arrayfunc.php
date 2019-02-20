<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
$list = [343,444,3,23,53,62];
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
print_r($list);
sort($list);
print_r($list);
   ?>

</body>
</html>

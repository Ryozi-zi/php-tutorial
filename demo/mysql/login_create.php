<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Query FAILED');
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>Login</title>
 </head>
 <body>
   <div class="container">
     <div class="col-sm-6">
<?php
while($row = mysqli_fetch_assoc($result)) {
  print_r($row);
}
 ?>
     </div>
   </div>
 </body>
 </html>

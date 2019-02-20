<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
  echo "We are connected";
}else{
  die("Database connection failed");
}

    // if ($username && $password) {
    //     echo $username . " ". $password;
    // } else {
    //     echo "this field cannot be blank";
    // }
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
       <form action="login.php" method="post">
         <div class="form-group">
           <label for="username">Username</label>
           <input type="text" class="form-control" name="username">
         </div>
         <div class="form-group">
           <label for="password">Password</label>
           <input type="password" class="form-control" name="password">
         </div>

         <input class="btn btn-primary" type="submit" value="Submit" name="submit">
       </form>
     </div>
   </div>
 </body>
 </html>

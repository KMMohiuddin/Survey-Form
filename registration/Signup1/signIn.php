<?php
    if($_SERVER['REQUEST_METHOD'] == 'post'){
        include 'sql.php';
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>signUp</title>
  </head>
  <body>
    <h1 class name="text text-center">Sign Up</h1>
    <div class="container my-5">
  <form action="signIn.php" method="post">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
</body>
</html>
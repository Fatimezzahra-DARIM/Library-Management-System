<?php
include('script.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
   <link href="style.css" rel="stylesheet" />
   <title>YouCode Biblio</title>

</head>

<body class="position-relative">
   <header>
      <div class="navbar col-2 d-flex flex-column justify-content-left">
         <img id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page" height="200" width="200">
      </div>
   </header>
   <main class="col-lg-5 col-md-6 col-sm-7 col-10 px-5  p-2">
      <?php if(isset($_SESSION['mssgLogin'])){ ?>
      <div class="alert alert-danger text-center " role="alert">
         <?= $_SESSION['mssgLogin']?>
      </div>
      <?php unset($_SESSION['mssgLogin']); } ?>
      <form method="post" name="login" class="">
         <h3 class="logo w-50 m-auto text-center ">Sign In</h3>
         <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input type="email" name="email" class="form-control" id="email" required aria-describedby="emailHelp" placeholder="">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Password:</label>
            <input type="password" name="password" id="password" required class="form-control" aria-describedby="emailHelp" placeholder="">
         </div>

         <div class="col-md-12 text-center ">
            <button type="submit" class=" btn btn-block mybtn tx-tfm" name="signIn"><strong>Submit</strong></button>
         </div>
         <div class="form-group">
            <p class="text-center">Need an account? <a href="SignUp.php" id="signup">Sign up here</a></p>
         </div>
      </form>
   </main>
</body>

</html>
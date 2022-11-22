<?php
include('./connex.php');
if (isset($_POST['submit'])) {
   $name = mysqli_real_escape_string($conn, $_POST['fName']);
   $phone = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
   $Email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $pasrepeat = $_POST['checkPassword'];
   $select = "SELECT * FROM admin WHERE Email = '$Email' ";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'user already exist !! ';
   } else {
      if ($pass != $pasrepeat) {
         $error[] = 'password not matched !!';
      } else {
         $insert = "INSERT INTO admin (adminName,phoneNumber,Email,PASSWORD) VALUES ('$name','$phone','$Email','$pass')";
         $query = mysqli_query($conn, $insert);
         if (!$query) {
            echo 'hiii';
         }
      };
   };
};
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
   <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
   <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
   <title>YouCode Biblio</title>

</head>

<body>
   <header>
      <div class="navbar col-2 d-flex flex-column justify-content-left">
         <img id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page" height="200" width="200">
      </div>
   </header>
   <main class="col-lg-5 col-md-6 col-sm-7 col-10 px-5  p-2">
      <form name="registration" id="form" method="post" action="signIn.php" data-parsley-validate>
         <h3 class="logo w-50 m-auto text-center ">Sign Up</h3>
         <div class="form-group">
            <label for="exampleInputEmail1">Name:</label>
            <input type="text" name="fName" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="3" required>

         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Phone Number:</label>
            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" aria-describedby="emailHelp" placeholder="" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-debounce="500" data-parsley-type="digits" data-parsley-minlength="10" data-parsley-maxlength="10" required>

         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="" data-parsley-type="email" required>

         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Password:</label>
            <input type="text" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspannewpassinput" data-parsley-required-message="Please enter your new password." data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1" data-parsley-required>

         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password:</label>
            <input type="text" name="checkPassword" id="checkPassword" class="form-control" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspanconfirmnewpassinput" data-parsley-required-message="Please re-enter your new password." data-parsley-equalto="#password" data-parsley-required>

         </div>
         <div class="col-md-12 text-center mb-3">
            <button type="submit" name="submit" class=" btn btn-block mybtn tx-tfm"><strong>Submit</strong></button>
            <?php if (isset($_GET['error'])) { ?>
               <p class="alert alert-danger" role="alert">
                  <?php echo $_GET['error']; ?></p>
            <?php } ?>
         </div>
         <div class="col-md-12 ">
            <div class="form-group">
               <p class="text-center">Already have an account?<a href="signIn.php" id="signin"> Sign In.</a></p>
            </div>
         </div>
         </div>
      </form>
   </main>
   <script src="script.js"></script>
</body>


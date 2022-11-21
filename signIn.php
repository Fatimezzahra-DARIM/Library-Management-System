<?php
// include 'connex.php';
// session_start();
// if(isset($_POST['submit'])){
//    $email = htmlspecialchars(trim(strtolower($_POST['email']))) ;
//    $pass =$_POST['password'];
//    $qry = mysqli_query($conn, "SELECT *,count(*) as 'us' FROM admin where email='$email' && password='$pass'");

//    $result = mysqli_fetch_assoc($qry);
//    if($result['us']>0){
//       // $_SESSION['email']=$email;
//       var_dump($result);
      
//        $_SESSION['admin']=$result;

//       //  $_SESSION['admin']['adminId'] = $result[''] ;
//       header("location: dashboard.php");
//    }else{
//       echo"password is false";
//    }
// }
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
   <main class="w-50">
      <div class="container">
         <div class="row">
            <div class="col-md-5 mx-auto">
               <div id="first">
                  <div class="myform form ">
                     <div class="logo ">
                        <div class="col-md-12 text-center ">
                           <h1><strong>Sign In</strong></h1>
                        </div>
                     </div>
                     <form action="script.php" method="post" name="login">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Email address:</label>
                           <input type="email" name="email" class="form-control" id="email" required aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Password:</label>
                           <input type="password" name="password" id="password" required  class="form-control" aria-describedby="emailHelp" placeholder="">
                        </div>

                        <div class="col-md-12 text-center ">
                           <button type="submit" class=" btn btn-block mybtn tx-tfm" name="signIn"><strong>Submit</strong></button>
                        </div>


                        <div class="form-group">
                           <p class="text-center">Need an account? <a href="SignUp.php" id="signup">Sign up here</a></p>
                        </div>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

   </main>
</body>

</html>
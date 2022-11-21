<?php

// session_start();
include 'script.php';

if (isset($_SESSION['admin_id'])) {
    // echo $_SESSION['admin_id'];
} else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet" />

    <title>YouCode Biblio</title>
</head>

<body class="row p-0 m-0">

    <section class="logonav col-2 bg-dark" id="menu">
        <div class=" w-100 d-flex justify-content-center">
            <img class="w-75" id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page">

        </div>
        <ul class="items">
            <li><i class="bi  me-3 fs-4 bi-person-circle"></i><a href="profile.php" class="profile">Profile</a></li>
            <li><i class="bi me-3 fs-4 bi-grid-1x2-fill"></i><a href="dashboard.php" id="dashboard" class="profile">Dashboard</a></li>
            <li><i class="bi me-3 fs-4 bi-book-fill"></i><a href="books.php" id="books" class="books">Books</a></li>
            <li><i class="bi me-3 fs-4 bi-box-arrow-left"></i><a href="logOut.php" id="homepage" class="homepage">Log Out</a></li>
        </ul>

    </section>

    <section class=" cards col-10 d-flex justify-content-between p-5 " style=" height:50px ;">
        <div>
            <h3> Welcome back <?php echo $_SESSION["admin_name"]; ?> 👋 !!</h3>
        </div>
        <div class="card text-white bg-primary " style="max-width: 18rem;">

            <div class="card-header">
                <h5>Header </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Primary card title </h5>
                <p class="card-text"><?php countbooks(); ?> </p>
            </div>
        </div>
        <div class="card text-white bg-secondary " style="max-width: 18rem;">
            <div class="card-header">
                <h5>Header </h5>
            </div>
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text"><?php countadmins(); ?></p>
            </div>
        </div>

    </section>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
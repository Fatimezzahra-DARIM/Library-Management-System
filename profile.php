
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet" />

    <title>YouCode Biblio</title>
</head>

<body class="row  p-0 m-0">
    <!-- <header>
        <div class="navbar col-2 d-flex flex-column justify-content-left">
            <img id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page" height="200" width="200" >
        </div>

     </header> -->
    <section class="logonav col-2 bg-dark " style="height: auto ;" id="menu">
        <div class=" w-100 d-flex justify-content-center">
            <img class="w-75" id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page">

        </div>
        <ul class="items">
            <li><i class="bi  me-3 fs-4 bi-person-circle"></i><a href="profile.php" id="profile" class="profile">Profile</a></li>
            <li><i class="bi me-3 fs-4 bi-grid-1x2-fill"></i><a href="dashboard.php" id="dashboard" class="profile">Dashboard</a></li>
            <li><i class="bi me-3 fs-4 bi-book-fill"></i><a href="books.php" id="books" class="books">Books</a></li>
            <li><i class="bi me-3 fs-4 bi-box-arrow-left"></i><a href="index.php" id="homepage" class="homepage">Log Out</a></li>
        </ul>

    </section>
    <section class="col-10 ">
        <hr class=" ">
        <!-- <div class="row">
        <div class="col-sm-10"> -->
        <h1>User name</h1>
        </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-6  ">
                <div class="text-center">
                    <img src="./Images/profile-settings.webp" class=" w-25 h-25 img-thumbnail">
                    <!-- <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload"> -->
                </div>
                </hr><br>
                <form class="form" action="##" method="post" id="registrationForm">
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>Full name</h4>
                            </label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                        </div>
                    </div>


                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="phone">
                                <h4>Phone Number</h4>
                            </label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                        </div>
                    </div>


                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="password">
                                <h4>Password</h4>
                            </label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="password2">
                                <h4>Verify</h4>
                            </label>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12  text-center">
                            <br>
                            <button class="btn btn-lg btn-success " type="submit"><i class="glyphicon glyphicon-ok-sign"></i>
                                Save update</button>
                            <!-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                        </div>
                    </div>
                </form>
    </section>


</body>



























<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
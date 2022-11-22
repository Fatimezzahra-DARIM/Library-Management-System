<?php
include 'script.php';
if (!isset($_SESSION['admin_id'])) {
    // echo $_SESSION['admin_id'];
    header("location: index.php");
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

<body class="row p-0 m-0 ">

    <section class="logonav  bg-dark col-2 h-auto" id="menu">
        <div class=" w-100 d-flex justify-content-center">
            <img class="w-75" id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page">

        </div>
        <ul class="items">
            <li><a href="profile.php" class="profile"><i class="bi  me-3 fs-4 bi-person-circle"></i><span class="sidText">Profile</span> </a></li>
            <li><a href="dashboard.php" id="dashboard" class="profile"><i class="bi me-3 fs-4 bi-grid-1x2-fill"></i><span class="sidText">Dashboard</span></a></li>
            <li><a href="books.php" id="books" class="books"><i class="bi me-3 fs-4 bi-book-fill"></i><span class="sidText">Books</span></a></li>
            <li><a href="logOut.php" id="homepage" class="homepage"><i class="bi me-3 fs-4 bi-box-arrow-left"></i><span class="sidText">LogOut</span></a></li>
        </ul>


    </section>

    <section class="col-10 ">
        <div class="d-flex justify-content-between p-3">
            <h3>List of Books</h3>
            <button type="button" class="btn p-2 rounded-4" data-bs-toggle="modal" data-bs-target="#exampleModal "><i class="bi bi-plus"></i> Add Book</button>
        </div>
        <div>

            <?php
            if (isset($_SESSION['bookAdded'])) {
            ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <?php
                    echo $_SESSION['bookAdded'];
                    unset($_SESSION['bookAdded']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php
            }
            ?>

            <table class="table table-responsive align-middle bg-white text-center">
                <thead class="bg-light">
                    <tr>
                        <th>BookId</th>
                        <th>Admin</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>PublisherName</th>
                        <!-- <th>Categories</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php displayBook(); ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Modal -->

    <div class="modal fade" id="exampleModal" onclick="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Book</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="book" name="book" enctype="multipart/form-data" action="script.php" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="title" class="form-control" name="title" id="title-addBook">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Author</label>
                            <input type="title" class="form-control" name="Author">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">PublisherName</label>
                            <input type="title" class="form-control" name="PublisherName">
                        </div>

                        <!-- select2 -->
                        <div class="form-control mb-3">
                            <label for="title" class="form-label">IMG</label>
                            <label for="file-upload" class="custom-file-upload ">

                            </label>
                            <input id="file-upload" name="img" type="file">
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="reset">Close</button>
                            <button type="submit" class="btn btn-primary" id="send" name="savebook">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
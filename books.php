<?php
    include 'script.php';
?>

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

<body class="row p-0 m-0">
    <!-- <header>
        <div class="navbar col-2 d-flex flex-column justify-content-left">
            <img id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page" height="200" width="200" >
        </div>

     </header> -->

    <section class="logonav  bg-dark col-2" id="menu">
        <div class=" w-100 d-flex justify-content-center">
            <img class="w-75" id="navbarLogo" src="./Images/YouCode_Biblio-logo.png" alt="Logo de la page">

        </div>
        <ul class="items">
            <li><i class="bi  me-3 fs-4 bi-person-circle"></i><a href="profile.html" id="profile" class="profile">Profile</a></li>
            <li><i class="bi me-3 fs-4 bi-grid-1x2-fill"></i><a href="dashboard.html" id="dashboard" class="profile">Dashboard</a></li>
            <li><i class="bi me-3 fs-4 bi-book-fill"></i><a href="books.html" id="books" class="books">Books</a></li>
            <li><i class="bi me-3 fs-4 bi-box-arrow-left"></i><a href="index.html" id="homepage" class="homepage">Log
                    Out</a></li>
        </ul>


    </section>

    <section class="col-10">
        <div class="d-flex justify-content-between p-3">
            <h3>List of Books</h3>
            <button type="button" class="btn p-2 rounded-4" data-bs-toggle="modal" data-bs-target="#exampleModal "><i class="bi bi-plus"></i> Add Book</button>
        </div>
        <div>

            <?php
            if (isset($_SESSION['bookAdded'])) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['bookAdded'];
                    unset($_SESSION['bookAdded']);
                    ?>
                </div>
            <?php
            }
            ?>

            <table class=" table align-middle mb-0 bg-white text-center ">
                <thead class="bg-light">
                    <tr>
                        <th>BookId</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>PublisherName</th>
                        <!-- <th>Categories</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">#1</p>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Software engineer</p>

                        </td>
                        <td>
                            Darim
                        </td>

                        <td>Senior</td>
                        <!-- <td>Self dev</td> -->
                        <td>
                            <button type="button" class="btn p-2 btn-sm btn-rounded" data-mdb-ripple-color="dark">
                                Edit
                            </button>
                            <button type="button" class="btn p-2 btn-sm btn-rounded">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded" alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">#2</p>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Consultant</p>

                        </td>
                        <td>
                            fati
                        </td>
                        <td>Junior</td>
                        <!-- <td>Self dev</td> -->
                        <td>
                            <button type="button" class="btn p-2 btn-sm btn-rounded" data-mdb-ripple-color="dark">
                                Edit
                            </button>
                            <button type="button" class="btn p-2 btn-sm btn-rounded">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded" alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">#3</p>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">Designer</p>
                            <p class="text-muted mb-0">UI/UX</p>
                        </td>
                        <td>
                            zahra
                        </td>
                        <td>Senior</td>
                        <!-- <td>Self dev</td> -->
                        <td>
                            <button type="button" class="btn p-2 btn-sm btn-rounded" data-mdb-ripple-color="dark">
                                Edit
                            </button>
                            <button type="button" class="btn p-2 btn-sm btn-rounded">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Modal -->
    <div id="addBook">
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

                            <!--  -->


                            <!-- <div class="form-group">
                                <label for="date" class="form-label ">Discription</label>
                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="description"></textarea>
                            </div> -->
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="reset">Close</button>
                                <button type="submit" class="btn btn-primary" id="send" name="savebook">Save</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<?php
require 'connex.php';
session_start();

if(isset($_POST['savebook'])) addBook();

if (isset($_GET['id'])) deleteBook();



if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($conn,$_POST['fName']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $checkpassword= $_POST['checkPassword'];
    $select="SELECT * FROM admin WHERE Email='$email'";
    $result=mysqli_query($conn,$select);

if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already exist !! ';
} else {
    if ($pass != $checkpassword) {
        $error[] = 'password not matched !!';
    } else {
        $insert = "INSERT INTO `admin`(`adminName`, `phoneNumber`, `Email`, `PASSWORD`) VALUES ('$name','$phoneNumber','$email','$pass')";
        $query=mysqli_query($conn, $insert);
        var_dump($insert);
        if(!$query){
            echo 'hiiii';
        }
    };
};}

function addBook(){
    global $conn;

    $title = $_POST['title'];
    $author = $_POST['Author'];
    $publisherName = $_POST['PublisherName'];
    $image = $_FILES['img']['name'];
    $upload = "Images/" . $image;
    move_uploaded_file($_FILES['img']['tmp_name'], $upload);
    // print_r($_POST);

    $req = mysqli_query($conn, "INSERT INTO books VALUES (NULL,'$title','$author','$publisherName','$image')");

    if ($req) {
        $_SESSION['bookAdded'] = 'your book has been added successfully';
        header('location: books.php');
    } else {
        echo "<h1>4aa 9lbii 3la chi 7el a7nintii hzk lma </h1>";
    }
}
function deleteBook()
{
    //CODE HERE
    global $conn;
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE bookId=$id";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error";
    }
    //SQL DELETE
    $_SESSION['message'] = "Task has been deleted successfully !";
    header('location: books.php');
}
function displayBook()
{
    include('connex.php');

    $query="SELECT * FROM `books`";
    $result=mysqli_query($conn,$query);
    foreach ($result as $row) {
        $id = $row["bookId"];
        $title = $row["bookTitle"];
        $author = $row["author"];
        $publisherName = $row['publisherName'];
        $image = $row["image"];
        echo '
           
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="Images/' . $image . '" alt="" style="width: 45px; height: 45px" class="rounded" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">#' . $id . '</p>

                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">' . $title . '</p>

                        </td>
                        <td>
                           ' . $author . '
                        </td>

                        <td>'. $publisherName . '</td>
                        <td>
                            <button type="button" class="btn p-2 btn-sm btn-rounded" data-mdb-ripple-color="dark">
                                Edit
                            </button>
                            <a class="btn p-2 btn-sm btn-rounded" href="script.php?id=' . $id . '">
                                Delete</a>
                        </td>
                    </tr>
        
        ';
    }
}
function displayAdmin()
{}
<?php
require 'connex.php';

session_start();

if(isset($_POST['savebook'])) addBook();

if (isset($_GET['id'])) deleteBook();

if (isset($_POST['update'])) updateProfil();

if (isset($_POST['signIn'])) signIn();





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
function updateBook(){
    global $conn;
    if(isset($_POST['update'])){
        $id=$_GET['id'];
        // echo "center" ;
        $title=$_POST['updatetitle'];
        $updateAuthor=$_POST['updateAuthor'];
        $updatePublisherName=$_POST['updatePublisherName'];
        $image=$_POST['image'];
       $req= "UPDATE `books` SET `bookTitle`='$title',`author`='$updateAuthor',`publisherName`='$updatePublisherName',`image`='$image' WHERE `id`='$id'";
        $res=mysqli_query($conn,$req);
        if($res){
        header('location: books.php');
         echo "done";
        }else{
            echo "<br>Error updating record: " . mysqli_error($conn);

        }
        //echo "end" ;

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

    $query="SELECT * FROM `books` ORDER BY bookId DESC ";
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
                           
                               <a class="btn p-2 btn-sm btn-rounded" onClick="updateBook('.$id.')" href="edit.php?id='.$id.'" >edit</a>
                         
                            <a class="btn p-2 btn-sm btn-rounded" onClick="checkDelete('.$id.')">
                                Delete</a>
                        </td>
                    </tr>
        
        ';
    }
}
function countbooks()
{
    global $conn;
    //SQL COUNTER OF 
    $sql = "SELECT count(*) FROM books";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo  $row[0];
}
function countadmins()
{
    global $conn;
    //SQL COUNTER OF 
    $sql = "SELECT count(*) FROM admin";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo  $row[0];
}
function signIn()
{

    $email = htmlspecialchars(trim(strtolower($_POST['email'])));

    $pass = $_POST['password'];
    $qry = mysqli_query($GLOBALS['conn'], "SELECT *,count(*) as 'us' FROM admin where email='$email' && password='$pass'");

    $result = mysqli_fetch_assoc($qry);
    if ($result['us'] > 0) {

        // $_SESSION['email']=$email;
        //var_dump($result);
        $_SESSION['admin_id'] = $result["adminId"];
        $_SESSION['admin_name'] = $result["adminName"];
        $_SESSION['admin_phone'] = $result["phoneNumber"];
        $_SESSION['admin_email'] = $result["Email"];
        $_SESSION['admin_password'] = $result["PASSWORD"];


        //  $_SESSION['admin']['adminId'] = $result[''] ;
        header("location: dashboard.php");
    } else {
        echo "password is false";
    }
}
function updateProfil(){
    echo "start" ;
    global $conn ;
    $id = $_SESSION['admin_id'] ;
    $fullName = $_POST['first_name'] ;
    $phone = $_POST['phone'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    if($id){
        $sql = " UPDATE  `admin` SET  adminName = '$fullName', phoneNumber = '$phone', Email = '$email', PASSWORD = '$password' where adminId = '$id'" ;
        if (mysqli_query($conn, $sql)) {
            header('location:signIn.php');
        } 
    }

}


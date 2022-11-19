<?php
require 'connex.php';
session_start();

if(isset($_POST['savebook'])) addBook();

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
    $image = 'null';

    print_r($_POST);

    $req = mysqli_query($conn, "INSERT INTO books VALUES (NULL,'$title','$author','$publisherName','$image')");

    if ($req) {
        $_SESSION['bookAdded'] = 'your book has been added successfully';
        header('location: books.php');
    } else {
        echo "<h1>4aa 9lbii 3la chi 7el a7nintii hzk lma </h1>";
    }
}
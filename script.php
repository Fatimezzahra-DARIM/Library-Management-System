<?php
require 'connex.php';
if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($conn,$_POST['fName']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $checkpassword= $_POST['checkPassword'];
    $select="SELECT * FROM admin WHERE Email='$email'";
    $result=mysqli_query($conn,$select);
}
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
};

?>
<?php 
require "connex.php";

    global $conn;
    if(isset($_POST['update']) ){
        $id=$_GET['id'];
        // echo "center" ;
        $title=$_POST['updatetitle'];
        $updateAuthor=$_POST['updateAuthor'];
        $updatePublisherName=$_POST['updatePublisherName'];
        $old_img=$_POST['old_img'];
        // $image = $_FILES['lastimage'];
        if(isset($_FILES['image']['name'])){
             $image = $_FILES['image']['name'];
             if($image!=""){
        $upload = "Images/" . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
           }else{
            $image=$old_img;
           }
        }else{
        $image = $old_img;
        }
       
        $req= "UPDATE `books` SET `bookTitle`='$title',`author`='$updateAuthor',`publisherName`='$updatePublisherName',`image`='$image' WHERE `bookId`='$id'";
        $res=mysqli_query($conn,$req);
        if($res){
        header('location: books.php');
         echo "done";
        }else{
            echo "<br>Error updating record: " . mysqli_error($conn);

        }
        //echo "end" ;

    }




?>
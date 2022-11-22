<?php 
$conn=mysqli_connect('localhost','root','','library_db_v1');
 if(!$conn){
     die("connection failed :" .mysqli_connect_error());
 }

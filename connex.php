<?php 
$conn=mysqli_connect('localhost','root','','library_db');
 if(!$conn){
     die("connection failed :" .mysqli_connect_error());
 }

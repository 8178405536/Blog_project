<?php
//  include(".php");
 include_once 'config.php';
 if(isset($_POST['submit'])){
    $name =$_POST['name'];
   
    $email =$_POST['email'];
    $password =$_POST['password'];

    // $sql =mysqli_query($conn,"INSERT INTO user_blog (name,last,address,phone,email,password) values('$name','$last','$address','$phone','$email','$password')");
    $sql =mysqli_query($conn,"INSERT INTO `user_blog`(`id_blog`, `name`, `email`, `password`) VALUES ($name,$email,$password)");
   header("location:index.php");
   echo"helo ajayt";
    
 }
?>
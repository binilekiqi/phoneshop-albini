<?php
    
  include_once 'database/connection.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $roli1="user";
    $roli2="admin";
    $sql="select * from user where username='".$username."'  and password='".$password."'" ;

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    if($row["role"]=="user" ){
        session_start();
        $_SESSION['user']=$username;
        $_SESSION['role']=$roli1;
        header("location:index.php");
        
    }else if($row["role"]=="admin"){
        session_start();
        $_SESSION['user']=$username;
        $_SESSION['role']=$roli2;
        header("location:index.php");
    } else{
        echo "<script>alert('Pass gabim');</script>";
        header("location:Login.php");
    }   
}

?>
<?php


session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){

    include_once '../repository/userRepository.php';

    $userId=$_GET['id'];

    $userRepository= new UserRepository();

    $userRepository->deleteUser($userId);

    header("location:databaseUsers.php");
}
?>
<?php


session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){

include_once '../repository/userRepository.php';
    $userId=$_GET['id'];

    $userRepository=new UserRepository();
    $user=$userRepository->getUserById($userId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="id" value="<?= $user['ID']?>" readonly> <br> <br> 
        <input type="text" name="name" value="<?= $user['name']?>"> <br> <br> 
        <input type="text" name="surname" value="<?= $user['surname']?>"><br> <br> 
        <input type="text" name="email" value="<?= $user['email']?>"><br> <br> 
        <input type="text" name="username" value="<?= $user['username']?>"><br> <br> 
        <input type="text" name="password" value="<?= $user['password']?>"><br> <br> 
        <input type="tel" name="phoneNumber" value="<?= $user['phoneNumber']?>"><br> <br>
        <input type="text" name="role" value="<?= $user['role']?>"><br> <br> 
        
        <input type="submit" name="saveBtn" value="save"><br> <br> 
    </form>
</body>
</html>

<?php
if(isset($_POST['saveBtn'])){
    $id=$user['ID'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phoneNumber'];
    $role=$_POST['role'];
    $userRepository->updateUser($id,$name,$surname,$email,$username,$password,$phonenumber,$role);
   header("location:databaseUsers.php");
}
}
?>
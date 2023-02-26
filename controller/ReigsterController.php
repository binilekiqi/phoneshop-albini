<?php
include_once 'repository/UserRepository2.php';
include_once 'model/user.php';

    
     
        if(isset($_POST['signUpButton'])){
        
         $name = $_POST['name'];
         $surname = $_POST['surname'];
         $email1= $_POST['email1'];;
         $username = $_POST['username1'];
         $password = $_POST['password1'];
         $phonenumber = $_POST['phoneNumber'];
         $role='user';
         $id = rand(100,999);
         $user  = new User($id,$name,$surname,$email1,$username,$password,$phonenumber,$role);
         $userRepository = new UserRepository2();
         $userRepository->insertUser($user);
         header("location:index.php");
}

        
?>
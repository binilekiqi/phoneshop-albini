<?php
include_once '../repository/userRepository.php';
include_once '../model/user.php';

    if(isset($_POST['registerBtn'])){
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) ||
        empty($_POST['username']) || empty($_POST['password']) || empty($_POST['role']) || empty($_POST['phonenumber'])){
        echo "Fill all fields!";
        }else{
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phonenumber=$_POST['phonenumber'];
        $role=$_POST['role'];
        $id = rand(100,999);

        $user  = new User($id,$name,$surname,$email,$username,$password,$phonenumber,$role);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


        }
    }

    
?>
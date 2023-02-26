<?php
include_once 'database/databaseConnection.php';
include_once 'model/user.php';
    class UserRepository2{
        private $connection;

        function __construct(){
            $conn= new DatabaseConnection;

            $this->connection=$conn->startConnection();
        }

        function insertUser($user){
            $conn=$this->connection;
    
            $id=$user->getId();
            $name=$user->getName();
            $surname=$user->getSurname();
            $email=$user->getEmail();
            $username=$user->getUsername();
            $password=$user->getPassword();
            $phonenumber=$user->getPhoneNumber();
            $role=$user->getRole();
    
            $sql="INSERT INTO user(ID,name,surname,email,username,password,phoneNumber,role) values (?,?,?,?,?,?,?,?)";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$id,$name,$surname,$email,$username,$password,$phonenumber,$role]);
    
            echo "<script> alert('You have been registred!'); </script>";
        }
        function getUserById($id){
            $conn= $this->connection;
    
            $sql="SELECT * FROM user WHERE id='$id'";
    
            
            $statement = $conn->query($sql);
            $user = $statement->fetch();
    
            return $user;
        }

        function updateUser($id,$name,$surname,$email,$username,$password,$phonenumber,$role){
            $conn=$this->connection;
    
            $sql="UPDATE user SET name=?, surname=?, email=?, username=?, password=?, phonenumber=?, role=? WHERE id=?";
    
            $statement=$conn->prepare($sql);
            $statement->execute([$name,$surname,$email,$username,$password,$phonenumber,$role,$id]);
    
            echo "<script> alert ('update was succesful');</script>";
        }
        function getAllUsers(){
            $conn= $this->connection;
    
            $sql="SELECT * FROM user";
    
            
            $statement = $conn->query($sql);
            $users = $statement->fetchAll();
    
            return $users;
        }
    
    }

?>
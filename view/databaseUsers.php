<?php
    include_once '../repository/userRepository.php';

session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:../index.php");
}if($_SESSION['role']=='user')  {
    header("location:../index.php");
}  else if($_SESSION['role']=='admin'){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .duA{
            display: flex;
            flex-direction: row-reverse;
            margin-right: 5%;
        }
        .tabela{
            margin-left: 20%;
        }
    </style>
</head>
<body>

    <a class="duA"href="dashboard.php"> <h3>Dashboard</h3> </a>

        <a href="register.php">
           <Button>Add User</Button> 
        </a>

    <table class="tabela" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>

        <?php
        

            $userRepository=new UserRepository();

            $users=$userRepository->getAllUsers();
        
            foreach($users as $user){
            echo 
            "
                <tr>
                    <td>$user[ID]</td>
                    <td>$user[name]</td>
                    <td>$user[surname]</td>
                    <td>$user[email]</td>
                    <td>$user[username]</td>
                    <td>$user[password]</td>
                    <td>$user[phoneNumber]</td>
                    <td>$user[role]</td>
                    <td><a href='edit.php?id=$user[ID]'>EDIT</a></td>
                    <td><a href='delete.php?id=$user[ID]'>DELETE</a></td>
                   
                </tr>
            ";
            }
        
        ?>
    </table>

   
</body>
</html>
<?php 
}
?>
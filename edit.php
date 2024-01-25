<?php
$userId = $_GET['id'];
include_once '../repository/userRepository.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


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
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$user['Id']?>" readonly> <br> <br>
        <input type="text" name="registerEmailInput"  value="<?=$user['Email']?>"> <br> <br>
        <input type="text" name="Username"  value="<?=$user['Username']?>"> <br> <br>
        <input type="text" name="registerPasswordInput"  value="<?=$user['Password']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['Id'];
    
    $email = $_POST['registerEmailInput'];
    $username = $_POST['Username'];
    $password = $_POST['registerPasswordInput'];

    $userRepository->updateUser($id,$username,$email,$password);
    header("location:dashboard.php");
}


?>
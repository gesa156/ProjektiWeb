

<?php
$userId = $_GET['id'];
include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(136, 183, 206);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: blueviolet;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 4px;
           
           
        }

       
    </style>
</head>
<body>
   
    <form action="edit.php?id=<?= $user['id'] ?>" method="post">
        <input type="text" name="id" value="<?= $user['id'] ?>" readonly> <br> <br>
        <input type="text" name="username" value="<?= $user['username'] ?>"> <br> <br>
        <input type="text" name="email" value="<?= $user['email'] ?>"> <br> <br>
        <input type="text" name="password" value="<?= $user['password'] ?>"> <br> <br>
        <label for="role">Select Role:</label>
    <select name="role">
        <option value="admin" <?= ($user['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
        <option value="user" <?= ($user['role'] == 'user') ? 'selected' : '' ?>>User</option>
    </select> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 
if(isset($_POST['editBtn'])){ 
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
  

    $userRepository->updateUser($id, $username, $email, $password ,$role);
    header("location: dashboard.php");
}
?>

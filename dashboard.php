<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>" . (isset($user['Id']) ? $user['Id'] : "") . "</td>
                     <td>" . (isset($user['Email']) ? $user['Email'] : "") . "</td>
                     <td>" . (isset($user['Username']) ? $user['Username'] : "") . "</td>
                     <td>" . (isset($user['Password']) ? $user['Password'] : "") . "</td>
                     <td><a href='edit.php?id=" . (isset($user['Id']) ? $user['Id'] : "") . "'>Edit</a></td>
                     <td><a href='delete.php?id=" . (isset($user['Id']) ? $user['Id'] : "") . "'>Delete</a></td>
                </tr>
                ";
            }
            

             
             
             ?>
    </table>
</body>
</html>
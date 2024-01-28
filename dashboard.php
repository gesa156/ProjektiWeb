<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<style>
body {
    background-color: rgb(136, 183, 206);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
}

table {
    border-collapse: collapse;
    width: 80%;
    margin-top: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

th {
    background-color: blueviolet;
    color: #ffffff;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 12px;
}

tr:nth-child(even) {
    background-color: #f0f0f0;
}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 12px;
}

a.edit-link,
a.delete-link {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    color: #ffffff;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

td.edit-cell a.edit-link {
    background-color: #2ecc71; }

td.delete-cell a.delete-link {
    background-color: #e74c3c; 
}

a.edit-link:hover,
a.delete-link:hover {
    opacity: 0.9;
}


td a.edit-link,
td a.delete-link {
    background-color: inherit;
    color: inherit;
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

td a.edit-link:hover,
td a.delete-link:hover {
    opacity: 0.9;
    background-color: inherit;
}
</style>



<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
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
        <td>{$user['id']}</td>
        <td>{$user['username']}</td>
        <td>{$user['email']}</td>
        <td>{$user['password']}</td>
        <td class='edit-cell'><a class='edit-link' href='edit.php?id={$user['id']}'>Edit</a></td>
        <td class='delete-cell'><a class='delete-link' href='delete.php?id={$user['id']}'>Delete</a></td>
    </tr>
    ";
}
?>

    </table>
</body>
</html>

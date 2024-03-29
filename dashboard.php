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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .logo {
            margin: 0;
        }

        .navigation a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
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
        background-color: #2ecc71;
    }

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




    .goback-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right:93%;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

       
        .goback-btn:hover {
            background-color: #45a049;
        }


</style>

<body>
    
<header class="header">
        <h2 class="logo">PawPlanet Admin</h2>
        <nav class="navigation">
            <a href="login.php">View Home</a>
        </nav>
        <a href="Login.php" class="goback-btn">Go Back</a>
    </header>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
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
                    <td>{$user['role']}</td>
                    <td class='edit-cell'><a class='edit-link' href='edit.php?id={$user['id']}'>Edit</a></td>
                    <td class='delete-cell'><a class='delete-link' href='delete.php?id={$user['id']}'>Delete</a></td>
                  </tr>
         ";
            }
        ?>
    </table>
</body>
</html>

<?php


if(isset($_POST['loginbtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Please fill the required fields!";
    }else{
        // Validate
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once 'User.php';

        $userFound = false;

        foreach($users as $user){
            if($user['email'] == $email && password_verify($password, $user['password'])){
                $userFound = true;

                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");

                header("location: Home.php");
                exit();
            }
        }

        if(!$userFound){
            echo "Incorrect Username or Password!";
        }
    }
}
?>

<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if( empty($_POST['username']) ||
    empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $user  = new User($id,$username,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}
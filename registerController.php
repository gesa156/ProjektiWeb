<?php
include_once '../repository/userRepository.php';
include_once '../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['registerEmailInput']) ||
    empty($_POST['Username']) || empty($_POST['registerPasswordInput'])){
        echo "Fill all fields!";
    }else{
       
        $email = $_POST['registerEmailInput'];
        $username = $_POST['Username'];
        $password = $_POST['registerPasswordInput'];
        $id = $username.rand(100,999);

        $user  = new User($id,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}
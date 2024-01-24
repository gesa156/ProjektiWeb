<?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['email'] == $email && $user['password'] == $password){
            session_start();
      
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:Home.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
?>
<?php 
class User {
    private $id;
    private $email;
    private $username;
    private $password;
  

    function __construct($id, $email, $username, $password, $role) {
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
   
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

   
}
?>
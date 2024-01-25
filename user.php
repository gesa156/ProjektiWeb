<?php 
class User {
    private $id;
    private $email;
    private $username;
    private $password;
    private $role;  // Add the role property

    function __construct($id, $email, $username, $password, $role) {
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;  // Initialize the role property
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

    function getRole() {
        return $this->role;
    }
}
?>
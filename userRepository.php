<?php

include_once 'databaseConnection.php';

class UserRepository {
    private $connection;

    function __construct() {
        $db = new DatabaseConnection();
        $this->connection = $db->startConnection();
    }

    function insertUser($user) {
        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password =$user->getPassword();
        $role = $user->getRole();

        $sql = "INSERT INTO user (id, username, email, password, role) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);

        $statement->execute([$id, $username, $email, $password, $role]);

        echo "<script>alert('User has been inserted successfully!');</script>";
    }

    public function getAllUsers() {
        $query = "SELECT * FROM user";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getUserById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    function updateUser($id, $username, $email, $password,$role) {
        $conn = $this->connection;


        $sql = "UPDATE user SET username=?, email=?, role=?, password=? WHERE id=?";
        $statement = $conn->prepare($sql);

        $statement->execute([$username, $email, $role, $password, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    function deleteUser($id) {
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";
        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }

    function getRole($r) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE role=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$r]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    
         function checkLogin($email, $password) {
            $conn = $this->connection;
    
            $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
            $statement = $conn->prepare($sql);
            $statement->bindParam(1, $email);
            $statement->bindParam(2, $password);
            $statement->execute();
    
            $result = $statement->fetch(PDO::FETCH_ASSOC);
    
            return $result;
        }
    }
      ?>

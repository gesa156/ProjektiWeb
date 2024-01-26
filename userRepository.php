<?php 
include_once 'databaseConnection.php';

class UserRepository {
    private $connection;

    function __construct(){
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (id, username, email, password) VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $username, $email, $password]);

        echo "<script>alert('User has been inserted successfully!');</script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id, $username, $email, $password){
         $conn = $this->connection;

         $sql = "UPDATE user SET username=?, email=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$username, $email, $password, $id]);

         echo "<script>alert('Update was successful');</script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
   } 
}

 function getRole($r){

    $conn= $this->connection;

    $sql=" SELECT * FROM user WHERE role=?";
    $statement=$conn->prepare($sql);
    $statement->execute();
    $result= $statment->$statement-> fetch(PDO::FETCH_ASSOC);
    return $result;
}

// Example usage:
// $userRepo = new UserRepository;
// $userRepo->updateUser('1111', 'SSS', 'SSS', 'SSS');
?>

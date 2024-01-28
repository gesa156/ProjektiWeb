<?php
class AnimalDatabase {
    private $servername = "localhost";
    private $username = "root"; // Replace with your username
    private $password = ""; // Replace with your password (empty string for XAMPP default)
    private $dbname = "animals";
    private $conn;

    public function __construct() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function addAnimal($name, $category, $description, $image_url) {
        $stmt = $this->conn->prepare("INSERT INTO animal_details (name, category, description, image_url) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $category, $description, $image_url);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteAnimal($id) {
        $stmt = $this->conn->prepare("DELETE FROM animal_details WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function updateAnimal($id, $name, $category, $description, $image_url) {
        $stmt = $this->conn->prepare("UPDATE animal_details SET name = ?, category = ?, description = ?, image_url = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $category, $description, $image_url, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function getAnimals() {
        $sql = "SELECT id, name, category, description, image_url FROM animal_details";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>

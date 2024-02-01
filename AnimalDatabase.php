<?php
class AnimalDatabase {
    private $servername = "localhost";
    private $username = "root"; 
    private $password = "";
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

    public function getAnimalById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM animal_details WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    

    public function updateAnimal($id, $name, $category, $description, $image_url) {
        $stmt = $this->conn->prepare("UPDATE animal_details SET name = ?, category = ?, description = ?, image_url = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $name, $category, $description, $image_url, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function updateFunFact($id, $funfact) {
        $stmt = $this->conn->prepare("UPDATE animal_details SET funfact = ? WHERE id = ?");
        $stmt->bind_param("si", $funfact, $id);
        $stmt->execute();
        $stmt->close();
    }
    public function fetchFacts() {
        $result = $this->conn->query("SELECT id, name, category, description, image_url, funfact FROM animal_details");
        return $result->fetch_all(MYSQLI_ASSOC);
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

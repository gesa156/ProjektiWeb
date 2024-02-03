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

    public function addAnimal($name, $category, $description, $image_url, $last_modified_by) {
        $stmt = $this->conn->prepare("INSERT INTO animal_details (name, category, description, image_url, last_modified_by) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $category, $description, $image_url, $last_modified_by);
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
    

    public function updateAnimal($id, $name, $category, $description, $image_url, $last_modified_by) {
        $stmt = $this->conn->prepare("UPDATE animal_details SET name = ?, category = ?, description = ?, image_url = ?, last_modified_by = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $name, $category, $description, $image_url, $last_modified_by, $id);
        $stmt->execute();
        $stmt->close();
    }
    

    public function getAnimals() {
        $sql = "SELECT id, name, category, description, image_url, last_modified_by FROM animal_details";
        $result = $this->conn->query($sql);
        return $result;
    }
    

 
    public function getLastModifiedBy() {
        $sql = "SELECT last_modified_by FROM animal_details ORDER BY id DESC LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['last_modified_by'];
        }
        return "No modifications made"; 
    }
    
    public function updateFunFact($id, $funfact, $last_modified_by_funfact) {
        $stmt = $this->conn->prepare("UPDATE animal_details SET funfact = ?, last_modified_by_funfact = ? WHERE id = ?");
        $stmt->bind_param("ssi", $funfact, $last_modified_by_funfact, $id);
        $stmt->execute();
        $stmt->close();
    }
    
    public function fetchFacts() {
        $result = $this->conn->query("SELECT id, name, category, description, image_url, funfact, last_modified_by_funfact FROM animal_details");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
    public function __destruct() {
        $this->conn->close();
    }
}

?>
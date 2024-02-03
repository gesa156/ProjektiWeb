<?php

include_once 'databaseConnection.php';
include_once 'donationn.php';


class DonationRepository {
    private $connection;

    function __construct() {
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }

    function insertDonation($donation) {
        $conn = $this->connection;

        $id = $donation->getId();
        $firstname = $donation->getFirstName();
        $lastname = $donation->getLastName();
        $email = $donation->getEmail();
        $amount = $donation->getAmount();
        $expYear = $donation->getExpYear(); // Add this line
        $cvv = $donation->getCvv(); // Add this line

        $sql = "INSERT INTO donation (id, firstname, lastname, email, amount, expYear, cvv) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);

        $statement->execute([$id, $firstname, $lastname, $email, $amount, $expYear, $cvv]);
        echo "<script>alert('Donation has been inserted successfully!');</script>";
    }

    public function getAllDonations() {
        $query = "SELECT * FROM donation";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDonationById($id) {
        $conn = $this->connection;

        $sql = "SELECT * FROM donation WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $donation = $statement->fetch(PDO::FETCH_ASSOC);

        return $donation;
    }
}

?>

<?php
session_start(); // Start the session (if not started already)

if (isset($_POST['donateBtn'])) {
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['amount'])) {
        echo "Please fill in all the required fields!";
    } else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];

   }

        // Check if the logged-in user's email matches the donation email
        if ($_SESSION['username'] && $_SESSION['email'] && $_SESSION['email'] != $email) {
            echo "Donation email must match the logged-in user's email.";
            exit();
        }

        // If all validations pass, proceed with donation processing
        include_once 'DonationRepository.php'; // Replace with the actual filename for donation repository
        include_once 'donationn.php'; // Replace with the actual filename for donation class

        $donation = new Donation(null, $firstname, $lastname, $email, $amount);
        $donationRepository = new DonationRepository();

        $donationRepository->insertDonation($donation);
        echo "Donation successful!";
    }
}
?>

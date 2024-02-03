<?php

class Donation {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $amount;
    private $expYear;
    private $cvv;

    function __construct($id, $firstname, $lastname, $email, $amount, $expYear = null, $cvv = null) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->amount = $amount;
        $this->expYear = $expYear;
        $this->cvv = $cvv;
    }

    function getId() {
        return $this->id;
    }

    function getFirstName() {
        return $this->firstname;
    }

    function getLastName() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAmount() {
        return $this->amount;
    }

    function getExpYear() {
        return $this->expYear;
    }

    function getCvv() {
        return $this->cvv;
    }
}

?>

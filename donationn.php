<?php

class Donation {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $amount;

    function __construct($id, $firstname, $lastname, $email, $amount) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->amount = $amount;
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
}

?>

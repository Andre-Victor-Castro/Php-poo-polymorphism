<?php

include_once ("./IPayment.php");

class CreditCard implements IPayment {
    private $cardNumber;
    private $cardHolderName;
    private $expiryDate;
    private $securityCode;

    public function __construct($cardNumber, $cardHolderName, $expiryDate, $securityCode) {
        $this->cardNumber = $cardNumber;
        $this->cardHolderName = $cardHolderName;
        $this->expiryDate = $expiryDate;
        $this->securityCode = $securityCode;
    }

    public function process() {
        // Overriding
        echo "Processing payment with credit card...\n";
    }

    // Overloading: methods with the same name but different signatures
    public function processWithInstallments($installments) {
        echo "Processing payment with credit card in $installments installments.\n";
    }

    // Getters and setters
    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber) {
        $this->cardNumber = $cardNumber;
    }

    public function getCardHolderName() {
        return $this->cardHolderName;
    }

    public function setCardHolderName($cardHolderName) {
        $this->cardHolderName = $cardHolderName;
    }

    public function getExpiryDate() {
        return $this->expiryDate;
    }

    public function setExpiryDate($expiryDate) {
        $this->expiryDate = $expiryDate;
    }

    public function getSecurityCode() {
        return $this->securityCode;
    }

    public function setSecurityCode($securityCode) {
        $this->securityCode = $securityCode;
    }
}

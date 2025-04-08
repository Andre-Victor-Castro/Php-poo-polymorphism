<?php

include_once ("./IPayment.php");

class BankSlip implements IPayment {
    private $barcode;
    private $dueDate;
    private $amount;

    public function __construct($barcode, $dueDate, $amount) {
        $this->barcode = $barcode;
        $this->dueDate = $dueDate;
        $this->amount = $amount;
    }

    public function process() {
        // Overriding
        echo "Processing payment with bank slip...\n";
    }

    // Overloading: methods with the same name but different signatures
    public function processWithDiscount($discount) {
        echo "Processing payment with bank slip with a discount of R$ $discount.\n";
    }

    public function processWithMessage($message, $amount) {
        echo "Processing bank slip: $message with an amount of R$ $amount.\n";
    }

    // Getters and setters
    public function getBarcode() {
        return $this->barcode;
    }

    public function setBarcode($barcode) {
        $this->barcode = $barcode;
    }

    public function getDueDate() {
        return $this->dueDate;
    }

    public function setDueDate($dueDate) {
        $this->dueDate = $dueDate;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }
}
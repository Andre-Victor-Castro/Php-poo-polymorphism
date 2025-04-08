<?php

include_once ("./CreditCard.php");
include_once ("./BankSplit.php");

// Correct application in real projects.
$creditCard = new CreditCard("1234-5678-9012-3456", "Cleusa", "2024-12-31", "123");
$bankSlip = new BankSlip("123456789012", "2023-12-31", 150.00);

echo "\n ---- Credit Card ---- \n";
$creditCard->process(); // Overriding
$creditCard->processWithInstallments(3); // Overloading

echo "\n ---- Bank Slip ---- \n";
$bankSlip->process(); // Overriding
$bankSlip->processWithDiscount(20.00); // Overloading
$bankSlip->processWithMessage("Early payment", 130.00); // Overloading

// Correct application in real projects.
$payments = [$creditCard, $bankSlip];
foreach ($payments as $payment) {
    $payment->process(); // Polymorphism
}

echo "\n";
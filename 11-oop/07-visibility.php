<?php
// Visibility (public, protected, private)

// Run: php 11-oop/07-visibility.php

// Visibility controls access to properties and methods: public, protected, private

class BankAccount {
    public $accountNumber;
    protected $balance = 1000;
    private $pin = 1234;

    public function getBalance() {
        return $this->balance;
    }

    protected function updateBalance($amount) {
        $this->balance += $amount;
    }

    private function validatePin($pin) {
        return $pin === $this->pin;
    }
}

$account = new BankAccount();
$account->accountNumber = "123456";
echo "Account: " . $account->accountNumber . "\n";
echo "Balance: " . $account->getBalance() . "\n";
?>

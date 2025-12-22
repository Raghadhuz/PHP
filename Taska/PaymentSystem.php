<?php
abstract class Payment {
    abstract public function pay();
}
interface Refundable {
    public function refund();
}
class PayPal extends Payment implements Refundable {
    public function pay() {
        return "Paying using PayPal";
    }

    public function refund() {
        return "Refunding PayPal payment";
    }
}
class CreditCard extends Payment implements Refundable {
    public function pay() {
        return "Paying using Credit Card";
    }

    public function refund() {
        return "Refunding Credit Card payment";
    }
}
class Crypto extends Payment implements Refundable {
    public function pay() {
        return "Paying using Crypto";
    }

    public function refund() {
        return "Refunding Crypto payment";
    }
}
?>

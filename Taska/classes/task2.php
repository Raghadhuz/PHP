<?php
class message {
    $name = "Raghad";
    public function showMessage() {
        echo "Hello All, I am" . $this->name . "!";
    }
}
$obj = new message();
echo $obj->showMessage();

?>
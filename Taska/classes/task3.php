<?php
class Factorial {

    public function calculate($number) {
        $result = 1;

        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
$fact = new Factorial();
echo $fact->calculate(5); 
?>

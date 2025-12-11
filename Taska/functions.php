<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 13;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
}
for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
}
echo $isPrime ? "$number is prime" : "$number is not prime";
echo "<br>";
$word = "remove";
$reversed = strrev($word);

echo $reversed;
echo "<br>";
$str = "remove";
if ($str === strtolower($str)) {
    echo "Your String is Ok";
} else {
    echo "Your String is not all lowercase";
}
echo "<br>";
$x = 12;
$y = 10;
$temp = $x;
$x = $y;
$y = $temp;
echo "x = $x, y = $y";
echo "<br>";
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;   
        $temp = intdiv($temp, 10);
    }

    if ($sum == $num) {
        echo "$num is Armstrong Number";
    } else {
        echo "$num is Not an Armstrong Number";
    }
}
isArmstrong(407);
echo "<br>";
function isPalindrome($str) {

    // Remove spaces, punctuation, and make lowercase
    $clean = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));

    // Reverse the cleaned string
    $reverse = strrev($clean);

    if ($clean === $reverse) {
        echo "Yes it is a palindrome";
    } else {
        echo "No, it is not a palindrome";
    }
}

isPalindrome("Eva, can I see bees in a cave?");
eccho "<br>";
function removeDuplicates($arr) {
    return array_unique($arr);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);

print_r($result);

?>
</body>
</html>
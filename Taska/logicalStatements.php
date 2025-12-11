<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year = 2013; 
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This year is a leap year";
    } else {
    echo "This year is not a leap year";
    }
    echo "<br>";
    $temperature =30;
    if($temperature>20){
        echo "It's summertime";
    }
     elseif($temperature<=20)
        {
            echo "It's wintertime";
        }
    echo "<br>";
    $integer1 = 2;
    $integer2 = 4;
    $sum = $integer1 + $integer2;
    $sum2 = ($integer1 + $integer2) * 3;
    if($integer1!=$integer2){
        echo $sum;
    }
    elseif($integer1==$integer2){
            echo $sum2;
        }
    echo "<br>";
    $num1 = 10;
    $num2 = 20;
    if($num1+$num2==30){
        echo "30";
    }
    else{
        echo "false";
    }
    echo "<br>";
    if($num1%3==0){
        echo "Multiple of 3";
    }
    else{
            echo "false";
        }
    echo "<br>";
    $value = 15;
    if($value>=20&&$value<=50){
        echo "true";
    }
    else{
            echo "false";
        }
    echo "<br>";
    $arr = array(2, -4, 5);
    $max = max($arr);
    echo "The largest number is: " . $max;
    echo "<br>";
    $addition =$num1+$num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;
    echo "<br>";
    $age = 25;
    if($age<=18){
        echo "eligible to vote";
    }
    else{
            echo "not eligible to vote";
        }
    echo "<br>";
    switch ($num1) {
        case ($num1 < 0):
            echo "negtive";
            break;
        case ($num1 > 0):
            echo "positive";
            break;
        case ($age == 0:)
            echo "zero";
            break;
        default:
            echo "not a number";
    }
    echo "<br>";
    $grades = array(60,86,95,63,55,74,79,62,50);
    $avrage = array_sum($grades) / count($grades);
    switch (true) {
        case ($avrage >= 90):
            echo "A";
            break;
        case ($avrage >= 80):
            echo "B";
            break;
        case ($avrage >= 70):
            echo "C";
            break;
        case ($avrage >= 60):
            echo "D";
            break;
        default:
            echo "F";
    }
    ?>
</body>
</html>
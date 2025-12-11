<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1;$i<=10;$i++){
        echo $i."-";
    }
    echo "<br>";
    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
    }
    echo "The total sum of integers from 0 to 30 is: $sum";
    echo "<br>";
    $letters = ["A", "B", "C", "D", "E"];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < 4 - $i) {
            echo $letters[$i] . " ";
        } else {
            echo $letters[$i] . " ";
        }
    }
    echo "<br>";
}
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {

        if ($i == 1) { 
            echo "1 ";
        }
        elseif ($i == 2) { 
            echo ($j <= 3) ? "1 " : "2 ";
        }
        elseif ($i == 3) { 
            echo ($j <= 2) ? "1 " : "3 ";
        }
        elseif ($i == 4) {
            echo ($j == 1) ? "1 " : "4 ";
        }
        else { 
            echo "5 ";
        }

    }
    echo "<br>";
}
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j==$i){
            echo "$i";
        }else{
            echo 0;
        }
    }
    }
    echo "<br>";
    $number6 = 5; 
    $factorial = 1;
    for ($i = 1; $i <= $number6; $i++) {
    $factorial *= $i; 
    }
    echo "The factorial of $number6 is: $factorial";
    echo "<br>";
    $a = 0;
$b = 1;

echo "$a, $b";

for ($i = 2; $i < 10; $i++) {  
    $next = $a + $b;
    echo ", $next";
    $a = $b;
    $b = $next;
}
echo "<br>";
echo '<table border="1" cellpadding="3px" cellspacing="0px">';

for ($row = 1; $row <= 6; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {
        $result = $row * $col;
        echo "<td>$row * $col = $result</td>";
    }

    echo "</tr>";
}

echo "</table>";
echo "<br>";
for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz ";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz ";
    }
    else {
        echo "$i ";
    }

}
echo "<br>";
$n = 5; 
$num = 1;

for ($i = 1; $i <= $n; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }

    echo "<br>";
}
echo "<br>";
$letters = range('A', 'E');

// ---- TOP PART (increasing) ----
for ($i = 0; $i < 5; $i++) {

    // print spaces
    for ($s = 0; $s < 4 - $i; $s++) {
        echo "&nbsp; ";
    }

    // print letters
    for ($j = 0; $j <= $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}


// ---- BOTTOM PART (decreasing) ----
for ($i = 3; $i >= 0; $i--) {

    // print spaces
    for ($s = 0; $s < 4 - $i; $s++) {
        echo "&nbsp; ";
    }

    // print letters
    for ($j = 0; $j <= $i; $j++) {
        echo $letters[$j] . " ";
    }

    echo "<br>";
}


    ?>
</body>
</html>
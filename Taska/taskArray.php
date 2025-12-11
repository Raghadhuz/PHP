<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colors = array("Red", "Green", "White");
    echo "<p> The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>";
    echo "<ul>
        <li>$colors[0]</li>
        <li>$colors[1]</li>
        <li>$colors[2]</li>
        </ul>";
        echo "<br>";
        $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
        foreach($cities as $country => $capital){
            echo "The capital of $country is $capital <br>";
        }
        echo "<br>";
        $color = array (4 => 'white', 6 => 'green', 11=> 'red');
        echo $color[4];
        echo "<br>";
        $numbers = [1, 2, 3, 4, 5];
        array_splice($numbers,3,0,"$");
        print_r($numbers);
        echo "<br>";
        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);
        print_r($fruits);
        echo "<br>";
        $temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        $avg = array_sum($temperature)/count($temperature);
        echo "Average Temperature is : " . $avg;
        echo "<br>";
        sort($temperature);
        echo "List of seven lowest temperatures : " . $temperature[0] . ", " . $temperature[1] . ", " . $temperature[2] . ", " . $temperature[3] . ", " . $temperature[4] . ", " . $temperature[5] . ", " . $temperature[6];
        echo "<br>";
        echo "List of seven highest temperatures : " . $temperature[count($temperature)-1] . ", " . $temperature[count($temperature)-2] . ", " . $temperature[count($temperature)-3] . ", " . $temperature[count($temperature)-4] . ", " . $temperature[count($temperature)-5] . ", " . $temperature[count($temperature)-6] . ", " . $temperature[count($temperature)-7];
        echo "<br>";
        $array1 = array("color" => "red", 2, 4);
        $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
        $result = array_merge($array1, $array2);
        print_r($result);
        echo "<br>";
        $Colors = array("red","blue", "white","yellow");
        foreach($Colors as $value){
            echo strtoupper($value) . "<br>";
        }
        echo "<br>";
        $COLORS = array("RED","BLUE", "WHITE","YELLOW");
        foreach($COLORS as $value){
            echo strtolower($value) . "<br>";
        }
        echo "<br>";
        for($i=200;$i<=250;$i++){
            if($i%4==0){
                echo $i . ", ";
            }
        }
        echo "<br>";
         $words =  array("abcd","abc","de","hjjj","g","wer");
         foreach($words as $word){
            if(strlen($word)==1)
                echo "The shortest array length is: 1 ";
         }
   
        $maxLength = max(array_map('strlen', $words));
        echo "The longest array length is: " . $maxLength;
        echo "<br>";
        $start =11;
        $end = 20;
        $randomNumbers = range($start, $end);
        shuffle($randomNumbers);
        $result = array_slice($randomNumbers, 0, 10);
        print_r($result);
        echo "<br>";
        $array1 = array( 2, 0, 10, 12, 6) ;
        sort($array1);
        foreach($array1 as $value){
            if($value>0){
                echo $value;
                break;
            }
        }
        echo "<br>";


    ?>
</body>
</html>
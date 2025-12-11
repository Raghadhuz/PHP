<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "from jordan, hello world!";
    echo strtoupper($string);
    echo "<br>";
    echo strtolower($string); 
    echo "<br>";
    strtoupper($string[0]); 
    echo $string;
    ucwords($string);
    echo $string;
    echo "<br>";
    $date ="085119";
    $newDate = substr($date, 0, 2) . ":" . substr($date, 2, 2) . ":" . substr($date, 4, 2);
    echo $newDate;
    echo "<br>";
    $find = "I am a full stack developer at orange coding school";
    $search = "orange";
    if (strpos($find, $search) !== false) {
        echo  $search;
    } else {
        echo "not found";
    }
    echo "<br>";
    $url = "www.orange.com/index.php";
    echo basename($url);
    $email = "info@orange.com";
    echo "<br>";
    $username = strstr($email, "@", true);
    echo $username;
    echo "<br>";
    $lastofstring = "info@orange.com";
    echo substr($lastofstring, -3);
    echo "<br>";
    $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $shuffled = str_shuffle($characters);
    $password = substr($shuffled, 0, 10);
    echo $password;
    echo "<br>";
    $change = "That new trainee is so genius";
    echo str_replace("That", "Our", $change);
    echo "<br>";
    $str1 ="dragonball";
    $str2 ="dragonboll";
    $len  min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $len; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            echo "First difference at position " . ($i + 1) . ": '" . $str1[$i] . "' vs '" . $str2[$i] . "'";
            break;
        }
    }
    echo "<br>";
    $stringt = "Twinkle, twinkle, little star.";
    $arrayt = explode(",", $stringt);
    var_dump($arrayt);
    echo "<br>";
    $char = 'a';
    if ($char == 'z') {
    echo 'a';
    } else {
    echo chr(ord($char) + 1);
    }
    echo "<br>";
    $original = "The brown fox";
    $insert = "quick ";
    $position = strpos($original, " ") + 1;
    $result = substr($original, 0, $position) . $insert . substr($original, $position);
    echo $result;
    echo "<br>";
    $string0 = "0000657022.24";
    $result0 = ltrim($string0, "0");
    echo $result0;
    echo "<br>";
    $stringr = "The quick brown fox jumps over the lazy dog";
    $resultr = str_replace("fox", "", $stringr);
    echo $resultr;
    echo "<br>";
    $string- = "The quick brown fox jumps over the lazy dog---";
    $result- = rtrim($string-, "-");
    echo $result-;
    echo "<br>";
    $removechar = '\"\1+2/3*2:2-3/4*3';
    $resultnum = preg_replace('/[^0-9]/', ' ', $removechar);
    $resultnum = trim(preg_replace('/\s+/', ' ', $resultnum));
    echo $result;
    echo "<br>";
    $string5 = "The quick brown fox jumps over the lazy dog";
    $words5 = explode(" ", $string5);         
    $firstFive = array_slice($words5, 0, 5);  
    echo implode(" ", $firstFive); 
    echo "<br>";
    $string, = "2,543.12";
    $result, = str_replace(",", "", $string,);
    echo $result,;
    echo "<br>";
    for ($ch = 'a'; $ch <= 'z'; $ch++) {
    echo $ch . " ";
    }
    echo "<br>";
    ?>
</body>
</html>
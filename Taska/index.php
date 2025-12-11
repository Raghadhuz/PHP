<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "Hello from PHP!";
        // $name ="Raghad";
        // echo "<br>"; 
        // echo "welcome to my website, $name!";
        // echo "<br>";
        // $age = 22;
        // echo "My name is $name and I am $age years old.";
        // echo "<br>";
        // $array = [1, 2, 3, 4, 5];
        // print_r($array);
        // echo "<br>";
        // print_r("My name is $name and I am $age years old.");
        // echo"<br>";
        // define("x","this is the define statement");
        // echo x;
        // echo "<br>";
        // const y = "this is the const statement";
        // echo y;
        // echo "<br>";
        // $num0 = 20;
        // $num1 = 18;
        // $num2 = 60;
        // if($num0 > $num1 && $num0 < $num2){
        //     echo "$num0 is greater than $num1 and less than $num2";
        // }
        // echo "<br>";
        // $info = [
        //     "name" => "Raghad",
        //     "age" => 22,
        //     "city" => "Amman"
        // ];
        // echo $info["name"];
        // echo "<br>";
        // print_r($info);
        // echo "<br>";
        // $books= [
        //    array(
        //         "Book One",
        //         "Author One",
        //         10.99 
        //         ),
        //       array(
        //           "Book Two",
        //           "Author Two",
        //           12.99 
        //         ),
        //         array(
        //             "Book Three",
        //             "Author Three",
        //             9.99 
        //         )
        //         ];
        //         echo $books [1][1];
        //         echo "<br>";
        //         $myname = "Raghad Huzayen";
        //         echo strlen($myname);
        //         echo "<br>";
        //         echo substr($myname, 0, 6);
        //         echo "<br>";
        //         echo strtoupper($myname);
        
        $number = 10;
        if($number>0)
            echo "$number is positive";
        elseif($number<0)
            echo "$number is negative"; 
        else
            echo "$number is zero";
        echo "<br>";
        $fruit="apple";
        switch($fruit){
            case "apple":
                echo "This is an apple";
                break;
            case "banana":
                echo "This is a banana";
                break;
            case "orange":
                echo "This is an orange";
                break;
            default:
                echo "Unknown fruit";
        }
        echo "<br>";
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        foreach($numbers as $num){if($num % 2 == 0)
            echo "$num" . " ";
        }
        $favorateMovies = array("Inception", "The Dark Knight", "Interstellar", "The Matrix", "Pulp Fiction");
        print_r($favorateMovies);
        echo "<br>";
        for($i=0;$i<=10;$i++){
            if($i==5)
                continue;
            elseif($i==8)
                break;
            echo "$i ";
        }
        
    ?>
</body>
</html>
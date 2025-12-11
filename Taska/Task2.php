<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $MRA = "Salary of Mr.A is";
    $MRB = "Salary of Mr.B is";
    $MRC = "Salary of Mr.C is";
    $salaryA = "1000$";
    $salaryB = "1200$";
    $salaryC = "1400$";
    echo "<table border='1'>
    <tr>
    <td>
    $MRA
    </td>
    <td>
    $salaryA
    </td>
    </tr>
    <tr>
    <td>
    $MRB
    </td>
    <td>
    $salaryB
    </td>
    </tr>
    <tr>
    <td>
    $MRC
    </td>
    <td>
    $salaryC
    </td>
    </tr>
    </table>"
    ;
    echo "<br>";
    $filename = "Task2.php";
    if (file_exists($filename)) {
        $lastModified = filemtime($filename);
        echo "Filename : $filename <br>
        Last modified time : " . date("F d Y H:i:s.", $lastModified);
    }
    echo "<br>";
    
    if (file_exists($filename)) {
        $fileSize = filesize($filename);
        $lines = file($filename);
        echo "number of lines : " . count($lines) . "<br>";
    }
    ?>
</body>
</html>
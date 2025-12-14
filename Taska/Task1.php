<!-- 1. Write a PHP script to get the PHP version and configuration information.

2. Write a PHP script to display the following strings.
 Sample String:
'Tomorrow I 'll learn PHP global variables.'
'This is a bad command: del c:\.'
Expected Output:
Tomorrow I'll learn PHP global variables.
This is a bad command: del c:*. *


3. Create a simple HTML form and accept the user’s name and display the name through a PHP echo statement.

4. Write a PHP script to get the client's IP address.

5. Write a PHP script to get the current file name.
6. Write a PHP script, which will return the following components of the URL https://www.w3schools.com/php/default.asp.

7. Write a PHP script, which changes the color of the first character of a word.
Sample string: PHP Tutorial.

8. Write a PHP script to redirect a user to a different page.
 Expected output: Redirect the user to https://www/. w3schools.com/ -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
    //phpinfo();
    echo "<br>";
    $sampleString1 = 'Tomorrow I \'ll learn PHP global variables.';
    $sampleString2 = 'This is a bad command: del c:\.';
    echo $sampleString1;    
    echo "<br>";
    echo $sampleString2;
    echo "<br>";

    "<form method='post' action=''>
        Name: <input type='text' name='username'>
        <input type='submit'>
      </form>";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = htmlspecialchars($_POST['username']);
         echo "Hello, " . $name};
      echo "<br>";

      echo $_SERVER['REMOTE_ADDR'];
      echo "<br>";

      echo $_SERVER['PHP_SELF'];
      echo "<br>";

      echo $_SERVER['REQUEST_URI'];
      echo "<br>";

      $string = "PHP Tutorial";
      $firstChar = substr($string, 0, 1);
      $coloredChar = "<span style='color:red;'>$firstChar</span>";
      $modifiedString = $coloredChar . substr($string, 1);
      echo $modifiedString;
      echo "<br>";

      

    ?>
 </body>
 </html>
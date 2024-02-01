<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-9.4</title>

</head>
<body>
<?php
echo "<h2>PHP program to swap two given numbers</h2>";
$num1 = 100;
$num2 = 1000;
print ("Number 1 original: " . $num1 . "</br>");
print ("Number 2 original: " . $num2 . "</br>");
  
$temp_num = $num1;
$num1 = $num2;
$num2 = $temp_num;
echo"<br>";
print ("Number 1 updated: " . $num1 . "</br>");
print ("Number 2 updated: " . $num2 . "</br>");
?> 
</body>
</html>



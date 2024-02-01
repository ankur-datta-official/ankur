<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-7.3</title>
</head>
<body>
<?php
/*
Write a PHP script to find the price of Car company and model using the switch case. (Company either from 
a. Maruti- Ertiga, swift
b. Hyundai- i20,creta
c. Kia- Seltos, carens)
*/

$company = "Hyundai";
$model = "i20";

echo "<h3>---Car Company & Model With Price---</h3>";

switch($company)
{
    case ("Hyundai"):
        switch($model)
        {
            case ("i20"):
                echo "<p>Hyundai i20 price is = 8 lack</p>";
                break;
            case ("creta"):
                echo "<p>Hyundai creta price is = 6 lack</p>";
                break;
        }
}

?>
</body>
</html>



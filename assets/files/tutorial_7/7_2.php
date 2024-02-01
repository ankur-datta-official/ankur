<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-7.2</title>
</head>
<body>
<?php
/*
Write PHP Script to find the maximum number out of three given numbers(using else if ladder).
*/

$num_1 = 30;
$num_2 = 20;
$num_3 = 10;

echo "<h2>---Finding The Maximum Number Out Of Three Numbers---</h2>";

if ($num_1 > $num_2 && $num_2 > $num_3) 
{
    echo "<p>First Number: $num_1 is the maximum number.</p>";
} 
else if ($num_2 > $num_3) 
{
    echo "<p>Second Number: $num_2 is the maximum number.</p>";
}
else 
{
    echo "<p>Third Number: $num_3 is the maximum number.</p>";
}

?>
</body>
</html>
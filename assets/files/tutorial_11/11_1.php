<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-11.1</title>
</head>
<body>
<?php

$a1 = array(array(1, 2),array(3, 4));
$a2 = array(array(5, 6),array(7, 8));
$ans = array(array(0, 0),array(0, 0));

echo "Matrix one is: ((1,2),(3,4))";
echo "<br>";
echo "Matrix two is: ((5,6),(7,8))";
echo "<br>";

for ($i = 0; $i <= 1; $i++){
    for($j = 0; $j <= 1; $j++){
        $ans[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}

echo "The result of adding two 2x2 matrices: <br>";
for ($i = 0; $i <= 1; $i++){
    for($j = 0; $j <= 1; $j++){
        echo $ans[$i][$j] . " ";
    }
    echo "<br>";
}

?>
</body>
</html>

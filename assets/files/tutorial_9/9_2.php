<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-9.2</title>


</head>
<body>
	<h2>PHP function to test which number is greater than other</h2>
    <p>Trinary values are 1, 10 & 100:</p>
<?php
function trinary_Test($n){
$r = $n > 100
? "greater than 100"
: ($n > 10
? "greater than 10"
: ($n >1
? "greater than 1"
: "Input a number atleast greater than 1!")); 
echo $n." is ".$r."\n";
}
trinary_Test(2);
echo"<br>";
trinary_Test(30);
echo"<br>";
trinary_Test(400);
?>

</body>
</html>










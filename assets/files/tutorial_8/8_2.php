<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8.2</title>


</head>
<body>
    <div>
		<h2>PHP program to print the sum of digits</h2>

		<form action="" method="post">
            	<input type="number" name="n" id="n" placeholder="Please enter a Number " />
            	<input type="submit" name="submit" id="submit" value="Submit" />
		</form>

		<div>
            <br>
<?php
$result = '';
if (isset($_POST['submit'])) 
{
    $n = $_POST['n'];
    if (!empty($n)) {
        $result = sum($n);
    }
}

function sum($n)
{
$x = $n;
$sum = 0;
$m = NULL;
echo "The sum of ", $x, " digits is = ";

// It will calculate the sum of each digit of the input number
while ($x > 0) {
    $m = $x % 10;
    $m = intval ($m);
    $sum = $sum + $m;
    $x = $x / 10;
    $x = intval ($x);
}

// It will print the final output;
echo $sum;
}
?>
		</div>
	</div>
</body>
</html>







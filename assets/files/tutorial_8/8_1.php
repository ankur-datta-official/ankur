<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8.1</title>


</head>
<body>
    <div>
		<h2>PHP Script to print N number of Fibonacci series</h2>

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
        $result = Fibonacci($n);
    }
}

function Fibonacci($n){

	$num1 = 0;
	$num2 = 1;

	$counter = 0;
    echo "The Fibonacci Seris of $n is: ";
	while ($counter < $n){
		echo ' '.$num1;
		$num3 = $num2 + $num1;
		$num1 = $num2;
		$num2 = $num3;
		$counter = $counter + 1;
	}
}

?>
		</div>
	</div>
</body>
</html>



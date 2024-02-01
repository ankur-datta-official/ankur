<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8.3</title>


</head>
<body>
    <div id="page-wrap">
		<h2>PHP program to print N prime numbers</h2>

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
        $result = prime($n);
    }
}

function prime($n)
{
$x = $n;
echo "------The prime numbers from 1 to ".$x." are------\n\n";

for ($i = 0; $i < $x; $i++) {
    
    if ($i == 1 || $i == 0)
        continue;
    
    $f = 1;
    
    for ($j = 2; $j < intval($i / 2) + 1; $j++) {
        if ($i % $j == 0) {
            $f = 0;
            break;
        }
    }
    
    if ($f == 1)
        echo $i." ";
}
echo "\n";
}
?>
		</div>
	</div>
</body>
</html>










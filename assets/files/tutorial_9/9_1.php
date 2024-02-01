<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-9.1</title>


</head>
<body>
    <div>
		<h2>A PHP function to calculate the factorial of a number</h2>

		<form action="" method="post">
            	<input type="number" name="n" id="n" placeholder="Please enter a Number " />
            	<input type="submit" name="submit" id="submit" value="Submit" />
		</form>

		<div>
            <br>
<?php
function factorial_of_a_number($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial_of_a_number($n-1);
    }
}

$result = '';
if (isset($_POST['submit'])) 
{
    $n = $_POST['n'];
    if (!empty($n)) {
        $result = factorial_of_a_number($n);
        echo "The factorial of $n is: $result";
    }
}
?>
		</div>
	</div>
</body>
</html>






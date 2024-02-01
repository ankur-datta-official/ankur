<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-9.5</title>


</head>
<body>
    <div>
		<h2>A PHP function to called vowelCount</h2>

		<form action="" method="post">
            	<input type="text" name="n" id="n" placeholder="Please enter a Text " />
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
        $result = $n;
    }
}
echo "The string is: $result";
echo "<br>";
$text = $result;
countVowel($text);

function countVowel($text)
{
    $str = strtolower($text);
    $countV = 0;
    $len = strlen($text);
    for ($i = 0; $i < $len; $i++) 
    {
        if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') 
        {
            $countV += 1;
        }
    }
    echo "Here the number of Vowels is: $countV \n";
}

?>
		</div>
	</div>
</body>
</html>










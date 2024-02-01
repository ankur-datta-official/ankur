<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-8.4</title>
</head>
<body>
    <h2>PHP Program for Bubble sorting</h2>
<?php
$numbers = array(11,22,44,19,4,5,33,16,8,55);
$array_size = count($numbers);

echo "Numbers before sort: ";
for ( $i = 0; $i < $array_size; $i++ )
   echo " $numbers[$i]";
echo"<br>";

for ( $i = 0; $i < $array_size; $i++ )
{
   for ($j = 0; $j < $array_size; $j++ )
   {
      if ($numbers[$i] < $numbers[$j])
      {
         $temp = $numbers[$i];
         $numbers[$i] = $numbers[$j];
         $numbers[$j] = $temp;
      }
   }
}

echo "Numbers after sort: ";
for( $i = 0; $i < $array_size; $i++ )
   echo " $numbers[$i]";
echo"<br>";
?>
</body>
</html>



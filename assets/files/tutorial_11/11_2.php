<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-11.2</title>
</head>
<body>
<?php

$animals = array(
    "dog" => "barks",
    "cat" => "meows",
    "cow" => "moos",
    "bird" => "chirps"
);

echo "Animals and their sounds: <br>";

foreach($animals as $animal => $sound)
{
    echo $animal . " -> " . $sound . "<br>";
}

?>
</body>
</html>

<?php

$name = $_POST['name'];
$hobbies = $_POST['hobbies'];

if (empty($name) && empty($hobbies)) {
    echo "Name and hobbies are required fields.";
    exit();
}

echo "Name: " . $name . "<br>";
echo "Hobbies: ";
foreach ($hobbies as $hobby) {
    echo $hobby . ", ";
}

?>
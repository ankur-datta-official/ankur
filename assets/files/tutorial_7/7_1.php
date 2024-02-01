<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-7.1</title>
</head>
<body>
<?php
/*
Write PHP Script to calculate total marks of student and display grade.
(5 subjects using Switch case)
*/
print("Students Mark Details: \n");
$mark1 = 90;
$mark2 = 95;
$mark3 = 85;
$mark4 = 80;
$mark5 = 88;

$total = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;

$grade = ($total / 500) * 100;

echo "<p>Total Mark is: $total</p>";
echo "<p>Obtained Percentage is: $grade</p>";

switch($grade)
{
    case (($grade >= 90) && ($grade <= 100)):
        echo "Grade is A+ !";
        break;
    case (($grade >= 80) && ($grade < 90)):
        echo "Grade is A !";
        break;
    case (($grade >= 70) && ($grade < 80)):
        echo "Grade is B+ !";
        break;
    case (($grade >= 60) && ($grade < 70)):
        echo "Grade is B !";
        break;
    case (($grade >= 50) && ($grade < 60)):
        echo "Grade is c !";
        break;
    case (($grade >= 40) && ($grade < 50)):
        echo "Grade is D !";
        break;
    default:
    echo "Grade is F !";
}

?>
</body>
</html>
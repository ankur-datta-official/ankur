<html>
<head>
    <title>Tutorial-11.3</title>
</head>
<body>
    <h2>User Input Form</h2>
    <form action="submit.php" method="POST">
        Name: <input type="text" name="name" required>
        <br><br>
        Hobbies: 
        <input type="checkbox" name="hobbies[]" value="Reading">Reading
        <input type="checkbox" name="hobbies[]" value="Writing">Writing
        <input type="checkbox" name="hobbies[]" value="Sports">Sports
        <input type="checkbox" name="hobbies[]" value="Painting">Painting
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


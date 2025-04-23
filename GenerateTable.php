<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form method="post">
    Enter a number: <input type="number" name="num">
    <br><br>
    <input type="submit" value="Show Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["num"];
    
    echo "<h2>Multiplication Table of $number</h2>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result <br>";
    }
}
?>



</body>
</html>
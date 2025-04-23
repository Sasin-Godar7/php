<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Multiplication Table Fieldset -->
     <fieldset style="width: 300px; background-color: lightyellow; border: 2px solid black; padding: 10px;">
        <legend>Multiplication Table</legend>

        <form method="post" action="">
            <input type="hidden" name="form_type" value="multiplication_table">
            Enter a number: <br>
            <input type="number" name="num"><br><br>
            <input type="submit" value="Show Table">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'multiplication_table') {
            $number = $_POST["num"];

            if (is_numeric($number)) {
                echo "<h3>Multiplication Table of $number</h3>";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $number * $i;
                    echo "$number x $i = $result <br>";
                }
            } else {
                echo "<strong>Please enter a valid number.</strong>";
            }
        }
        ?>
    </fieldset>
    
</body>
</html>
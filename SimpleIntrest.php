<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest & Multiplication Table</title>
</head>
<body>

    <!-- Simple Interest Fieldset -->
    <fieldset style="width: 300px; background-color: lightblue; border: 2px solid black; padding: 10px;">
        <legend>Simple Interest Calculator</legend>

        <form method="post" action="">
            <input type="hidden" name="form_type" value="interest_calculation">
            Enter the rate of interest: <br>
            <input type="text" name="rate"><br><br>

            Enter the time: <br>
            <input type="text" name="time"><br><br>

            Enter the principal: <br>
            <input type="text" name="principal"><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'interest_calculation') {
            $rate = $_POST['rate'];
            $time = $_POST['time'];
            $principal = $_POST['principal'];

            if (is_numeric($rate) && is_numeric($time) && is_numeric($principal)) {
                $simple_interest = ($principal * $rate * $time) / 100;
                echo "<br>The simple interest is: <strong>$simple_interest</strong>";
            } else {
                echo "<br><strong>Please enter valid numbers.</strong>";
            }
        }
        ?>
    </fieldset>

    <br><br>

   

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo"<form method='post' action='tables.php'>";
   echo"enter the rate of interest";
   
    echo"<input type='text' name='rate'>";
    echo"<br>","<br>";
    echo"enter the time";
    echo"<input type='text' name='time'>";
    echo"<br>","<br>";
    echo"enter the principal";
    echo"<input type='text' name='principal'>";
    echo"<br>","<br>";

    echo"<input type='submit' name='submit' value='submit'>";
    echo"</form>";
    if(isset($_POST['submit']))
    {
        $rate = $_POST['rate'];
        $time = $_POST['time'];
        $principal = $_POST['principal'];

        // Calculate simple interest
        $simple_interest = ($principal * $rate * $time) / 100;

        // Display the result
        echo "The simple interest is: " . $simple_interest;
    }

    ?>
   
    <br>

    

    
</body>
</html>
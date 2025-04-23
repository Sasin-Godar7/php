<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Tempture.php" method="get">
           <label for="temp">Emter A Tempture : </label>
            <input type="number" name="temp" id="temp" required><br><br>
            <label for="unit">Select A Unit : </label>
            <input type="radio" name="unit" id="unit" value="Celsius" required>
            <label for="unit">Celsius To Fahrenheit</label>
            <input type="radio" name="unit" id="unit" value="Fahrenheit" required>
            <label for="unit">Fahrenheit To Celsius</label><br><br>


            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
    </form>
    <?php
    if(isset($_GET["temp"]) && isset($_GET["unit"])){
        $temp = $_GET["temp"];
        $unit = $_GET["unit"];
        
        if($unit == "Celsius"){
            $result = ($temp * 9/5) + 32;
            echo "$temp °C is equal to $result °F";
        } else if($unit == "Fahrenheit"){
            $result = ($temp - 32) * 5/9;
            echo "$temp °F is equal to $result °C";
        } else {
            echo "Invalid unit. Please use 'Celsius' or 'Fahrenheit'.";
            
        }
    }
    ?>
</body>
</html>

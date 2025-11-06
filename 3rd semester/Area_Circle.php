
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="circle.php" method="post">
            <label for="radius">Radius : </label>
            <input type="number" name="radius" id="radius" required><br><br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
    </form>
    <?php
    if(isset($_POST["radius"])){
        $radius = $_POST["radius"];

        $area = pi() * pow($radius, 2);
        echo "The area of the circle is: " . $area;
    } else {
        echo "Please provide a radius.";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
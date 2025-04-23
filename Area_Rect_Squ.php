<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Form</title>
</head>
<body>
    <form action="Area_Rect_Squ.php" method="get">
        <h3>Rectangle</h3>
        <label for="length">Length:</label>
        <input type="number" name="length" id="length" required><br><br>

        <label for="width">Width:</label>
        <input type="number" name="width" id="width" required><br><br>

        <h3>Square</h3>
        <label for="side">Side:</label>
        <input type="number" name="side" id="side" required><br><br>

        <button type="submit">Result</button> &nbsp;&nbsp;
        <button type="reset">Reset</button>
    </form>

    <?php
    if (isset($_GET["length"]) && isset($_GET["width"])) {
        $length = $_GET["length"];
        $width = $_GET["width"];
        $areaRectangle = $length * $width;
        echo "The area of the rectangle is: " . $areaRectangle . "<br>";
    }

    if (isset($_GET["side"])) {
        $side = $_GET["side"];
        $areaSquare = $side * $side;
        echo "The area of the square is: " . $areaSquare;
        
    }
    ?>
</body>
</html>
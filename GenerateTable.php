<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
<form method="post" action="tables.php">
   
echo"Enter the Number to generate the table";
echo"<input type='text' name='number'>";
echo"<br>","<br>";
echo"<input type='submit' name='submit' value='submit'>";
echo"</form>";
// if(isset($_POST['submit']))
// {
//     $number = $_POST['number'];
//     echo "<table border='1'>";
//     echo "<tr><th>Number</th><th>Table</th></tr>";
//     for($i=1; $i<=10; $i++)
//     {
//         echo "<tr>";
//         echo "<td>$number</td>";
//         echo "<td>" . ($number * $i) . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// }

?>


</body>
</html>
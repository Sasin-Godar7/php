<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--reading student record in table form-->
    <fieldset style="width: 300px; border: 2px solid black; padding: 10px;">
        <legend>Student Record</legend>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Grade</th>
            </tr>
            <?php
            if(file_exists("studentrecord.txt")) {
                $file = fopen("studentrecord.txt", "r");
                while(!feof($file)) {
                    $line = fgets($file);
                    if(trim($line) != "") {
                        list($name, $age, $grade) = explode(",", $line);
                        echo "<tr>";
                        echo "<td>" . trim(str_replace("Name: ", "", $name)) . "</td>";
                        echo "<td>" . trim(str_replace("Age: ", "", $age)) . "</td>";
                        echo "<td>" . trim(str_replace("Grade: ", "", $grade)) . "</td>";
                        echo "</tr>";
                    }
                }
                fclose($file);
            } else {
                echo "<tr><td colspan='3'>No records found.</td></tr>";
            }
            ?>
        </table>
    
    


</body>
</html>
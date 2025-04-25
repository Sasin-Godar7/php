
<!-- Student information in PHP -->
<html>
<head>
    <title>Student Information</title>
</head>
<body>
<h2>Student Information</h2>
<?php
if(file_exists("Student.txt"))
{
    $fp = fopen("Student.txt", "r") or die("Unable to open file!");
    echo "<h1>Student Details</h1>"; // Fixed: Added opening <

    echo "<table border='1'>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Age</th>
        <th>Address</th>
    </tr>";
    
    while(!feof($fp)) {
        $line = fgets($fp);
        $arr = explode(",", $line);
        if(trim($arr[0]) != "") { // Trim to avoid extra whitespace
            echo "<tr>
                <td>{$arr[0]}</td>
                <td>{$arr[1]}</td>
                <td>{$arr[2]}</td>
                <td>{$arr[3]}</td>
                <td>{$arr[4]}</td>
            </tr>";
        }
    }
    echo "</table>";
    fclose($fp);
} else {
    echo "No student information found.";
}
?>
</body>
</html>
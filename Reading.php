<html>
<head>
    <title>Student Information</title>
</head>
<body>
<h2>Student Information</h2>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(file_exists("Student.txt")) {
    $fp = fopen("Student.txt", "r") or die("Unable to open file!");
    
    echo "<table border='1' cellpadding='8' cellspacing='0'>
    <tr style='background-color: #f2f2f2;'>
        <th>Name</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Age</th>
        <th>Address</th>
    </tr>";
    
    while (($line = fgets($fp)) !== false) {
        $line = trim($line);
        if ($line == "") continue; // Skip empty lines
        
        $arr = explode(",", $line);
        
        if(count($arr) >= 5) {
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
    echo "<p style='color:red;'>No student information found. Make sure Student.txt exists.</p>";
}
?>

</body>
</html>

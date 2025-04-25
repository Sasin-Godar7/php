<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
if(file_exists("studentrecord.txt")) {
  $fp = fopen("studentrecord.txt", "r") or die("Unable to open file!");
  echo "<h2>Student records:</h2>";
  echo "<table border='1'>";
  echo "<tr><th>Name</th><th>Age</th><th>Grade</th></tr>";
  while(!feof($fp)) {
      $str = fgets($fp);
      $arr = explode(",", $str);

      if($arr[0] != "") {
          echo "<tr><td>".$arr[0]."</td><td>".$arr[1]."</td><td>".$arr[2]."</td></tr>";
      }
  }
  echo "</table>";
  fclose($fp);
} else {
  echo "Student file not found!";
}
    
    


</body>
</html>
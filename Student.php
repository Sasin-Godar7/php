<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Student record -->
    <fieldset style="width: 300px; border: 2px solid black; padding: 10px;">
        <legend>Student Record</legend>

        <form method="post" action="">
            <input type="hidden" name="form_type" value="student_record">
            Enter Student Name: <br>
            <input type="text" name="name"><br><br>
            Enter Student Age: <br>
            <input type="number" name="age"><br><br>
            Enter Student Grade: <br>
            <input type="text" name="grade"><br><br>
            <input type="submit" value="Submit">
        </form>

       <?php
       if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'student_record') {
           $name = $_POST["name"];
           $age = $_POST["age"];
           $grade = $_POST["grade"];

          
       }
    
</body>
</html>
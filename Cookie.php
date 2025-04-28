<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$_COOKIE_name["name"] = " User";
$_COOKIE_value ="john doe";
setcookie($_COOKIE_name["name"], $_COOKIE_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    
</body>
</html>
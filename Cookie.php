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
?>
    
</body>
</html>

<?php
// Check if the cookie is set
if(isset($_COOKIE[$_COOKIE_name["name"]])) {
    echo "Cookie '" . $_COOKIE_name["name"] . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$_COOKIE_name["name"]];
} else {
    echo "Cookie '" . $_COOKIE_name["name"] . "' is not set!";
}
?>
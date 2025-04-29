<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$userid = "101";
$username = "Sasin";
$password = "12345678";

if(isset($_REQUEST["user"])) {
    $user = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

    if($user == $username && $pass == $password) {
        setcookie("user", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("userid", $userid, time() + (86400 * 30), "/"); // 86400 = 1 day

        echo "<br>Cookie is set!<br>";

    } else {
        echo "<br>Invalid username or password!<br>";
    }

} else {
    echo "<br>Cookie is not set!<br>";
}
?>


    <!--LOGIN FORM-->
    <form method="post" action="SetCookie.php">
        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="pass">Password:</label><br>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" value="Login">
    </form>
    <br><br>
</body>
</html>
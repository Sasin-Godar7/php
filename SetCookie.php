<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Cookie Example</title>
</head>
<body>

<?php
$userid = "101";
$username = "Sasin";
$password = "12345678";

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if ($user == $username && $pass == $password) {
        setcookie("user", $user, time() + (86400 * 30), "/");
        setcookie("userid", $userid, time() + (86400 * 30), "/");

        echo "<p style='color: green;'>✅ Cookie is set! Welcome, $user</p>";
    } else {
        echo "<p style='color: red;'>❌ Invalid username or password!</p>";
    }
} else {
    // If already logged in (cookie exists)
    if (isset($_COOKIE["user"])) {
        echo "<p style='color: blue;'>🔐 Welcome back, " . $_COOKIE["user"] . " (Cookie found)</p>";
    } else {
        echo "<p>Cookie is not set yet. Please login.</p>";
    }
}
?>

<!-- LOGIN FORM -->
<h2>Login Form</h2>
<form method="post" action="SetCookie.php">
    <label for="user">Username:</label><br>
    <input type="text" id="user" name="user" required><br><br>

    <label for="pass">Password:</label><br>
    <input type="password" id="pass" name="pass" required><br><br>

    <input type="submit" value="Login">
</form>

<br><br>
<!-- LOGOUT BUTTON -->
<form method="post" action="SetCookie.php">
    <input type="hidden" name="logout" value="1">
    <input type="submit" value="Logout">
</form>
<?php
// Logout functionality
if (isset($_POST["logout"])) {
    setcookie("user", "", time() - 3600, "/"); // Expire the cookie
    setcookie("userid", "", time() - 3600, "/"); // Expire the cookie
    echo "<p style='color: orange;'>🔒 You have logged out. Cookies cleared.</p>";
}
?>
<!-- FOOTER -->
<hr>
</body>
</html>

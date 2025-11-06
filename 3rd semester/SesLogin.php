<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: SesDashboard.php");
    exit();
}
?>

<form method="POST" action="SesLogin.php">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Dummy credentials
    $validUser = "admin";
    $validPass = "1234";

    if ($user === $validUser && $pass === $validPass) {
        $_SESSION['username'] = $user;
        header("Location: SesDashboard.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }
}
?>


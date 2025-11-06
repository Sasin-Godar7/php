<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: SesLogin.php");
    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p>This is your dashboard.</p>
<a href="SesLogout.php">Logout</a>
<br><br>
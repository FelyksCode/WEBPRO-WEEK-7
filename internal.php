<?php
session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['username']) &&  !isset($_SESSION['role'])) {
    echo "Unauthorized Access";
} else {
    if ($_SESSION['role'] == 'student') {
        echo "Welcome Student " . $_SESSION['username'];
    } elseif ($_SESSION['role'] == 'lecturer') {
        echo "Welcome Lecturer " . $_SESSION['username'];
    }
}
?>

<?php
echo "<br />";
if (!isset($_SESSION['id'])) {
?>
    <a href="login.php">Login</a>
<?php
} else {
?>
    <a href="logout.php">Logout</a>
<?php
}
?>
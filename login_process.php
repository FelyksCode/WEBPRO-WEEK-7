<?php
session_start();
require_once 'db.php';

// Data from Form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL Query
$sql = "SELECT * FROM users2 WHERE username = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$username]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Check Password
if (!$row) {
    echo "User Not Found";
} else {
    // Check if password is correct
    echo "USERNAME ada di database <br />";
    echo "PASSWORD yang diinput " . $password;
    echo "PASSWORD yang disimpan di database: " . $row['password'];
    if (!password_verify($password, $row['password'])) {
        echo "Password Not Matched";
    } else {
        echo "Password Matched";
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header('Location: internal.php');
    }
}

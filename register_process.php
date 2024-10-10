<?php
require_once('db.php');

// Data from Form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Hash Password
$hashed_pwd = password_hash($password, PASSWORD_BCRYPT);

// SQL Query
$sql = "INSERT INTO users2 (username, password, role) VALUES (?, ?, ?)";

// Execute SQL Query
$result = $db->prepare($sql);
$result->execute([$username, $hashed_pwd, $role]);

header('Location: login.php');

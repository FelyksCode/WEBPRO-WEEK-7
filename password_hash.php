<?php
// echo "rahasia";
// echo "<br />";
$input = "rahasia";
$hashed_pwd = password_hash($input, PASSWORD_BCRYPT);

echo "<h3>Test String Password = rahasia</h3>";
if (password_verify("rahasia", $hashed_pwd)) {
    echo "Password Matched";
} else {
    echo "Password Not Matched";
}

echo "<h3>Test String Password = rahasia</h3>";
if (password_verify("12345678", $hashed_pwd)) {
    echo "Password Matched";
} else {
    echo "Password Not Matched";
}

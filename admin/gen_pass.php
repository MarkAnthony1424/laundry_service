<?php
$hashedPassword = password_hash('admin_password', PASSWORD_DEFAULT);
echo $hashedPassword; // Use this hashed value in your SQL query
?>

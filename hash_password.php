<?php
// Define the password you want to hash
$plain_password = 'yourpassword';

// Use the password_hash() function to hash the password
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);

// Display the hashed password
echo $hashed_password;
?>

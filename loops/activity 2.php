<?php
//activity 2
$correctPass = "password123";
$inputPass = "";

do {
    echo "Please enter your password: ";
    $inputPass = trim(fgets(STDIN));
    
    // Check if the password is incorrect
    if ($inputPass !== $correctPass) {
        echo "Incorrect password. Try again.\n";
    }
} while ($inputPass !== $correctPass);

echo "Access Granted.\n";
?>
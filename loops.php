<?php
//activity 1

$num1 = 1;
while ($num1 <= 10) {
    echo $num1, " ";
    $num1++;
}

echo "\n";

$numeven = 2;

while ($numeven <= 20) {
    echo $numeven, " ";
    $numeven += 2;
}

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
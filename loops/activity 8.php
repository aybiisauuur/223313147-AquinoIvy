<?php
// Function to calculate factorial
function factorial($number) {
    $result = 1;

    // Calculate factorial using a for loop
    for ($i = $number; $i > 1; $i--) {
        $result *= $i; // Multiply result by the current number
    }

    return $result;
}

// Specify the number for which we want the factorial
$number = 5;
$factorialResult = factorial($number);

// Display the result
echo "Factorial of $number is: $factorialResult";
?>

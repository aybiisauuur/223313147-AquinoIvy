<?php
// Function to check if a number is prime
function isPrime($number) {
    // Check for numbers less than 2
    if ($number < 2) {
        return false;
    }
    
    // Check for factors of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }
    
    return true; // Is a prime number
}

// Take a number from the user (for this example, it's hardcoded)
$number = 29; // Change this to test with different numbers

// Check if the number is prime and display the result
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

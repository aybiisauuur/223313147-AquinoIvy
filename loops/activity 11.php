<?php
// Initialize the first two Fibonacci numbers
$fibonacci = [0, 1];

// Generate the first 10 numbers of the Fibonacci sequence
while (count($fibonacci) < 10) {
    // Calculate the next Fibonacci number
    $nextNumber = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    $fibonacci[] = $nextNumber; // Append the new number to the array
}

// Display the Fibonacci sequence
echo "<h3>Fibonacci Sequence (First 10 Numbers)</h3>";
foreach ($fibonacci as $number) {
    echo "$number<br>";
}
?>

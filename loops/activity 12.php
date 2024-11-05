<?php
// Original string
$originalString = "Hello, World!";

// Initialize an empty string for the reversed string
$reversedString = "";

// Loop through the original string in reverse order
for ($i = strlen($originalString) - 1; $i >= 0; $i--) {
    $reversedString .= $originalString[$i]; // Append each character to the reversed string
}

// Display the reversed string
echo "<h3>Original String:</h3> $originalString<br>";
echo "<h3>Reversed String:</h3> $reversedString";
?>

<?php
echo "<h3>FizzBuzz Challenge</h3>";

for ($i = 1; $i <= 50; $i++) {
    // Check if the number is a multiple of both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }
    // Check if the number is a multiple of 3
    else if ($i % 3 == 0) {
        echo "Fizz<br>";
    }
    // Check if the number is a multiple of 5
    else if ($i % 5 == 0) {
        echo "Buzz<br>";
    }
    // Print the number itself if it is neither a multiple of 3 nor 5
    else {
        echo "$i<br>";
    }
}
?>

<?php
echo "<h3>Loop Control with break and continue</h3>";

for ($i = 1; $i <= 10; $i++) {
    // Skip the number 5
    if ($i == 5) {
        continue;
    }

    // Stop the loop at 8
    if ($i == 8) {
        break;
    }

    echo "$i<br>";
}
?>

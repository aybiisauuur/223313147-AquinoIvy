<?php
// Multiplication table for 7
$number = 7;

echo "<h3>Multiplication Table of $number</h3>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
}
?>

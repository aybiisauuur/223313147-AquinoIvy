<?php
// Associative array with student's information
$studentInfo = [
    "Name" => "John Doe",
    "Age" => 20,
    "Grade" => "A",
    "City" => "New York"
];

// Iterate through the associative array using foreach
echo "<h3>Student Information</h3>";
foreach ($studentInfo as $key => $value) {
    echo "$key: $value<br>";
}
?>

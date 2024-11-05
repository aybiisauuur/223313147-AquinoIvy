<?php
// Array of favorite movies
$favoriteMovies = [
    "Inception",
    "The Shawshank Redemption",
    "Interstellar",
    "The Dark Knight",
    "Forrest Gump"
];

// Iterate through the array using foreach
echo "<h3>Favorite Movies</h3>";
foreach ($favoriteMovies as $movie) {
    echo "$movie<br>";
}
?>

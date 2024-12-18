<?php
// Initial array with 5 ASEAN countries
$asean_countries = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Display initial ASEAN countries list
echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach ($asean_countries as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";

// Adding 3 new countries to the array
array_push($asean_countries, "Laos", "Filipina", "Myanmar");

// Display updated ASEAN countries list
echo "<h3>Daftar Negara ASEAN baru :</h3>";
echo "<ul>";
foreach ($asean_countries as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";
?>
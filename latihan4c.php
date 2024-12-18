<?php
// Initial array with 5 ASEAN countries
$asean_countries = ["Indonesia : D.K.I Jakarta", "Singapura : Singapura", "Malaysia : Kuala Lumpur", "Brunei : Bandar Seri Begawan", "Thailand : Bangkok", "Laos : Vientiane", "Filipina : Manila", "Myanmar : Naypyidaw"];

// Display initial ASEAN countries list
echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach ($asean_countries as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";
?>
<?php
// Array with the specified colors
$colors = ["hijau", "kuning", "kelabu", "merah muda"];

// Display the poem with the array elements
echo "<p>Balonku ada lima.<br>";
echo "Rupa-rupa warnanya<br>";

// Display each color from the array with commas between them
echo implode(", ", $colors) . ", dan biru<br>";

// Continue with the poem
echo "Meletus balon $colors[0] DOR!!!<br>";
echo "Hatiku sangat kacau.</p>";
?>
<DOCTYPE html>
<html lang="en">
<head>
    <mata charshet="UTF-8">
    <mata name"viewport" content="widht=device-widht, initial-scale.0">
    <title>modul 2 - latihan 1</title>
</head>
<body>
     <table border="1" cellpadding="3"  cellpacing="0">
        <tr>
            <th>kolom 1</th>  
            <th>kolom 2</th>  
            <th>kolom 3</th>  
            <th>kolom 4</th>  
            <th>kolom 5</th>  
        </tr>

<?php

$numbaris = 25 ;
$numkolom = 5;

for ($row = 1; $row <=$numbaris; $row++) {
    echo"<tr>";

    for ($col = 1; $col <= $numkolom; $col++) {
        echo "<td>Baris $row, kolom $col</td>";

    }
}
?>
    </table>
</body>
</html>
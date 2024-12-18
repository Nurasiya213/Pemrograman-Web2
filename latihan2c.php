<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: Lightblue;
            margin: 5px;
            float: Left;
            text-align: center;
            line-height: 30px;
        }
        .clear {
            clear: both;
        }    
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap{
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    $rows = 5;
    $columns = 5;
    
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<div class='clear'></div>";      
    }
    ?>
</body>
</html>
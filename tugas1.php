<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Bilangan Ganjil, Genap, dan Prima</title>
</head>
<body>
    <h3>Pengulangan untuk mencari kategori bilangan :</h3>
    <ul>
        <?php
        // Fungsi untuk mengecek apakah suatu bilangan prima
        function isPrime($num) {
            if ($num < 2) return false; // Angka 0 dan 1 bukan bilangan prima
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        // Looping dari angka 1 sampai 20
        for ($i = 1; $i <= 20; $i++) {
            // Mengecek apakah bilangan ganjil atau genap
            if ($i % 2 == 0) {
                $jenisBilangan = "bilangan genap";
            } else {
                $jenisBilangan = "bilangan ganjil";
            }

            // Mengecek apakah bilangan tersebut bilangan prima
            if (isPrime($i)) {
                $jenisBilangan .= " sekaligus bilangan prima";
            }

            // Menampilkan hasil
            echo "<li>Angka $i adalah $jenisBilangan</li>";
        }
        ?>
    </ul>
</body>
</html>

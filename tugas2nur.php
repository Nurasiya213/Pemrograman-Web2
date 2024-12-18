<?php
// Membuat associative array untuk flora dan fauna terancam punah
$flora_fauna_terancam = [
    [
        'id' => 1,
        'nama' => 'Harimau Sumatra',
        'kategori' => 'Fauna',
        'status' => 'Kritis',
        'lokasi' => 'Sumatra, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/Sumatran_Tiger_Berlin_Tierpark.jpg'
    ],
    [
        'id' => 2,
        'nama' => 'Rafflesia arnoldii',
        'kategori' => 'Flora',
        'status' => 'Terancam',
        'lokasi' => 'Sumatra, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Rafflesia_Arnoldii_Batang_Palupuah_Indonesia.jpg/800px-Rafflesia_Arnoldii_Batang_Palupuah_Indonesia.jpg'
    ],
    [
        'id' => 3,
        'nama' => 'Panda Raksasa',
        'kategori' => 'Fauna',
        'status' => 'Terancam',
        'lokasi' => 'China',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Giant_Panda_2004-03-2.jpg'
    ],
    [
        'id' => 4,
        'nama' => 'Orangutan Sumatra',
        'kategori' => 'Fauna',
        'status' => 'Kritis',
        'lokasi' => 'Sumatra, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Orang_Utan%2C_Semenggok_Forest_Reserve%2C_Sarawak%2C_Borneo%2C_Malaysia.JPG'
    ],
    [
        'id' => 5,
        'nama' => 'Bunga Edelweiss',
        'kategori' => 'Flora',
        'status' => 'Terancam',
        'lokasi' => 'Pegunungan Alpen',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bunga_Senduro.JPG/1200px-Bunga_Senduro.JPG'
    ],
    [
        'id' => 6,
        'nama' => 'Kukang Jawa',
        'kategori' => 'Fauna',
        'status' => 'Terancam',
        'lokasi' => 'Jawa, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/6/60/Nycticebus_coucang_002.jpg'
    ],
    [
        'id' => 7,
        'nama' => 'Bunga Titan Arum',
        'kategori' => 'Flora',
        'status' => 'Terancam',
        'lokasi' => 'Sumatra, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/c/c0/Titan-arum1web.jpg'
    ],
    [
        'id' => 8,
        'nama' => 'Badak Jawa',
        'kategori' => 'Fauna',
        'status' => 'Kritis',
        'lokasi' => 'Jawa, Indonesia',
        'gambar' => 'https://indonesia.go.id/assets/upload/headline//djcbdcbcc.jpeg'
    ],
    [
        'id' => 9,
        'nama' => 'Cendana',
        'kategori' => 'Flora',
        'status' => 'Terancam',
        'lokasi' => 'Sumbawa, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Santalum_album_%28Chandan%29_in_Hyderabad%2C_AP_W_IMG_0025.jpg'
    ],
    [
        'id' => 10,
        'nama' => 'Elang Jawa',
        'kategori' => 'Fauna',
        'status' => 'Terancam',
        'lokasi' => 'Jawa, Indonesia',
        'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/ELJA.jpg'
    ]
];

// Menampilkan tabel
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Status</th>
    <th>Lokasi</th>
    <th>Gambar</th>
</tr>";

foreach ($flora_fauna_terancam as $item) {
    echo "<tr>
        <td>{$item['id']}</td>
        <td>{$item['nama']}</td>
        <td>{$item['kategori']}</td>
        <td>{$item['status']}</td>
        <td>{$item['lokasi']}</td>
        <td><img src='{$item['gambar']}' alt='{$item['nama']}' style='width:100px;'></td>
    </tr>";
}

echo "</table>";
?>
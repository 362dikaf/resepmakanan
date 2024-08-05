<?php
// koneksi database
$conn = mysqli_connect("localhost", "username", "password", "database");

// ambil id resep dari URL
$id = $_GET['id'];

// query resep
$query = "SELECT * FROM resep WHERE id = '$id'";
$result = mysqli_query($conn, $query);

// tampilkan resep
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['nama'] . "</h2>";
    echo "<p>" . $row['deskripsi'] . "</p>";
    echo "<img src='" . $row['gambar'] . "' alt='" . $row['nama'] . "'>";
    echo "<p>Bahan-bahan:</p>";
    echo "<ul>";
    $bahan = explode(",", $row['bahan']);
    foreach ($bahan as $item) {
        echo "<li>" . $item . "</li>";
    }
    echo "</ul>";
    echo "<p>Cara membuat:</p>";
    echo "<ol>";
    $cara = explode(",", $row['cara_membuat']);
    foreach ($cara as $step) {
        echo "<li>" . $step . "</li>";
    }
    echo "</ol>";
}

// tutup koneksi database
mysqli_close($conn);
?>

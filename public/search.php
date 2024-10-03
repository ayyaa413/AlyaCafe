<?php
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $searchQuery = trim($_GET['query']);

    // Lakukan sanitasi input untuk mencegah SQL Injection
    $searchQuery = htmlspecialchars($searchQuery);

    // Contoh query pencarian ke database MySQL (gunakan prepared statements untuk keamanan)
    // Koneksi ke database
    $conn = new mysqli("localhost", "username", "password", "database");

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query SQL untuk mencari cafe
    $sql = "SELECT * FROM cafes WHERE nama_cafe LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$searchQuery%";
    $stmt->bind_param("s", $searchTerm);

    // Eksekusi query
    $stmt->execute();
    $result = $stmt->get_result();

    // Tampilkan hasil pencarian
    if ($result->num_rows > 0) {
        echo "<h2>Hasil pencarian untuk: " . $searchQuery . "</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['nama_cafe'] . "</p>";
        }
    } else {
        echo "<p>Tidak ada hasil yang ditemukan untuk: " . $searchQuery . "</p>";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "<p>Masukkan kata kunci pencarian.</p>";
}
?>

<?php
// Veritabanı bilgilerini tanımla
$servername = "localhost"; // Sunucu adı
$username = "root";        // Veritabanı kullanıcı adı
$password = "";            // Veritabanı şifresi
$dbname = "e-ticaret";     // Veritabanı adı

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
echo "Bağlantı başarılı <br>";
?>

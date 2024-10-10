<?php

class UserController {
    
    public function userRegister($username, $email, $password) {
        include '../../config.php';
        
        // Formdan gelen verileri al
        $username = $_POST["text"];
        $email = $_POST["email"];
        $password = $_POST["pwd"];

        // Güvenli şifreleme için md5 yerine password_hash kullan
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // SQL sorgusunu prepared statements ile oluştur
        $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Parametreleri bağla (sss: string,string,string)
            $stmt->bind_param("sss", $username, $email, $hashedPassword);

            // Sorguyu çalıştır
            if ($stmt->execute()) {
                header("Location: ../../views/user/signin-2.php");
                die();

            } else {
                echo "Hata: " . $stmt->error;
            }

            // Statement'i kapat
            $stmt->close();
        } else {
            echo "Hata: " . $conn->error;
        }

        // Veritabanı bağlantısını kapat
        $conn->close();

        }

        public function userLogin($email, $password) {
            include '../../config.php';
        
            // Formdan gelen verileri al
            $email = $_POST['email'];
            $password = $_POST['pwd'];
        
            // SQL sorgusu (email'i kontrol et)
            $sql = "
                SELECT u.*, ud.adres, ud.sehir, ud.il, ud.hakkinda, ud.telefon, ud.kayit_tarihi
                FROM user u
                LEFT JOIN user_detay ud ON u.user_id = ud.user_id
                WHERE u.email = ?
            ";
        
            $stmt = $conn->prepare($sql);
        
            // Parametreleri bağla
            $stmt->bind_param("s", $email);
        
            // Sorguyu çalıştır
            $stmt->execute();
        
            // Sonuçları al
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                // Kullanıcı bulundu
                $user = $result->fetch_assoc();
        
                // Oturum başlat
                session_start();
        
                // Şifreyi kontrol et
                if (password_verify($password, $user['password'])) {
                    // Kullanıcı bilgilerini session'a kaydet
                    $_SESSION["kullanici"] = [
                        'user_id' => $user['user_id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'adres' => $user['adres'],
                        'sehir' => $user['sehir'],
                        'il' => $user['il'],
                        'hakkinda' => $user['hakkinda'],
                        'telefon' => $user['telefon'],
                        'kayit_tarihi' => $user['kayit_tarihi']
                    ];
        
                    // Giriş başarılı, yönlendir
                    header("Location: ../../index3.php");
                    die();
                } else {
                    // Yanlış şifre
                    header("Location: ../../views/user/signin-2.php?error=wrongpassword");
                    die();
                }
            } else {
                // Kullanıcı bulunamadı
                header("Location: ../../views/user/signin-2.php?error=wrongemail");
                die();
            }
        
            // Bağlantıyı kapat
            $stmt->close();
            $conn->close();
        }
        

    public function passwordReset($email) {
        include '../../config.php';
    
        // SQL Injection'a karşı güvenlik için mysqli_real_escape_string kullanın
        $safe_email = mysqli_real_escape_string($conn, $email);
        
        $sql = "SELECT * FROM user WHERE email = '$safe_email'";
    
        // Veritabanı bağlantısı ve sorgu yürütme
        $result = mysqli_query($conn, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $isim = $row['username'];
            $email = $row['email'];
            $pass = $row['password'];
            
            // Şifre sıfırlama mesajı oluşturma
            $message = "Kullanıcı Adı: $isim\r\nE-posta: $email\r\nŞifre: $pass";
            $message = wordwrap($message, 70, "\r\n");
    
            // Şifre sıfırlama maili gönderme
            if (mail($email, 'Şifre Sıfırlama', $message)) {
                echo "Şifre sıfırlama maili başarıyla gönderildi.";
            } else {
                echo "Mail gönderilirken bir hata oluştu.";
            }
        } else {
            echo "Kullanıcı bulunamadı: " . mysqli_error($conn);
        }
    }
    
}

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operation = $_GET['operation'];

    switch ($operation) {
        case 'register':
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userController->userRegister($username, $email, $password);
            break;

        case 'login':
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $userController->userLogin($email, $password);
            break;

        case 'reset_password':
            $email = $_POST['email'];
            $userController->passwordReset($email);
            break;
    }
}

?>

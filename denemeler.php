<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    
        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    
        .form-container label {
            text-align: center;
        }
    
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 200px;
            padding: 8px;
            margin-bottom: 10px;
        }
    
        .form-container button {
            width: 100px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="">
            <label for="kullanici_adi">Kullanıcı Adı:</label>
            <input type="text" name="kullanici_adi" id="kullanici_adi" required>
            
            <label for="sifre">Şifre:</label>
            <input type="password" name="sifre" id="sifre" required>
            
            <button type="submit">Giriş Yap</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kullanıcı adı ve şifreyi burada belirleyin
        $dogruKullaniciAdi = "abin";
        $dogruSifre = "abin1111";

        // Formdan gelen kullanıcı adı ve şifreyi alın
        $girilenKullaniciAdi = $_POST['kullanici_adi'];
        $girilenSifre = $_POST['sifre'];

        // Kullanıcı adı ve şifreyi kontrol edin
        if ($girilenKullaniciAdi === $dogruKullaniciAdi && $girilenSifre === $dogruSifre) {
            // Doğru bilgiler girildiyse giriş yapılacak işlemleri buraya yazın
            header("Location: ana-sayfa.html");
            exit(); // Bu noktada kodun çalışmasını sonlandırarak formu tekrar göstermemek için exit() fonksiyonunu kullanıyoruz.
        } else {
            // Yanlış bilgiler girildiyse hata mesajı gösterin
            echo "<p>Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.</p>";
        }
    }
    ?>
</body>
</html>

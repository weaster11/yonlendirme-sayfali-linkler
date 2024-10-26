<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sabit bir kullanıcı adı ve şifre kontrolü
    if ($username === 'admin' && $password === '1234') {
        $_SESSION['loggedin'] = true;
        header('Location: panel.php');
        exit;
    } else {
        echo "Geçersiz kullanıcı adı veya şifre";
    }
}
if (!isset($_SESSION['loggedin'])) {
?>
    <form method="POST">
        Kullanıcı Adı: <input type="text" name="username"><br>
        Şifre: <input type="password" name="password"><br>
        <input type="submit" value="Giriş Yap">
    </form>
<?php
} else {
    // Bağlantı ekleme formu
    if (isset($_POST['title']) && isset($_POST['url'])) {
        $title = $_POST['title'];
        $url = $_POST['url'];

        // Veritabanına bağlantı ekleme
        $pdo = new PDO('mysql:host=localhost;dbname=link', 'root', '');
        $stmt = $pdo->prepare("INSERT INTO links (title, url) VALUES (?, ?)");
        $stmt->execute([$title, $url]);

        echo "Link başarıyla eklendi!";
    }
?>
    <form method="POST">
        Link Başlığı: <input type="text" name="title"><br>
        URL: <input type="text" name="url"><br>
        <input type="submit" value="Link Ekle">
    </form>
<?php
}
?>

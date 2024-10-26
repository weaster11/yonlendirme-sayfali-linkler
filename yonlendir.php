<?php
if (!isset($_GET['url'])) {
    die("Geçersiz URL");
}
$url = $_GET['url'];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönlendirme</title>
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo htmlspecialchars($url); ?>";
        }, 10000); // 10 saniye sonra yönlendir
    </script>
</head>
<body>
    <h1>Yönlendiriliyorsunuz...</h1>
    <p>Lütfen bekleyin, 10 saniye içinde otomatik olarak yönlendirileceksiniz.</p>
    <p>Eğer beklemek istemiyorsanız, <a href="<?php echo htmlspecialchars($url); ?>">buraya tıklayın</a>.</p>
</body>
</html>

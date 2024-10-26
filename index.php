<?php
// Veritabanından linkleri çekme
$pdo = new PDO('mysql:host=localhost;dbname=link', 'root', '');
$stmt = $pdo->query("SELECT * FROM links ORDER BY created_at DESC");
$links = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .link-box {
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>

<h1>Linkler</h1>
<div class="container">
    <?php foreach ($links as $link): ?>
        <div class="link-box">
            <a href="yonlendir.php?url=<?php echo urlencode($link['url']); ?>"><?php echo htmlspecialchars($link['title']); ?></a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

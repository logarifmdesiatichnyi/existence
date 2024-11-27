<?php
// Подключение к базе данных
$host = 'localhost';
$db = 'photo_album';
$user = 'photo_user';
$pass = 'your_password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

// Получаем фотографии из базы данных
$query = "SELECT * FROM photos";
$stmt = $pdo->query($query);
$photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотоальбом</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Фотоальбом</h1>

<div class="gallery">
    <?php foreach ($photos as $photo): ?>
        <div class="photo-item">
            <a href="images/<?php echo $photo['LargePath']; ?>" class="photo-link">
                <img src="images/<?php echo $photo['ThumbPath']; ?>" alt="<?php echo htmlspecialchars($photo['PhotoName']); ?>">
                <p><?php echo htmlspecialchars($photo['PhotoName']); ?></p>
            </a>
            <p><?php echo htmlspecialchars($photo['Description']); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<script src="js/scripts.js"></script>

</body>
</html>

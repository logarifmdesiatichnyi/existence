<?php
function getAllPhotos() {
    // Подключаемся к базе данных
    $host = 'localhost';
    $db   = 'photos';
    $user = 'root'; // Пользователь XAMPP
    $pass = '';     // Пароль XAMPP
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    // Запрос всех фотографий
    $stmt = $pdo->query('SELECT PhotoID, LargePath, ThumbPath, PhotoName, Description FROM photos');
    return $stmt->fetchAll();
}

// Возвращаем данные в формате JSON
header('Content-Type: application/json');
$photos = getAllPhotos();
echo json_encode(['photos' => $photos]);
?>

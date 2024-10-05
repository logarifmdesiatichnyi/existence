<?php
header('Content-Type: application/json');

function getPhotos() {
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

    $stmt = $pdo->query('SELECT PhotoID, ThumbPath FROM photos');
    return $stmt->fetchAll();
}

echo json_encode(['photos' => getPhotos()]);
?>

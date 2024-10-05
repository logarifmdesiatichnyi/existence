<?php
// db.php - файл для работы с БД

function connectDb() {
    $host = '127.0.0.1';
    $dbname = 'photos';
    $username = 'root';  // Измените на ваше имя пользователя MySQL
    $password = '';  // Измените на ваш пароль MySQL

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Ошибка подключения к базе данных: " . $e->getMessage());
    }
}

function getPhotos() {
    $pdo = connectDb();
    $stmt = $pdo->query("SELECT PhotoID, ThumbPath FROM photos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPhotoDetails($photoID) {
    $pdo = connectDb();
    $stmt = $pdo->prepare("SELECT LargePath, PhotoName, Description FROM photos WHERE PhotoID = ?");
    $stmt->execute([$photoID]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

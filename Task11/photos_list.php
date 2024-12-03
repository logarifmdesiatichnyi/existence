<?php
// Массив фотографий для использования в динамическом фотоальбоме
$photos = ['John Lennon', 'Karl Marx', 'Naomi Campbell', 'Paris Hilton'];

// Возвращаем массив в формате JSON
header('Content-Type: application/json');
echo json_encode(['photos' => $photos]);
?>

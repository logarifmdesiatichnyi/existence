<?php
header('Content-Type: application/json');

$photosDir = __DIR__ . '/photos';

$files = scandir($photosDir);

$photos = array();
foreach ($files as $file) {
    if (strpos($file, '.jpg') !== false && strpos($file, '_small') === false) {
        $photos[] = basename($file, '.jpg');
    }
}

echo json_encode(array('photos' => $photos));
?>

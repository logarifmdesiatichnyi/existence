<?php
if (isset($_GET['lat']) && isset($_GET['lon'])) {
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    $apiKey = 'e486856acc44fea9bcb163f21b3de4a7'; 

    $url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&units=metric&appid=$apiKey";
    $weatherData = @file_get_contents($url);
    
    if ($weatherData) {
        $json = json_decode($weatherData, true);
        
        if (isset($json['main']['temp'])) {
            $temperature = $json['main']['temp'];
            echo json_encode(['temperature' => $temperature]);
        } else {
            echo json_encode(['error' => 'Data format error: ' . json_encode($json)]);
        }
    } else {
        echo json_encode(['error' => 'Unable to retrieve weather data']);
    }
} else {
    echo json_encode(['error' => 'Invalid coordinates']);
}
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    function getHistory() {
        // Это чудовищно с точки безопасности!
        $conn = new mysqli("localhost","root","","chat");

        $sql = "SELECT * FROM messages ORDER BY Timestamp DESC";
        $cursor = $conn->query($sql);
        $messages = $cursor->fetch_all();
        $conn->close();
        //var_dump($messages);
        return $messages;
    }

    function addMessage($user, $message) {
         // Это чудовищно с точки безопасности!
        $conn = new mysqli("localhost","root","","chat");

        // Это тоже чудовищно (SQL Injection)
        $sql = "INSERT INTO messages(UserName, Message)
                VALUES('$user','$message')";
        $cursor = $conn->multi_query($sql);
        $conn->close();
    }

    //getHistory();
    //addMessage("MASHA", "Привет, мальчики!");



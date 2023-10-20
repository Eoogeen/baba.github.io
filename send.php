<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $message = $_POST["message"];
    
    $text = "Имя: " . $name . "\nEmail: " . $email . "\nОценка: " . $rating . "\nОтзыв: " . $message;
    
    // Ваш бот API токен и chat_id
    $bot_token = '6518414174:AAH-DS-4IwEkWCKDpp2sPW8s2MCBu_9-Eb8';
    $chat_id = '-1001944436781';
    
    $url = "https://api.telegram.org/bot" . $bot_token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($text);
    
    $response = file_get_contents($url); 

    // Возвращаем ответ клиенту (можно использовать для обработки результата)
    if ($response === false) {
 
    } else {
    
    }
} else {
 
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Спасибо за отзыв</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .thank-you {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        animation: appear 1s ease-in-out;
    }

    @keyframes appear {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>
<div class="thank-you">
    <h1>Спасибо за отзыв!</h1>
</div>
</body>
</html>

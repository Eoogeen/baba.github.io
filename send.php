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
        echo json_encode(array("success" => false, "message" => "Ошибка отправки сообщения"));
    } else {
        echo json_encode(array("success" => true, "message" => "Спасибо за Ваш отзыв!"));
    }
} else {
    // Если запрос не является POST-запросом, вернуть ошибку
    echo json_encode(array("success" => false, "message" => "Недопустимый метод запроса"));
}
?>

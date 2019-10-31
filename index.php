<?php
//Настройки. Можно не спользовать и передавать данные на прямую [1 пример]
$chat_id = 'Телеграм ID';
$token = 'Токен бота';

// подключаем библиотеку:
include 'tlogs.php';

// вызываем функцию:
tl_message_chat_id_token('Привет', 'Телеграм ID', 'Токен бота');

// ещё один пример использования [Будет работать только при наличии строк настроек в начале:
$message = 'qwerty%0Aqwerty';
tl_message_chat_id_token($message, $chat_id, $token);

// пример получения результата
echo tl_message_chat_id_token($message, $chat_id, $token)['result']['chat']['first_name'];
?>

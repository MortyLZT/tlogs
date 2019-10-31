<?php
// настройки:
$token = 'Токен бота';
$chat_id = 'Телеграм ID';

// функции:
function tl_message($message){
  global $token, $chat_id;
  $result = file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.$message.'&parse_mode=Markdown');
  return json_decode($result, true);
}

function tl_message_chat_id($message, $chat_id){
  global $token;
  $result = file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.$message.'&parse_mode=Markdown');
  return json_decode($result, true);

}

function tl_message_chat_id_token($message, $chat_id, $token){
  $result = file_get_contents('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$chat_id.'&text='.$message.'&parse_mode=Markdown');
  return json_decode($result, true);
}
?>

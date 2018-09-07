 <?php
  

function send_LINE($msg){
 $access_token = 'kr1yd0mol2bBniSYsFF6XErp5hRgGxtUPmm1gaBN4fhuezzHGw/D5Joq0RJkgHRYKN9E9sWBHxiVEyTI6I8UF73I7VZc7kAONYDPa1SlA2xySsQKDh1lsG6xvl2VludnIJ5tLQzoq5zagJerw4OziAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uc4807c76a841c775baa6e6959b6cc589',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

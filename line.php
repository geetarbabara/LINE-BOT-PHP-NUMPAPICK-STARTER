 <?php
  

function send_LINE($msg){
 $access_token = 'U1ZXjgzI0b9zEzuk5nxD4ueM5PcOOIKtjDUcKZSSl2oMw/K5vJ+199YCBf0IK5l0NCo/hcdZjGTge/WSLBkgklpX+PUU5MKdXjP4u0jC+clBEHjYrYp95WVw8qI02jyKnJmkqt8HsjSlRyYN1vyLLQdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U154eaf1d78694526fa87ada0b939a8e2',
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

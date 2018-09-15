 <?php
  

function send_LINE($msg){
 $access_token = 'TIAKODA+UTLzM7t5CPN/hL7BD4qr/CF907bSf0sdaZbOqv17IoLXRT4mwPGgcGxGsdfMMGnFaN43e8O8rdU2RafC0x1QlEnVydUSmajICNwtLs1RUuEk6TPPo8LiKHfxb6BuuSE6YoLlN0E54G9DTwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ub8ada2223d0939ee824e2e97be0f4aa9',
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

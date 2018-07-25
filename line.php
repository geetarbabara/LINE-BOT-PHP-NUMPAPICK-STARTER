 <?php
  

function send_LINE($msg){
 $access_token = 'Sz2pqA7iHWmE80uHtekGhSNIAd9RmCK1Kog+cOMRZrcl79OQQVY/btWxHuE3cMHaGfpVMxoWb9eQFKi+SzGrhsAA1lEJ0aOoRXCxg5M/9zVcmjDWZSeupX/zfpfnZPWizXiCiY431aWkV2c4e+s6ZQdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U3962e0195f05edcb835f7d6f7aba05c7',
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

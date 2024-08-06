<?php

class DiscordBot
{
  public $webhook;
  public $debug = false;
  public $message;
  public $messageType;
  public $messageTimestamp;

  public function __construct()
  {
    $this->messageTimestamp = date("c", strtotime("now"));
    $this->message = $this->getMessageDefaults();
  }

  public function setWebHookUrl($url)
  {
    $this->webhook = $url;
  }

  public function setMessage($message)
  {
    // $this->message['content'] = $message;
    $this->message['embeds'][0]['title'] = utf8_encode($message);
  }

  public function getMessageType()
  {
    return [
      'alerta' => ['color' => hexdec( "ff0000" )],
      'normal' => ['color' => hexdec( "3366ff" )],
    ];
  }

  public function setAvatar($url)
  {
    $this->message['avatar_url'] = $url;
  }

  public function getMessageDefaults()
  {
    return [
      "content" => "",
      "username" => "Alerta",
      "avatar_url" => "",
      "embeds" => [
        [
          "title" => "",
          "type" => "rich",
          "description" => "",
          "timestamp" => $this->messageTimestamp,
          "color" => hexdec( "ff0000" ),
        ]
      ]
    ];
  }

  public function sendMessage($to=null, $type='normal')
  {
    if( ! empty($to) ) {
      $this->message['content'] = utf8_encode($to);
    }

    $this->message['embeds'][0]['color'] = $this->getMessageType()[$type]['color'];

    $this->exec();
  }

  public function exec()
  {
    $ch = curl_init( $this->webhook );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($this->message, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );

    if( $this->debug ) {
      var_dump($response);
    }

    curl_close( $ch );
  }
}

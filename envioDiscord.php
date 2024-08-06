<?php
include 'discord.class.php';
// echo '<pre>'; print_r($_GET);echo '</pre>';
$demandas = [];
foreach($_GET as $id){
    $demandas[] = "http://tickets.fabricadeideias.com/#/tickets/".$id;
}

// Exemplo de uso
// $demandasString = implode(', ', $demandas);
// $msg = 'Ola Bom dia. Lista de demandas de Hoje,  por favor seguir na ordem : ' .$demandasString;
// echo $msg;

// if ($msg) {
//     $discord = new DiscordBot();
//     $discord->debug = true;
//     $discord->setWebHookUrl('https://discord.com/api/webhooks/1124423032497262652/YY8UKLUO5tPGXtBTa3q9FhEdivgMgSeH5v5i-2sIvw3Y2mOmNoWfrWPUIyOglF3UOCsk');
//     $discord->setAvatar('https://w7.pngwing.com/pngs/170/704/png-transparent-the-flash-desktop-superhero-flash-face-comic-book-photography-thumbnail.png');
//     $discord->setMessage($msg);
//     $discord->sendMessage('@everyone', 'alerta');

//     echo '+++++++';
//     sleep(5);
//     exit('fim');
// }

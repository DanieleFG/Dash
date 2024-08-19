<?php
include 'discord.class.php';
echo '<pre>'; print_r($_GET);echo '</pre>';
$demandas = '';
foreach($_GET as $id => $titulo){
    if(gettype($id) == 'integer'){
        if(preg_match('#(SEM CAPTURAR?|SEM VARRER|PAROU DE CAPTURAR?)#is', $titulo)){
            $demandas .="SEM CAPTURAR\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else if(preg_match("#(FURO|FURANDO)#is", $titulo)){
            $demandas .="FURO\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else if(preg_match("#DATA#is", $titulo)){
            $demandas .="AJUSTE DE DATA\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else if(preg_match("#TEXTO INCOMPLETO#is", $titulo)){
            $demandas .="TEXTO INCOMPLETO\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else if(preg_match("#LIXO#is", $titulo)){
            $demandas .="LIXO\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else if(preg_match("#Captura#is", $titulo)){
            $demandas .="FLIP\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }
        else{
            $demandas .="Outros\n";
            $demandas .= "http://tickets.fabricadeideias.com/#/tickets/".$id."\n";
        }

    }
    

}
// echo '<pre>'; print_r($demandas);echo '</pre>';
// exit(__FILE__.' LINHA ==>'.__LINE__);
// Exemplo de uso
// $demandasString = implode(', ', $demandas);
$msg = $demandas;
echo $msg;

if ($msg) {
    $discord = new DiscordBot();
    $discord->debug = true;
    // $discord->setWebHookUrl('https://discord.com/api/webhooks/1124423032497262652/YY8UKLUO5tPGXtBTa3q9FhEdivgMgSeH5v5i-2sIvw3Y2mOmNoWfrWPUIyOglF3UOCsk');
    $discord->setWebHookUrl('https://discord.com/api/webhooks/1052018421245689888/FZZRwPRZizsfZ18zx6_RkD_uURAZ5LysXqmS_Nh9HY9-54jUV2nxi89GCRDw8X3eWBNn');
    $discord->setAvatar('https://w7.pngwing.com/pngs/170/704/png-transparent-the-flash-desktop-superhero-flash-face-comic-book-photography-thumbnail.png');
    $discord->setMessage($msg);
    $discord->sendMessage('@everyone', 'alerta');

    echo '+++++++';
    sleep(10);
    exit('fim');
}

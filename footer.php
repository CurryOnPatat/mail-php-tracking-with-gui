<?php
// laat de pixel in 
header('Content-Type: image/gif');
readfile('footer.gif');

// vraagt de tijd(request_time) en het ip adress(REMOTE_ADDR) op [english: asks the time(request_time) and the ip address(REMOTE_ADDR)  ]
// ip adress kan verkeerd zijn op gmail Google proxy somsige urls tijd is wel nog exact [english: the ipadress can be wrong gmail uses a proxy, the time is always correct"]
$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$device = ($_SERVER['HTTP_USER_AGENT']);
#$ip = $_SERVER['REMOTE_ADDR'];
$ip = ($_SERVER['REMOTE_ADDR']);
$id = $_GET["id"];
// inport alles wat hierboven staat
$txt = "email read on". $date. " id: ". $id ."  with the ipadress:".  $ip." with webkit   ". "$device". "";
$file = "email read on". $date. " id: $id";
// testen voor inporten voor gui [english: testing for inporting with gui ]
$log = file_put_contents('log.txt', $file.PHP_EOL , FILE_APPEND);
    

// telegram api gedoe [english: telegram api bullcrap]
function telegram($msg) {
    global $telegrambot,$telegramchatid;
    $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
    $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
    $context=stream_context_create($options);
    $result=file_get_contents($url,false,$context);
    return $result;
}   
// telegram bot id stuur niet mee naar andere mensen [english: dont matter] 
$telegrambot='yourtelegramapikeyhere';
$telegramchatid=yourtelegramchatidhere;
// verstuurd het bericht [english: sends the message to your telegram bot]
telegram ("$txt");
exit;






?>


<?php
header('Content-Type: application/json; charset=utf-8');
$token="";
define('API_KEY',1598773132:AAF75xoF7BpI2iA38bNqh0o0LS5DTeHEGxY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
$houda = json_decode(file_get_contents("houda.json"),true);
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$message_id = $update->message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$name1 = $message->from->last_name;
$from_id = $message->from->id;
$tc = $message->chat->type;
}
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
$tc = $update->callback_query->message->chat->type;
}
function movie($k){
$rr=[
"https://www.fushaar.com/gerne/documentary/","https://www.fushaar.com/gerne/music/","https://www.fushaar.com/gerne/adventure/","https://www.fushaar.com/gerne/comedy/","https://www.fushaar.com/gerne/mystery/","https://www.fushaar.com/gerne/western/","https://www.fushaar.com/gerne/family/","https://www.fushaar.com/gerne/biography/","https://www.fushaar.com/gerne/sport/","https://www.fushaar.com/gerne/romance/","https://www.fushaar.com/gerne/horror/","https://www.fushaar.com/gerne/drama/","https://www.fushaar.com/gerne/sci-fi/","https://www.fushaar.com/gerne/war/","https://www.fushaar.com/gerne/crime/","https://www.fushaar.com/gerne/history/","https://www.fushaar.com/gerne/animation/","https://www.fushaar.com/gerne/action/","https://www.fushaar.com/gerne/thriller/","https://www.fushaar.com/gerne/fantasy/",
];
return $rr[$k];
}
/*$ch1 = "@M_M_D74"; #معرف قناتك
$ch = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ch1."&user_id=".$from_id);
$getch = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ch1))->result;
$Namech = $getch->title;
$linkch1 = $ch1;
$linkch = str_replace("@","",$linkch1);
if($message && (strpos($ch,'"status":"left"') or strpos($ch,'"Bad Request: USER_ID_INVALID"') or strpos($ch,'"status":"kicmkad"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'• عذرا عزيزي عليك الاشتراك في قناة البوت 
- - - - - - - - - - - 
• '.$ch1.'
- - - - - - - - - - - ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$Namech" ,'url'=>"t.me//$namech"]],
]])
]);return false;
} */
////
if($text == "/start"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://k.top4top.io/p_2539wc7p91.jpg",
'caption'=>"
*اهلا بك $name في بوت فشار استمتع بكل انواع الافلام مجاني بدون اعلانات *
",'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text'=>"افلام وثائقية",'callback_data'=>'v#0'],['text'=>"افلام موسيقية",'callback_data'=>'v#1']],
[['text'=>"افلام مغامرة",'callback_data'=>'v#2'],['text'=>"افلام كوميديا",'callback_data'=>'v#3']],
[['text'=>"افلام غموض",'callback_data'=>'v#4'],['text'=>"افلام غربية",'callback_data'=>'v#5']],
[['text'=>"افلام عائلية",'callback_data'=>'v#6'],['text'=>"افلام سيرة ذاتية",'callback_data'=>'v#7']],
[['text'=>"افلام رياضة",'callback_data'=>'v#8'],['text'=>"افلام رومانسية",'callback_data'=>'v#9']],
[['text'=>"افلام رعب",'callback_data'=>'v#10'],['text'=>"افلام دراما",'callback_data'=>'v#11']],
[['text'=>"افلام خيال علمي",'callback_data'=>'v#12'],['text'=>"افلام حرب",'callback_data'=>'v#13']],
[['text'=>"افلام جريمة",'callback_data'=>'v#14'],['text'=>"افلام تاريخ",'callback_data'=>'v#15']],
[['text'=>"افلام انيميشن",'callback_data'=>'v#16'],['text'=>"افلام اكشن",'callback_data'=>'v#17']],
[['text'=>"افلام اثارة",'callback_data'=>'v#18'],['text'=>"افلام فانتاسيا",'callback_data'=>'v#19']],
]])
]);
}
$ex = explode("#",$data);
$info = json_decode(file_get_contents("http://nailspansseh.com/api/eg.php?s=".movie($ex[1])),true);
if ($ex[0] =="v"){
for($i=0;$i<=count($info);$i++){
$l=$info[$i]["name"];
$reply_markup['inline_keyboard'][] = [['text'=>"".$l,'callback_data'=>"l#$ex[1]#$i"]];
}
for($i=0;$i<10;$i++){
$ar[] = ["type"=>"photo","media"=>$info[$i]["img"]];
}
$reply_markup['inline_keyboard'][] = [['text'=>"رجوع",'callback_data'=>"movie"]];
bot("sendMediaGroup",[
"chat_id"=>$chat_id,
"media"=>json_encode($ar
)]);
$reply_markup = json_encode($reply_markup);
bot('editMessageCaption',[
'chat_id'=>$chat_id,
'message_id' =>$message_id,
'caption'=>"
* - يرجي اختيار الفيلم *
",'parse_mode'=>"Markdown",
'reply_markup'=>$reply_markup
]);
}
$url = json_decode(file_get_contents("http://nailspansseh.com/api/eg.php?s=".movie($ex[1])),true)[$ex[2]]["url"];
$info = json_decode(file_get_contents("http://nailspansseh.com/api/eg.php?d=".$url),true);

$name =$info["name"];
$i=$info["info"];
$s=$info["story"];
if ($ex[0]=="l"){
for($k=0;$k<count($info["url"]);$k++){
$url= $info["url"][$k]["url"];
$q= $info["url"][$k]["q"];
$reply_markup['inline_keyboard'][] = [['text'=>"".$q,'url'=>"https://nailspansseh.com/api/v.php?v=".$url]];
}
$reply_markup['inline_keyboard'][] = [['text'=>"رجوع",'callback_data'=>"movie"]];
$reply_markup = json_encode($reply_markup);
bot('editMessageMedia',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'media'=>json_encode([
'type'=>'photo',
'media'=>$info["img"],
'caption'=>"
🌿 الاسم : $name

$i

📄 القصة : $s
",'parse_mode'=>"Markdown"
]),
'reply_markup'=>$reply_markup
]);
}
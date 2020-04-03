<?

$token = "1006318218:AAHQRvwLYiqNgsqINvhfCiSAsE7qfmkOyDk";
$website = "https://api.telegram.org/bot".$token;

$update = file_get_contents('php://input');
$update = json_decode($update, true);

//VARIABILI
$text = $update['message']['text'];
$chatId = $update['message']['chat']['id'];
$userId = $update['message']['from']['id'];
$replyUserId = $update['message']['reply_to_message']['from']['id'];
$username = $updare['message']['from']['username'];
$firstname = $update['message']['from']['first_name'];
$lastname = $update['message']['from']['last_name'];
$message_id = $update['message']['message_id'];

if($username == "") {
  $username == "-";
} else {
  $username == "@$username";
}

$query = $update['callback_query'];
$queryId = $query['id'];
$queryUserId = $query['from']['id'];
$queryChatId = $query['message']['chat']['id'];
$queryUsername = $query['from']['username'];
$querydata = $query['data'];
$queryMessageId = $query['message']['message_id'];

$startkey = '[{"text":"📃 Vocaboli 📃","callback_data":"vocaboli"}],[{"text":"💾 Info 💾","callback_data":"info"},{"text":"💎 Vip 💎","callback_data":"vip"}],[{"text":"➕ Aggiungimi ad un gruppo ➕","url":"https://t.me/DoggyMagicBot?startgroup=start"}],[{"text":"🐕 Canile 🐕","callback_data":"canile"},{"text":"⚙️ Creatore ⚙️","url":"https://telegram.me/Reverseeh"}]'; //,[{"text":"💿 Patch Notes 💿","url":""}]
$back = '[{"text":"🔙 Indietro 🔙","callback_data":"indietro"}]';

$startmsg = "<b>Ciao $name sono Doggy🐶!\nSono un bot molto simpatico che serve a rendere la chat del vostro gruppo molto più bella!</b>\n\n<i>Clicca Vocaboli per vedere tutto quello che posso fare!</i>";
$comandi = "<b>Vocaboli📃</b>\n\n◽️ Ciao\n◽️ Come stai?\n◽️ Cosa hai mangiato oggi?\n◽️ Sad\n◽️ Rip\n◽️ Quirk\n◽️ Pillola / Pillole\n◽️ Capra\n◽️ Andiamo\n◽️ Oh My Godness\n◽️ Palla\n◽️ Fascia\n◽️ Doggy\n◽️ Ti voglio bene\n◽️ Tu / No tu\n◽️ Ti odio\n◽️ Doggy?\n◽️ Ma\n◽️ Sei stupido\n◽️ Non è vero\n◽️ ...\n◽️ 118\n◽️ ?\n◽️ Perchè?\n◽️ Ez\n◽️ 666\n◽️ Xd\n◽️ Basta\n◽️ Non saprei\n◽️ Chi è il tuo pardone?\n◽️ Dove sei?\n◽️ Usciamo?\n◽️ No\n◽️ Si\n◽️ Nulla\n◽️ Ovvio\n◽️ Unicorno\n◽️ Gesu / Gesù\n◽️ Mi canti una canzone?\n◽️ Avada Kedavra\n◽️ Woof\n◽️ Un iceberg\n◽️ Jack sto volando?\n◽️ Io sono tuo padre\n◽️ Quand\'è il tuo compleanno?\n◽️ Roblox\n◽️ Fortnite\n◽️ Girati\n◽️ Sei un faschion blogger?\n◽️ Sai respirare?\n◽️ Fai schifo\n◽️ Sei sexy\n◽️ Ok\n◽️ Voglio suicidarmi\n◽️ Ho paura\n◽️ McDonald\'s (@NoQuitt)\n◽️ OverFive (@OFRiuh)\n◽️ Kebab (@OFdm4)\n◽️ Burger King (@Gius_00)\n◽️ Netflix (@easyjump)\n◽️ Account (@Diesel95)\n◽️ Reverse (@Sak3y)\n◽️ Chip (@Sak3y)\n◽️ Dazn (@Makries)\n◽️ Yanklee (@yankleecandle)\n\n<i>Per ora ci sono</i> <b>66</b> <i>vocaboli!</i>";
if($querydata == "vocaboli") {
    editMessage($queryChatId,$queryMessageId,"eeee",$back,"inline");
    exit();
  }

  if($querydata == "indietro") {
    editMessage($queryChatId,$queryMessageId,$GLOBALS[startmsg],$GLOBALS[startkey],"inline");
    exit();
  }


switch(strtolower($text)) {
  case "/start":
  sendMessage($chatId,$startmsg,$startkey,"inline");
  break;
}


switch(strtolower($text)) {
  case "/comandi":
  sendMessage($chatId,$comandi,$startkey,"inline");
  break;
}



switch(strtolower($text)) {
  case "ciao":
  sendMessage($chatId,"Ciao $username");
  break;
  case "paky":
  sendMessage($chatId,"Woof?");
  break;
  case "come stai?":
  sendMessage($chatId,"Bene, oggi mi sento un cane libero?");
  break;
  case "cosa hai mangiato oggi?":
  sendMessage($chatId,"Croccantini, sempre e solo croccantini");
  break;
  case "rip":
  sendMessage($chatId,"Nooo mi era simpatico");
  break;
  case "sad":
  sendMessage($chatId,"Prova a far uscire la testa dal finestrino, a me rende felice");
  break;
  case "andiamo":
  sendMessage($chatId,"No, torniamo indietro");
  break;
  case "pillole":
  sendMessage($chatId,"Prova a cercare nel cassetto");
  break;
  case "voglio suicidarmi":
  sendMessage($chatId,"Ok, a dopo");
  break;
  case "quirk":
  sendMessage($chatId,"No, si dice Quork");
  break;
  case "oh my godness":
  sendMessage($chatId,"No, si dice Oh Mamma Bella!");
  break;
  case "palla":
  sendMessage($chatId,"La prendo io");
  break;
  case "doggy":
  sendMessage($chatId,"Dimmi tutto");
  break;
  case "ti voglio bene":
  sendMessage($chatId,"Anche io");
  break;
  case "tu":
  sendMessage($chatId,"No tu");
  break;
  case "no tu":
  sendMessage($chatId,"No tu");
  break;
  case "ti odio":
  sendMessage($chatId,"Dimmi cosa ti ho fatto di male, potremmo risolvere");
  break;
  case "ho paura":
  sendMessage($chatId,"Tranquillo ora c'è Doggy con te");
  break;
  case "?":
  sendMessage($chatId,"Cos'è che non hai capito?");
  break;
  case "118":
  sendMessage($chatId,"Non dirò quello che pensi, ormai questa meme è morta");
  break;
  case "...":
  sendMessage($chatId,"...");
  break;
  case "non è vero":
  sendMessage($chatId,"Ne sei proprio sicuro?");
  break;
  case "sei stupido":
  sendMessage($chatId,"perchè mi dici questo?");
  break;
  case "ma":
  sendMessage($chatId,"Cosa è successo?!");
  break;
  case "doggy?":
  sendMessage($chatId,"Si sono proprio io");
  break;
  case "diesel":
  sendMessage($chatId,"Goodbye");
  break;
  case "666":
  sendMessage($chatId,"Non invocarlo");
  break;
  case "xd":
  sendMessage($chatId,"Xdddd11!!1!!!");
  break;
  case "basta":
  sendMessage($chatId,"Ok mi sto zitto");
  break;
  case "diesel":
  sendMessage($chatId,"Goodbye");
  break;


}





switch (strtolower($text))  {
    case "pesca una carta":
    $num = rand(1,7);
    $carta = rand(1,10);
    switch($num) {
case 1:
sendMessage($chatId, "Ho pescato: $carta ♠️");
break;
case 2:
sendMessage($chatId, "Ho pescato: $carta ♣️");
break;
case 3:
sendMessage($chatId, "Ho pescato: $carta ♥️");
break;
case 4:
sendMessage($chatId, "Ho pescato: $carta ♦️");
break;
case 5:
sendMessage($chatId, "Ho pescato: J ♦️");
break;
case 6:
sendMessage($chatId, "Ho pescato: Q ♦️");
break;
case 7:
sendMessage($chatId, "Ho pescato: K ♦️");
break;
case 8:
sendMessage($chatId, "Ho pescato: J ♥️");
break;
case 9:
sendMessage($chatId, "Ho pescato: Q ♥️");
break;
case10:
sendMessage($chatId, "Ho pescato: K ♥️");
break;
case 11:
sendMessage($chatId, "Ho pescato: J ♣️");
break;
case 12:
sendMessage($chatId, "Ho pescato: Q ♣️");
break;
case13:
sendMessage($chatId, "Ho pescato: K ♣️");
break;
case 14:
sendMessage($chatId, "Ho pescato: J ♠️");
break;
case 15:
sendMessage($chatId, "Ho pescato: Q ♠️");
break;
case16:
sendMessage($chatId, "Ho pescato: K ♠️");
break;
}
break;
}

switch (strtolower($text))  {
    case "pesca due carte":
    $num = rand(1,7);
    $carta1 = rand(1,10);
    $carta2 = rand(1,10);
    switch($num) {
case 1:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♣️");
break;
case 2:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♥️");
break;
case 3:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♠️");
break;
case 4:
sendMessage($chatId, "Ho pescato: $carta1 ♠️ e $carta2 ♦️");
break;
case 5:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♣️");
break;
case 6:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♥️");
break;
case 7:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♠️");
break;
case 8:
sendMessage($chatId, "Ho pescato: $carta1 ♣️ e $carta2 ♦️");
break;
case 9:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♣️");
break;
case 10:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♥️");
break;
case 11:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♠️");
break;
case 12:
sendMessage($chatId, "Ho pescato: $carta1 ♥️ e $carta2 ♦️");
break;
case 13:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♣️");
break;
case 14:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♥️");
break;
case 15:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♠️");
break;
case 16:
sendMessage($chatId, "Ho pescato: $carta1 ♦️ e $carta2 ♦️");
break;
}
break;
}




function sendMessage($chatId,$text,$tastiera,$message_id,$tipo)
  {
    if(isset($tastiera)){
      if($tipo == "fisica"){
        $key = '&reply_markup={"keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
      } else {
        $key = '&reply_markup={"inline_keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
      }
    }
    $url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&reply_to_message_id=$message_id&disable_web_page_preview=".true."&parse_mode=HTML&text=".urlencode($text).$key;
    file_get_contents($url);
  }

function editMessage($chatId,$newText,$tastiera,$text,$tipo) {
  if(isset($tastiera)){
    if($tipo == "fisica"){
      $key = '&reply_markup={"keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
    } else {
      $key = '&reply_markup={"inline_keyboard":['.urlencode($tastiera).'],"resize_keyboard":true}';
    }
  }
  $url = $GLOBALS[website]."/editMessageText?chat_id=$chatId&disable_web_page_preview=".true."&parse_mode=HTML&text=".urlencode($newText).$tastiera;
  file_get_contents($url);
}

function deleteMessage($chatId,$message_id) {
  $url = $GLOBALS[website]."/deleteMessage?chat_id=$chatId&message_id=$message_id";
  file_get_contents($url);
}

function passwordGen($length = 12) {
$chars = "abcdefghilmnopqrstuvzjkwyxABCDEFGHILMNOPQRSTUVZJKWYZ1234567890";
$password = substr(str_shuffle($chars), 0, $length);
return $password;
}

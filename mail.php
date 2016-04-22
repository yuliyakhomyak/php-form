$recepient = "dimina@i.ua";
$sitename = "test form";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Ім'я: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "нове повідомлення з сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
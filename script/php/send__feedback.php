<?php
/* ---------- Send message from contacts page ---------- */
$EMAIL = 'info@ovchenkova.ru';
//docenko@yarport.com

if (isset($_POST['name']) and isset($_POST['phone']) and isset($_POST['msg'])){
	
	$NAME = htmlspecialchars(strip_tags(trim($_POST['name'])));
	$PHONE = htmlspecialchars(strip_tags(trim($_POST['phone'])));
	$MSG = htmlspecialchars(strip_tags(trim($_POST['msg'])));
	
	$MESSAGE = "Здравствуйте. Новое сообщение с сайта Орловские дачи.\r\n";
	$MESSAGE .= "Посетитель сайта просит менеджеров компании связаться с ним.\r\n\n";
	$MESSAGE .= "---------------------------------\r\n\n";
	$MESSAGE .= "Данные посетителя сайта:\r\n";
	$MESSAGE .= "Имя: ".$NAME."\r\n";
	$MESSAGE .= "Телефон: ".$PHONE."\r\n";
	$MESSAGE .= "Сообщение: ".$MSG."\r\n\n";
	$MESSAGE .= "---------------------------------\r\n\n";
	$MESSAGE .= "Пожалуйста ответьте в ближайшее время.\r\n";
	$MESSAGE .= "Не отвечайте на данное письмо используя функцию \"Ответить\" почтового клиента. Данное письмо сформировано автоматически.\r\n";
	$MESSAGE .= "Для контактов с посетителем сайта используйте координаты указанные в этом сообщении.\r\n\n";
	$SUBJECT = "Сообщение с сайта Орловские дачи.";
	$SUBJECT = "=?utf-8?b?". base64_encode($SUBJECT) ."?=";
	$FROM = "Орловские дачи";
	$FROM = "=?utf-8?b?". base64_encode($FROM) ."?=";	
	$HEADER = "Content-type: text/plain; charset=utf-8\r\n";
	$HEADER .= "From: ".$FROM."<docenko@yarport.com>\r\n";
	$HEADER .= "MIME-Version: 1.0\r\n"; 
	$HEADER .= "Date: ".date('D, d M Y h:i:s O'); 
	
	if(mail($EMAIL, $SUBJECT, $MESSAGE, $HEADER)) echo 'true';
	else echo 'false';
}
else echo 'false';	
?>
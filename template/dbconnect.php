<?php

	$db = @mysql_connect("pareta.mysql.ukraine.com.ua", "pareta_test", "e2samke4"); // Создаем соединение с сервером БД. Записываем идентификатор соединения в переменную
	
	mysql_select_db("pareta_test", $db); // Выбираем БД
	mysql_query('SET NAMES utf8'); // Для кодировки UTF-8
	mysql_query('SET SESSION time_zone = "+03:00"'); // Устанавливаем временную зону для MySQL
	date_default_timezone_set('Europe/Moscow'); // Выбор географической зоны для PHP

?>
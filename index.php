<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="Anar.N.Agaev - anar.n.agaev@gmail.com">
	<!--link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" /-->
	
    <meta name="description" content="Орловские дачи">
    <meta name="keywords" content="орловские дачи,">
	<title>Орловские дачи</title>
	
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	
	<!--
		<link rel="stylesheet/less" type="text/css" href="style/template_styles.less">
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
	-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="script/js/script.js" type="text/javascript"></script>
	
	<!------------
		Подключем Яндкс карту 
		Инициализация карты и редактирование свойст в файле script/js/mapbasics.js
	------------>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="script/js/mapbasics.js" type="text/javascript"></script>

	
</head>
<body>
<?require_once'template/header.php';?>
<div>
	<h3>Местоположение</h3>
	<p>
		Ярославская область, Ярославский район, Туношёнский с/о, деревня Орлово. 
		Участки расположены в 50-200 метрах от берега реки Волга с удобным подходом 
		и чистым пологим берегом. В пешей доступности находятся Орловские карьеры 
		и река Великая.<br>
		<a id="show__map">Посмотреть на карте</a>
		<span>(откроется в новом окне)</span>
	</p>
	<h3>Подъезд</h3>
	<p>
		Участки находятся в 1 км. от границы города Ярославля, 5 км на автомобиле 
		от посёлка Прибрежный. До участков ведёт асфальтированная/гравийная дорога 
		с круглогодичным проездом.
	</p>
	<h3>Как добраться</h3>
	<p>
		Выезд из города в сторону Костромы, через 2,5 км после границы города перед 
		Воробино левый поворот на Сопёлки. Далее через 1,1 км поворот на Орлово, 
		проезд не сворачивая через всю деревню, 1,9 км. Участки находятся на выезде 
		из деревни в сторону Ярославля.
	</p>
</div>
<div><img src="/img/village__map.png" alt="Расположение участков" title="Расположение участков"></div>
<div>
	<h3>Категория земли</h3>
	<p style="margin-bottom: 48px;">Земли населённых пунктов.</p>
	<h3>Вид разрешённого использования</h3>
	<p>Для индивидуального жилищного строительства.</p>
	<h3>Площадь участков</h3>
	<p>22 участка площадью<br>от 10 до 16 соток.</p>
	<h3>Инфраструктура</h3>
	<p>
		Круглогодичный проезд, ширина проездов между участками 12,5 м. с учётом 
		размещения линий электропередач и газпровода. Электричество 15 кВт на участок. 
		Планируется газификация до 2021 года по областной программе газификации.
	</p>
	<h3>Стоимость участков</h3>
	<p>50 000 рублей за сотку,<br>от собственника.</p>
</div>
<?require_once'template/footer.php';?>
</body>
</html>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хотели бы купить билеты онлайн?");
?><div class="center-col">
	<h3>Хотели бы купить билеты онлайн?</h3>
	<p>
		 Онлайн-тревел-агентство Biletix (<a href="http://www.biletix.ru">www.biletix.ru</a>) разработано в 2008 году. Сегодня Biletix является одним из ведущих интернет-ресурсов, предоставляющих частным клиентам услуги бронирования авиационных и железнодорожных билетов, а также отелей и сопутствующих туристических услуг. Biletix продает авиабилеты на рейсы более 500 российских и зарубежных авиакомпаний и сотрудничает с крупнейшими игроками российского рынка. Biletix представлен во всех крупнейших метапоисковых системах: Aviasales, Kayak, Momondo, Skyscanner, Яндекс.Расписание.
	</p>
	<p>
	</p>
	<p>
		 Ежедневно ресурс посещают десятки тысяч человек. 24 % онлайн-аудитории Biletix — повторные посетители. Клиенты ценят Biletix за простой и доступный для понимания интерфейс и возможность оплаты заказа через все платежные системы.
	</p>
	<h5>Для перехода к процессу бронирования, кликните<br>
 </h5>
 <img width="134" alt="biletix_logo.png" src="/upload/medialibrary/55c/ao4xaw733g56wg4x7lspihlp1hls84zw/biletix_logo.png" height="81" title="biletix_logo.png"><br>
	<br>
	<br>
	<br>
</div>
 <br>
<div class="right-col">
	 <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"right", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "right"
	),
	false
);?> <? /*
	<div class="servicing-inside-page" align="left">
 <a target="_blank" href="https://my.webinar.ru/record/863070/"> <img alt="vebinar(2).jpg" src="/upload/medialibrary/0c8/0c80be1bac8f2cc24ed091c9c2b132bc.jpg" title="vebinar(2).jpg"> </a>
	</div>
	*/ ?> <?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	"right_banner",
	array(
	"CACHE_TIME" => "0",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPONENT_TEMPLATE" => "right_banner",
		"NOINDEX" => "Y",	// Добавлять в ссылки noindex/nofollow
		"QUANTITY" => "1",	// Количество баннеров для показа
		"TYPE" => "right_banner_ru",	// Тип баннера
	)
);?>
</div>
<div class="clear">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
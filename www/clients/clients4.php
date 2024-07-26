<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хотели бы купить билеты онлайн?");
?><div class="center-col">
	<h3>Хотели бы пройти обучение?</h3>
	<p>
		 Учебный центр «ВИП Обучение» - уникальное учебное заведение дополнительного профессионального образования, имеющее собственную платформу дистанционного обучения, которое готовит специалистов транспортной и туристической отрасли. Созданный в 2001 году Учебный центр был предназначен для подготовки сотрудников сервис-центров на железнодорожном транспорте. Сегодня центр предлагает свыше 50 курсов и семинаров для повышения квалификации руководителей и сотрудников аэропортов, авиакомпаний, грузовых агентств, а также предлагаем обучение по работе со всеми существующими на рынке системами бронирования авиационных и железнодорожных перевозок, тарификации. УЦ «ВИП Обучение» сертифицирован провайдерами GDS, аккредитован Транспортно-Клиринговой Палатой (ТКП), а также с 2007 года авторизован Международной ассоциацией воздушного транспорта (ИАТА).
	</p>
	<p>
		 По итогам 2011, 2012 и 2017 годов «ВИП Обучение» вошел в ТОП-10 Европейских Учебных центров ИАТА.
	</p>
	<p>
	</p>
	<p>
		 Помимо подготовки новых кадров и повышения квалификации профессионалов Учебный центр уделяет большое внимание продвижению международных стандартов работы в авиации. Среди наиболее заметных проектов - сотрудничество с ИАТА в сфере подготовки русскоязычного издания Правил перевозки опасных грузов и распространения специализированной отраслевой литературы.
	</p>
	<h5>Для получения подробной информации, кликните:</h5>
 <a href="http://www.vip-class.ru/" target="_blank"><img src="<?=SITE_DIR?>images/vip_training.png" alt=""></a>
</div>
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
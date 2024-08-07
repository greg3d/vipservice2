<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хотели бы стать нашим субагентом?");
?><div class="center-col">
	<h3>Хотели бы стать нашим субагентом?</h3>
	<p>
		 Рады, что Вы рассматриваете возможность стать нашим субагентом. За двадцать пять лет мы накопили огромный опыт в сфере продажи билетов и сопутствующих услуг, который позволил нам предложить несколько технологических возможностей для совместного бизнеса.
	</p>
	<h5>Классическая технология — пульты кассиров</h5>
	<p>
		 Наши специалисты установят и подключат пульты кассиров GDS — Amadeus, Sabre, Galileo и CRS — «Сирена-Трэвел», «Сирена 2.3». Мы обеспечим единое решение всех вопросов, от постановки задачи до внедрения систем бронирования, с дальнейшим сопровождением.&nbsp;
	</p>
	<h5>Портбилет</h5>
	<p>
		 Портбилет — простое эффективное онлайн решение для поиска, бронирования и продажи билетов, а также широкого спектра дополнительных услуг. Сегодня в системе представлен широкий контент авиационных и железнодорожных билетов, билеты на «Аэроэкспресс», гостиницы, страховые полисы, трансферные и автобусные перевозки.
	</p>
	<p>
		 За время своего развития система превратилась в индустриальное решение для тех, кто продает пассажирские перевозки в качестве основного или дополнительного бизнеса. В фокусе Портбилет – удобство пользователя, возможность настроить среду под собственные потребности для эффективной работы. Рабочий стол Портбилет – это индивидуальная экосистема, чуткая, гибкая, индивидуально настраиваемая.
	</p>
	<p>
		 Наличие блоков трэвел-политики, авторизации, аналитики, формирования комплексной заявки с расширенным набором услуг, помимо перевозки, позволило превратить Портбилет в индустриальные решения как минимум для двух отраслей – продажи пассажирских перевозок и профессиональных услуг в области организации деловых поездок.
	</p>
	<p>
		 Основные преимущества системы Портбилет:
	</p>
	<p>
		 - обширный контент и привлекательные коммерческие условия от лидирующего российского консолидатора холдинга Випсервис<br>
		 - интерфейс, легко настраиваемый под индивидуальные потребности пользователя<br>
		 - личный кабинет с единым балансом и возможностью организации многоуровневого процесса продаж<br>
		 - анализ различных аспектов процесса продаж и визуализация результатов <br>
 <br>
	</p>
	<h5>
	Мы открыты к сотрудничеству! </h5>
	<p>
	</p>
	<p>
		<h5> Свяжитесь с нашими специалистами любым удобным для вас способом!
	</p>
 </h5>
	<p>
	</p>
	<p>
		 Департамент продаж<br>
		 Эл. почта: <a href="mailto:portbilet@vipservice.ru">portbilet@vipservice.ru</a><br>
		 Тел.: +7 (495) 626-50-12
	</p>
	<p class="bold">
 <br>
	</p>
</div>
<div class="right-col">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"right",
	array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => "right",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	)
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
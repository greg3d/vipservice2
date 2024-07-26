<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хотели бы стать нашим корпоративным клиентом?");
?><div class="center-col">
	<h3>Хотели бы стать нашим корпоративным клиентом?</h3>
	<p>
		Корпоративный блок Випсервис специализируется на консалтинге и комплексном управлении деловыми поездками. В своей работе корпоративный бизнес Випсервис использует 20-летний опыт холдинга в сфере корпоративного туризма, а также многолетние связи, которые позволяют заключать прямые договоры с основными поставщиками тревел-услуг по всему миру. Випсервис гарантирует клиентам предоставление уникальных коммерческих условий и гибкую систему скидок.
	</p>
	<h5><a href="https://corp.vipservice.ru/solutions/">Подробнее</a></h5>
	<h5><br>
	</h5>
	<div class="accordion-offices ui-accordion ui-widget ui-helper-reset" id="accordion" role="tablist">
		<div class="offices ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-accordion-accordion-panel-0" aria-labelledby="ui-accordion-accordion-header-0" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
			 <ifr ame width="325" height="250" frameborder="0" src="https://maps.google.ru/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%B5%D1%80.,+17,+%D0%BA%D0%BE%D1%80%D0%BF.+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;aq=&amp;sll=55.780704,37.691231&amp;sspn=0.008374,0.022724&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%B5%D1%80.,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&amp;t=m&amp;z=14&amp;ll=55.780704,37.691231&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no"></iframe><br>
 <small><a style="color:#0000FF;text-align:left" href="https://maps.google.ru/maps?f=q&source=embed&hl=ru&geocode=&q=%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%B5%D1%80.,+17,+%D0%BA%D0%BE%D1%80%D0%BF.+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&aq=&sll=55.780704,37.691231&sspn=0.008374,0.022724&ie=UTF8&hq=&hnear=%D0%9F%D0%B5%D1%80%D0%B5%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D0%B5%D1%80.,+17,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&t=m&z=14&ll=55.780704,37.691231">Просмотреть увеличенную карту</a></small>
			<h4>Центральный офис</h4>
			<p>
				 105082,<br>
				 Москва, Переведеновский пер., д. 17, корп. 1<br>
				 Тел./факс: +7 (495) 626-48-88<br>
				 Метро «Бауманская», «Электрозаводская»
			</p>
			<p>
				 Обслуживание субагентов:<br>
				 +7 (495) 626-48-88
			</p>
			<p>
				 Корпоративное обслуживание: <br>
				 +7 (495) 626-47-74
			</p>
			<p>
				 Как добраться oбщественным транспортом от метро
			</p>
			<p>
				 - троллейбусы № 22, 88 <br>
				 - автобусы № м3, Н3, Т25 <br>
				 до остановки «Ул. Бакунинская, д. 84». <br>
				 Ориентир: чайхана «Павлин-Мавлин»
			</p>
		</div>
	</div>
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
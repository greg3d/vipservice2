<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Три причины стать нашим клиентом");
?>

<div class="center-col">

	<h3>Три причины стать нашим клиентом</h3>
	<p>Наши услуги адресные, а подход индивидуальный, потому что каждый, с кем мы общаемся — сотрудник, партнер или клиент — оставляет след в нашей душе.</p>
	<h5>Мы поддерживаем и объединяем:</h5>
	<p>Гибкая технологическая платформа гармонизирует различия в процессах и объемах бизнеса, уменьшая ручной труд и увеличивая эффективность.</p>
	<h5>Мы открываем новые возможности:</h5>
	<p>Большой пул поставщиков и длительный опыт совместной работы с ними увеличивает разнообразие и качество услуг.</p>
	<h5>Мы строим долгосрочные отношения:</h5>
	<p>Доверие и ответственность превращают короткое знакомство в прочную дружбу.</p>
	<p>Мы работаем так, чтобы нас выбирали сердцем!</p>

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
);?>
		<? /*
	<div class="servicing-inside-page" align="left">
		<a target="_blank" href="https://my.webinar.ru/record/863070/">
			<img src="<?=SITE_DIR?>images/vebinar(2).jpg">
		</a>
	</div>
	*/ ?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner", 
	"right_banner", 
	array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"NOINDEX" => "Y",
		"QUANTITY" => "1",
		"TYPE" => "right_banner_ru",
		"COMPONENT_TEMPLATE" => "right_banner"
	),
	false
);?>
</div>

<div class="clear"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
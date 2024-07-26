<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<div class="center-col">



The text goes here








</div>
<div class="right-col">
	 <?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"right",
		Array(
			"ALLOW_MULTI_SELECT" => "Y",
			"CHILD_MENU_TYPE" => "submenu",
			"COMPONENT_TEMPLATE" => "right",
			"DELAY" => "Y",
			"MAX_LEVEL" => "4",
			"MENU_CACHE_GET_VARS" => array(),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_USE_GROUPS" => "N",
			"ROOT_MENU_TYPE" => "left",
			"USE_EXT" => "N"
		)
	);?>
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
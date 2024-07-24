<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<div class="center-col-wide">



The text goes here







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
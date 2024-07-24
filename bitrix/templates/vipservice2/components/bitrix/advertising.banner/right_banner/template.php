<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="servicing-inside-page">
<?
	foreach ( $arResult["BANNERS"] as $key=>$bannerItem ){
		?>
		<a href=" <? $arResult["BANNERS_PROPERTIES"][$key]["URL"]; ?> " target="<? $arResult["BANNERS_PROPERTIES"][$key]["URL_TARGET"]; ?>">
			<? echo $bannerItem; ?>
		</a>
		<?
	}
?>
</div>
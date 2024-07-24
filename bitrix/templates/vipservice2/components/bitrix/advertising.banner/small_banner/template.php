<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="main-right-banner">
<?
	for ( $key = 0; $key < count( $arResult["BANNERS"] ); $key++){
		//echo '<a href="' . $arResult["BANNERS_PROPERTIES"][$key]["URL"] . '" >' . $arResult["BANNERS"][$key] . '</a>';
		echo $arResult["BANNERS"][$key];
		/* ?>
		<a href="<? echo $arResult["BANNERS_PROPERTIES"][$key]["URL"]; ?>" target="<? echo $arResult["BANNERS_PROPERTIES"][$key]["URL_TARGET"]; ?>">
			<? echo $bannerItem; ?>
		</a>
		<? */
	}
?>
</div>


<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/*
if($arParams["USE_RSS"]){
	if(method_exists($APPLICATION, 'addheadstring'))
		$APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="'.$arParams["TITLE_RSS"].'" href="'.SITE_DIR.'rss_news.php" />');
}
*/
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?if(count($arResult["ITEMS"]) > 0):?>
<div class="newsletter-list">


<table class="newsletter-list-table">

	<tr>
		<th>ID</th>
		<th>Дата публикации</th>
		<th>Авиакомпания</th>
		<th>АСБ</th>
		<th>Тема</th>
		<th>Аннотация</th>
	</tr>


<?
	foreach($arResult["ITEMS"] as $arItem):
?>

	<tr>
		<td><? echo $arItem['ID']; ?></td>
		<td><? echo $arItem['DISPLAY_ACTIVE_FROM']; ?></td>
		<?
		$count = count( $arItem['PROPERTIES'] );
		foreach($arItem['PROPERTIES'] as $prop ):
			if (--$count <= 0) {
				break;
			} else { 
		?>
		<td> <? echo  $prop['VALUE_ENUM']; ?> </td>
			<? }
			endforeach;
			?>
		<td>
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
				<? echo $arItem['NAME']; ?>
			</a>
		</td>
	</tr>
	
	<? endforeach; ?>
	
</table>








</div>
<?endif;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

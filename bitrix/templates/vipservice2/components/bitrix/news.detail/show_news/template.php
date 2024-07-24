<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); /*
*/


?>

<div class="news-detail custom-news-detail">

	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
		<? /* ?>
		<?php */ ?>
	
	
	<div class="image-left">
		<? foreach($arResult["FIELDS"] as $code=>$value):
			if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code){ ?>
			
			<? /* ?>
				<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;
			<?php */ ?>
				
				<? if (!empty($value) && is_array($value)) { ?>
					<img border="0" 
						src="<?=$value["SRC"]?>" 
						width="<?=$value["WIDTH"]?>" 
						height="<?=$value["HEIGHT"]?>">
				<? }
			}
			else { ?>
					<? /* ?>
						<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
					<?php */ ?>
				<? } ?>
			<br />
		<?endforeach; ?>
	</div>
	
	<div class="news-content-right-side">
	
	
	<h3><?=$arResult["NAME"]?></h3>
	
	
	<? /* if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif; */?>
	
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	
	<? /* if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif; */ ?>

	<div style="clear:both"></div>
	<br />
	<? /* foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach; */ ?>
	<? foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty): ?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach; ?>
	
	

				<? /*  <div id="fb-root"></div> */ ?>

		<?/* 
			<div class='fb-like' data-href='' data-layout='button' data-action='like' data-show-faces='true' data-share='true'></div>

			<div id='vk_like'></div>
			<script type='text/javascript'>
				VK.Widgets.Like('vk_like', {
					type: 'button', 
					pageTitle: 'Портбилет 2.0: Неизвестная сторона известной системы', 
					pageDescription: 'В майском номере журнала &laquo;Турбизнес&raquo; опубликовано интервью с       директором...'
					});
					document.write(VK.Share.button({
						url: '', 
						title: 'Портбилет 2.0: Неизвестная сторона известной системы', 
						description: 'В майском номере журнала &laquo;Турбизнес&raquo; опубликовано интервью с       директором...', 
						image: 'http://vipservice.ru//netcat_files/347/445/h_d7dcd6d4c6af941171076fd1a7d39782'}, {
							type: 'round_nocount', 
							text: 'Share'
					}));
			</script> 
		*/?>

</div>


<div class='clear'></div>

<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>



	<? if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")  { ?>
	
	<? /*  ?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div> 
			<? */ ?>
			
	<div class="news-social-buttons">
			
				<a	href='https://twitter.com/share' 
					style='float:left;' 
					class='twitter-share-button' 
					data-lang='ru' 
					data-text=''
					data-count='none'>Твитнуть</a>
				
				<div class="fb-like"
					data-href="" 
					data-layout="standard" 
					data-action="like" 
					data-size="small" 
					data-show-faces="true" 
					data-share="true"></div>
				
				<? /* ?>
				<script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>

				<script type="text/javascript"> 
				document.write(VK.Share.button(
					{url: '<? echo "http://" . $_SERVER["HTTP_HOST"] . $arResult["DETAIL_PAGE_URL"]; ?>'},
					{ type: "round", text: "Share"}));
				</script>
				
				<? */ ?>

				<script type="text/javascript">
				  VK.init({apiId: API_ID, onlyWidgets: true});
				</script>

				<!-- Put this div tag to the place, where the Like block will be -->
				<div id="vk_like"></div>
				<script type="text/javascript">
				VK.Widgets.Like("vk_like", {type: "button"});
				</script>

				<!-- Put this script tag to the place, where the Share button will be -->
				<script type="text/javascript"><!--
				document.write(VK.Share.button(false,{type: "round", text: "Share"}));
				--></script>
  
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<script> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return;js = d.createElement(s);js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
  
	</div>

<? } ?>




<div class='clear'></div>

<? /*

	<div>
	   <div class='back_arrow'></div>
	   <a href='news.html' class='more-link' >Назад</a>
	   
	</div>
*/ ?>
	
	
	
	
</div>
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
$this->setFrameMode(true);?>
<div class="search-form">
<form action="<?=$arResult["FORM_ACTION"]?>">
	<p class="control has-icons-right">
		<input class="input" type="text" name="q" size="15" maxlength="50" placeholder="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>">
		<input name="s" type="submit" value="" class="is-hidden" />
		<span class="icon is-small is-right">
			  <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
				   xmlns="http://www.w3.org/2000/svg">
				<circle cx="8.25" cy="8.25" r="6" stroke="#D9D9D9" stroke-width="1.5" stroke-linecap="round"
						stroke-linejoin="round"/>
				<path d="M12.375 12.7185L16.125 16.4685" stroke="#D9D9D9" stroke-width="1.5"
					  stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
		</span>
	</p>
</form>
</div>
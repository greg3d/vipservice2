<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="ourPeople">
	<?foreach($arResult['ITEMS'] as $arItem):?>
		<div class="ourPeople__blockWrap">
			<div class="ourPeople__block">
				<div class="ourPeople__block__img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>"></div>
				<div class="ourPeople__block__title">
					<?if(CSite::InDir('/En/') && $arItem['PROPERTIES']['EN_NAME']['VALUE']) {
						echo htmlspecialcharsBack($arItem['PROPERTIES']['EN_NAME']['VALUE']);
					} elseif(CSite::InDir('/De/') && $arItem['PROPERTIES']['DE_NAME']['VALUE']) {
						echo htmlspecialcharsBack($arItem['PROPERTIES']['DE_NAME']['VALUE']);
					} elseif(CSite::InDir('/Cn/') && $arItem['PROPERTIES']['CN_NAME']['VALUE']) {
						echo htmlspecialcharsBack($arItem['PROPERTIES']['CN_NAME']['VALUE']);
					} else {
						echo $arItem['NAME'];
					}?>
				</div>
				<div class="ourPeople__block__subTitle-block">
					<div class="ourPeople__block__subTitle">
						<?if(CSite::InDir('/En/') && $arItem['PROPERTIES']['EN_SUB_TITLE']['VALUE']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['EN_SUB_TITLE']['VALUE']);
						} elseif(CSite::InDir('/De/') && $arItem['PROPERTIES']['DE_SUB_TITLE']['VALUE']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['DE_SUB_TITLE']['VALUE']);
						} elseif(CSite::InDir('/Cn/') && $arItem['PROPERTIES']['CN_SUB_TITLE']['VALUE']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['CN_SUB_TITLE']['VALUE']);
						} else {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['SUB_TITLE']['VALUE']);
						}?>
					</div>
					<div class="ourPeople__block__text">
						<?if(CSite::InDir('/En/') && $arItem['PROPERTIES']['EN_TEXT']['VALUE']['TEXT']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['EN_TEXT']['VALUE']['TEXT']);
						} elseif(CSite::InDir('/De/') && $arItem['PROPERTIES']['DE_TEXT']['VALUE']['TEXT']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['DE_TEXT']['VALUE']['TEXT']);
						} elseif(CSite::InDir('/Cn/') && $arItem['PROPERTIES']['CN_TEXT']['VALUE']['TEXT']) {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['CN_TEXT']['VALUE']['TEXT']);
						} else {
							echo htmlspecialcharsBack($arItem['PROPERTIES']['TEXT']['VALUE']['TEXT']);
						}?>
					</div>
				</div>			
			</div>
		</div>		
	<?endforeach?>	
</div>
<span class="windowHeightCheck"></span>

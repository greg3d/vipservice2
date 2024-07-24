<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<?if (!empty($arResult)):

		$depth_level = 1;

		?>
		<?
			/* <div class="right-menu"> */
		?>
				<ul class="slider-submenu-section">
					<? foreach($arResult as $key => $val ): 
								/* */ 
							if( isset( $arResult[$key+1] ) && $arResult[$key+1]["DEPTH_LEVEL"] > $depth_level ){  ?>
							
                                <li class="submenu-parent">
                                    <span class="submenu-caret">
                                        <img src="images/arrow_down_white.png" />
                                    </span>
							
							<? } else{ ?>
							<li>
							<? /* */ 
								} ?>
								<a href="<?=$arResult[$key]["LINK"]?>"
									<?if($arResult[$key]["SELECTED"]):?> class="activemenu" <?endif?> > 
									
									<span><?=$arResult[$key]["TEXT"]?></span>
								</a>
								<? /* */
								if( isset( $arResult[$key+1] ) && $arResult[$key+1]["DEPTH_LEVEL"] < $depth_level ){ 
										$depth_level = $arResult[$key+1]["DEPTH_LEVEL"] ; ?>
										
										</ul>
									<? }

									if( isset( $arResult[$key+1] ) && $arResult[$key+1]["DEPTH_LEVEL"] > $depth_level ){ 
										$depth_level = $arResult[$key+1]["DEPTH_LEVEL"] ; ?>
										
										<ul class="submenu">
										<? /* ?>
										<li>
											<a href="<?=$arResult[$key]["LINK"]?>"
												<?if($arResult[$key]["SELECTED"]):?> class="activemenu" <?endif?> > 
												
												<span><?=$arResult[$key]["TEXT"]?></span>
											</a>
                                        </li> 
										<? */ ?>
									<? } else { ?>
							    </li>
									<? /* */ 
										}  ?>
					<? endforeach ?>
				</ul>
				
				<? /*
			</div>
				*/ ?>

		<? /* ?>
			<div class="right-menu">
				<ul>
					<?foreach($arResult as $arItem):?>
								<?if($arItem["DEPTH_LEVEL"]  <  $depth_level): ?>
								</ul>
								<? $depth_level = $arItem["DEPTH_LEVEL"] ; 
								endif ?>
								<?if($arItem["DEPTH_LEVEL"]  >  $depth_level): ?>
								<ul>
								<? $depth_level = $arItem["DEPTH_LEVEL"] ; 
								endif ?>
							<li>
								<a href="<?=$arItem["LINK"]?>" <?if($arItem["SELECTED"]):?> class="activemenu" <?endif?> > <?=$arItem["TEXT"]?></a>
							</li>
					<?endforeach?>
				</ul>
			</div>
			<? */ ?>
	<?endif?>
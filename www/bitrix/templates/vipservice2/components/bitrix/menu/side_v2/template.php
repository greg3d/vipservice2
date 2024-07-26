<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)):
    $depth_level = 1;
    ?>

    <div class="sidemenu">
        <ul>
            <?php foreach ($arResult

            as $key => $val):

            if (isset($arResult[$key + 1]) && $arResult[$key + 1]["DEPTH_LEVEL"] > $depth_level){ ?>

            <li class="dropdown">

                <?php } else{ ?>

            <li>

                <?php } ?>

                <a href="<?= $arResult[$key]["LINK"] ?>"
                    <?php if ($arResult[$key]["SELECTED"]): ?> class="active" <?php endif ?> > <?= $arResult[$key]["TEXT"] ?>
                </a>

                <?php if (isset($arResult[$key + 1]) && $arResult[$key + 1]["DEPTH_LEVEL"] < $depth_level){
                $depth_level = $arResult[$key + 1]["DEPTH_LEVEL"]; ?>

        </ul>
        <?php }


        if (isset($arResult[$key + 1]) && $arResult[$key + 1]["DEPTH_LEVEL"] > $depth_level){
        $depth_level = $arResult[$key + 1]["DEPTH_LEVEL"]; ?>

        <ul>
            <?php } else { ?>
                </li>
            <?php } ?>

            <?php endforeach ?>
        </ul>
    </div>

    <?php /* ?>
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
<?php endif ?>
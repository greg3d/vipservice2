<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arParams["USE_RSS"]) {
    if (method_exists($APPLICATION, 'addheadstring'))
        $APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="' . $arParams["TITLE_RSS"] . '" href="' . SITE_DIR . 'rss_mainnews.php" />');
}
if (count($arResult["ITEMS"]) > 0):
    ?>
    <div class="news">

        <?php foreach ($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
            ?>
            <div class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <?php
                // $arItem["DETAIL_PAGE_URL"]
                // $arParams["HIDE_LINK_WHEN_NO_DETAIL"]
                // $arItem["DETAIL_TEXT"]
                // $arItem["NAME"]

                ?>

                <?php if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                    <div class="date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                <?php endif ?>


                <?php if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                    <h3>
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <?= $arItem["NAME"] ?>
                        </a>
                    </h3>
                <?php endif; ?>
                <div class="news-text">
                    <?php if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                        <div class="intro"><?= $arItem["PREVIEW_TEXT"]; ?></div>
                    <?php endif; ?>
                </div>

                <div class="link">
                    <?php if (LANGUAGE_ID === "ru") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">Далее...</a>
                    <?php } ?>
                    <?php if (LANGUAGE_ID === "en") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">Read more...</a>
                    <?php } ?>
                    <?php if (LANGUAGE_ID === "de") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">Weiterlesen...</a>
                    <?php } ?>
                    <?php if (LANGUAGE_ID === "cn") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">阅读全部...</a>
                    <?php } ?>
                    <?php if (LANGUAGE_ID === "tr") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">More...</a>
                    <?php } ?>
                    <?php if (LANGUAGE_ID === "kz") { ?>
                        <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="more-link">Далее...</a>
                    <?php } ?>
                </div>

            </div>
        <?php endforeach; ?>
    </div>


    <a href="<?= SITE_DIR ?>news/" class="allnews">
        <?php if (LANGUAGE_ID === "ru") { ?>
            Все новости
        <?php } ?>
        <?php if (LANGUAGE_ID === "en") { ?>
            View all news
        <?php } ?>
        <?php if (LANGUAGE_ID === "de") { ?>
            Alle Neuigkeiten anzeigen
        <?php } ?>
        <?php if (LANGUAGE_ID === "cn") { ?>
            所有新闻
        <?php } ?>
        <?php if (LANGUAGE_ID === "kz") { ?>
            Барлық жаңалықтар
        <?php } ?>
        <?php if (LANGUAGE_ID === "tr") { ?>
            Tüm haberler
        <?php } ?>
        <svg class="more-arrow-v2" width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.999999 15.7341L6.33061 9.515C6.7158 9.06562 6.7158 8.40249 6.33061 7.95311L0.999999 1.73406"
                  stroke="#CE0058" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
    </a>
<?php endif; ?>

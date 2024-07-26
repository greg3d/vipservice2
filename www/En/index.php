<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Vipservice");

/*
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
*/ ?>
    <h2 class="more-margin">Услуги</h2>
    <div class="columns is-multiline services">
        <?php
        $galleryID = "";
        $galleryName = "slider_main_2020_general";

        foreach ($arCollections as $item) {
            ($item["NAME"] == $galleryName) ? $galleryID = $item["ID"] : "";
        }

        $sliderFromGalleries = CMedialibItem::GetList(array('arCollections' => array($galleryID)));
        //rearange
        $sliderFromGallery[0] = $sliderFromGalleries[0];
        $sliderFromGallery[1] = $sliderFromGalleries[1];
        $sliderFromGallery[2] = $sliderFromGalleries[2];
        $sliderFromGallery[3] = $sliderFromGalleries[3];
        $sliderFromGallery[4] = $sliderFromGalleries[4];
        $sliderFromGallery[5] = $sliderFromGalleries[5];
        $sliderFromGallery[6] = $sliderFromGalleries[6];
        $sliderFromGallery[7] = $sliderFromGalleries[7];
        //var_dump($sliderFromGallery); die;

        if (isset($sliderFromGallery)) {
            foreach ($sliderFromGallery as $skey => $sliderFromGalleryItem) {
                echo '<div class="services-item">';
                if (isset($sliderFromGalleryItem["DESCRIPTION"])) {
                    $params = json_decode($sliderFromGalleryItem["DESCRIPTION"], true);
                    $current = $params[LANGUAGE_ID];

                    echo '<figure><img src="' . $sliderFromGalleryItem["PATH"] . '" alt="' . $current['title'] . " " . $current['subtitle'] . '" /></figure>';
                    echo '<h3><a href="' . $current['url'] . '">' . $current['title'] . " " . $current['subtitle'] . '</a></h3>';
                    // $current['url']
                    // $current['title']
                    // $current['subtitle']
                    //
                    // $sliderFromGalleryItem["PATH"]
                    // $current['text']
                }
                echo '</div>';
            }
        } ?>
    </div>
    </section>

    <!-- NEWS -->
    <section class="section">
        <h2>News</h2>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"main_news_v2",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "main_news_v2",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_IMG_HEIGHT" => "101",
		"DISPLAY_IMG_WIDTH" => "136",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "arrFilterMain",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_NEWS_COUNT" => "2",
		"MESSAGE_404" => "",
		"NAME_BLOCK" => "News and Views from You",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"TITLE_RSS" => "Главные новости информационного портала",
		"USE_RSS" => "Y"
	)
);?>
    </section>
    <section class="section">

        <?php $APPLICATION->IncludeComponent(
            "bitrix:advertising.banner",
            "small_banner",
            array(
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "COMPONENT_TEMPLATE" => "small_banner",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "NOINDEX" => "N",
                "QUANTITY" => "4",
                "TYPE" => "main_small_banner_en"
            )
        ); ?>
    </section>

    <section class="section">
<?php $APPLICATION->IncludeComponent(
    "bitrix:advertising.banner",
    "wide_banner",
    array(
        "BS_ARROW_NAV" => "Y",
        "BS_BULLET_NAV" => "Y",
        "BS_CYCLING" => "N",
        "BS_EFFECT" => "slide",
        "BS_HIDE_FOR_PHONES" => "N",
        "BS_HIDE_FOR_TABLETS" => "N",
        "BS_KEYBOARD" => "Y",
        "BS_WRAP" => "Y",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => "wide_banner",
        "DEFAULT_TEMPLATE" => "-",
        "HEIGHT" => "300",
        "NOINDEX" => "Y",
        "QUANTITY" => "10",
        "TYPE" => "main_page_big_banner_english"
    )
); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

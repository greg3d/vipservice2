<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");

/*
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
*/ ?>
    <style>
        ul#slider37 {
            padding-left: 0;
            padding-bottom: 0;
        }

        ul#slider37 li {
            list-style-type: none;
        }

        ul#slider37 li:nth-child(5), ul#slider37 li:nth-child(9) {
            clear: left;
        }

        .index-content {
            float: left;
        }

        .uppercase {
            margin: 0 0 15px 0;
        }

        .upper-box h4 {
            height: 40px;
        }

        .upper-box.upside-down {
            margin: -10px 0;
            padding: 0 10px 0 10px;
        }

        .upper-box.upside-down h4 {
            margin-bottom: 40px;
            height: 16px;
        }

        .uppercase.submenu-trigger {
            font-size: 8pt;
        }

        .main-news-list {
            margin-top: -30px;
        }

        .main-right-banner {
            margin-top: -12px;
        }

        .slider-submenu .slider-submenu-section li {
            background: rgb(100, 100, 100);
        }

        @media only screen and (max-width: 768px) {
            #footer-wrapper {
                position: initial !important;
            }

            .more-news-div-all {
                margin-bottom: 35px;
            }

            .help-desk {
                background: #fff;
            }
        }
    </style>
    <div class="wrapper-center1 slider2 index-slider">
        <?php
        $galleryID = "";
        $galleryName = "slider_main_2020_general";

        foreach ($arCollections as $item) {
            ($item["NAME"] == $galleryName) ? $galleryID = $item["ID"] : "";
        }

        //$sliderFromGallery = [];

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

            echo '<ul id="slider37">';
            foreach ($sliderFromGallery as $skey => $sliderFromGalleryItem) {
                echo '<li>';
                echo '<div class="categories-slider slider-submenu">';
                echo '<div class="upper-box">';
                // $params = [];
                if (isset($sliderFromGalleryItem["DESCRIPTION"])) {
                    $params = json_decode($sliderFromGalleryItem["DESCRIPTION"], true);
                    $current = $params[LANGUAGE_ID];

                    echo '<h3>' . $current['title'] . '</h3>';
                    echo '<h4>' . $current['subtitle'] . '</h4>';
                }
                echo '<div class="uppercase submenu-trigger">';
                echo '<a href="' . $current['url'] . '">КӨБІРЕК БІЛУ<img src="/images/arrow_more.png" class="arrow" alt=""></a>';

                if (isset($current["submenu"])) {
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "middle_drop",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "submenu",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "4",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => $current["submenu"],
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "middle_drop"
                        ),
                        false
                    );
                }

                echo '</div>';
                echo '</div>';
                echo '<div class="down-box">';
                echo '<div class="down-box-image-container">';

                echo '<a href="' . $current['url'] . '">';
                echo '<img src="' . $sliderFromGalleryItem["PATH"] . '" /></a>';

                if (isset($current['text'])) {
                    echo '<div class="hide-text">' . $current['text'] . '</div>';
                }


                echo '</div>';
                echo '</div>';

                echo '</div>';
                echo '</li>';

            }
            echo '</ul>';
        } ?>
        <script>
            var mlinks = $('#slider37 > li');
            if ($(window).width() > 768) {
                $(mlinks).each(function (index, value) {
                    if (index > 3) {
                        var downBox = $(value).find('.down-box'),
                            slider = $(value).find('.categories-slider');

                        $(downBox).remove().ready(function () {
                            $(slider).prepend(downBox);
                            $(value).find('.upper-box').addClass('upside-down');
                        });
                    }
                });
            } else {
                $(mlinks).parent().attr('id', 'slider1')
            }
        </script>
    </div>
    <div class="index-content">
        <div class="last-news">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "main_news",
                array(
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
                    "COMPONENT_TEMPLATE" => "main_news",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_IMG_HEIGHT" => "101",
                    "DISPLAY_IMG_WIDTH" => "136",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "", 1 => "",),
                    "FILTER_NAME" => "arrFilterMain",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "3",
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
                    "PAGER_TITLE" => "Haberler",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0 => "", 1 => "",),
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
                    "STRICT_SECTION_CHECK" => "N",
                    "TITLE_RSS" => "Главные новости информационного портала",
                    "USE_RSS" => "Y"
                )
            ); ?>
        </div>
        <div class="main-right-banner">
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
                    "TYPE" => "main_small_banner_ru"
                )
            ); ?>
        </div>
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
                "TYPE" => "main_page_big_banner_ru"
            )
        ); ?>
    </div>
<br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

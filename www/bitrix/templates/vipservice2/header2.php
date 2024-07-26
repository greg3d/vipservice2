<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);


$locationMainpage = true;
$loc = $APPLICATION->GetCurPage(false);
if ($loc !== '/' && $loc !== '/En/' && $loc !== '/De/' && $loc !== '/Cn/' && $loc !== '/Kk/' && $loc !== '/Tr/'):
    $locationMainpage = false;
endif;

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?= LANGUAGE_ID ?>">
    <head>
        <meta name="yandex-verification" content="64779707d1c766c6"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= LANG_CHARSET; ?>"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico"/>
        <!--ShowHead-->
        <?php $APPLICATION->ShowHead(); ?>
        <!--End of ShowHead-->

        <?php $APPLICATION->SetTitle("Vipservice _ "); ?>
        <title><?php echo $APPLICATION->ShowTitle() ?? "Vipservice" ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="NO-CACHE" http-equiv="CACHE-CONTROL"/>
        <meta content="NO-CACHE" http-equiv="PRAGMA"/>

        <!-- Put this script tag to the <head> of your page -->
        <script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>

        <script type="module" crossorigin src="<?=SITE_TEMPLATE_PATH?>/assets/main.xxx.js"></script>
        <link rel="stylesheet" crossorigin href="<?=SITE_TEMPLATE_PATH?>/assets/main.ddfdfdd.css" />

        <?php // ??? - nothing here after render
        if (CModule::IncludeModule("iblock")) {
            $pieces = explode("/", $_SERVER['REQUEST_URI']);
            $arIBlockElement = "";

            if (isset($pieces[3]) && $pieces[3] != "") {
                $arIBlockElement = GetIBlockElement($pieces[3], "");
            } else if (isset($pieces[2]) && $pieces[2] != "") {
                $arIBlockElement = GetIBlockElement($pieces[2], "");
            }
            if (isset($arIBlockElement) && $arIBlockElement != "") {
                $arFile = CFile::GetFileArray($arIBlockElement["PREVIEW_PICTURE"])['SRC']; ?>

                <meta property="og:url" content="<?php echo $arIBlockElement['DETAIL_PAGE_URL']; ?>"/>
                <meta property="og:type" content="website"/>
                <meta property="og:title" content="<?php echo $arIBlockElement['NAME']; ?>"/>
                <meta property="og:description" content="<?php echo $arIBlockElement['PREVIEW_TEXT']; ?>"/>
                <meta name="description" content="<?php echo $arIBlockElement['PREVIEW_TEXT']; ?>"/>
                <meta property="og:image" content="vipservice.ru<?php echo $arFile; ?>"/>
                <?php
            }
        }

        CModule::IncludeModule("fileman");
        CMedialib::Init();
        $arCollections = CMedialibCollection::GetList(array('arOrder' => array('NAME' => 'ASC'), 'arFilter' => array('ACTIVE' => 'Y')));

        ?>
        <?php /*
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter23592421 = new Ya.Metrika({
                            id: 23592421,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/23592421" style="position:absolute; left:-9999px;" alt=""/></div>
        </noscript>
        <!-- /Yandex.Metrika counter --> */ ?>

        <style>
            .is-hidden {
                display: none;
            }

            #form-portbilet {
                position: absolute;
                width: 1px;
                height: 1px;
                opacity: 0;
                left: 0;
                top: 0;
                overflow: hidden;
            }

        </style>
    </head>
<body>
    <!-- Форма (скрытая) для portbilet -->
    <!-- TODO: check in new scripts -->
    <div id="form-portbilet">
        <script
            id="pb-ext-login-form"
            data-main="https://portbilet.ru/app/external-login/assets/js/app/Entry.js"
            src="https://portbilet.ru/app/external-login/assets/js/lib/require/require.js">
        </script>
    </div>

    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<?php

$req_uri = $_SERVER['REQUEST_URI'];
$langList = [
    'ru' => [
        'name' => 'Русский язык',
        'copyright' => 'Випсервис 1995 - ' . date('Y') . ' г. Все права защищены',
        'path' => '/',
        'slogan' => [
            'first' => "Мы работаем так,",
            'second' => "чтобы нас выбирали сердцем"
        ],
        'helpdeskName' => 'Справка',
        'helpdesk' => [
            [
                'title' => 'Субагентам',
                'description' => 'Справочная информация для субагентов',
                'link' => 'https://consolidation.vipservice.ru/quality-control/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => 'Корпоративным клиентам',
                'description' => 'Справочная информация для корпоративных клиентов',
                'link' => 'https://corp.vipservice.ru/contact-us/',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => 'Физическим лицам',
                'description' => 'Ответы на наиболее часто задаваемые вопросы',
                'link' => 'https://biletix.ru/help/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => 'Техническая поддержка',
                'description' => 'Подключение специалиста технической поддержки',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ],
    ],
    'en' => [
        'name' => 'English language',
        'copyright' => 'VIPSERVICE 1995 - ' . date('Y') . ' All rights reserved',
        'path' => '/En/',
        'slogan' => [
            'first' => "We work",
            'second' => "to win your heart"
        ],
        'helpdeskName' => 'Helpdesk',
        'helpdesk' => [
            [
                'title' => 'Sub-agents',
                'description' => 'Reference information',
                'link' => SITE_DIR . 'helpdesk/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => 'Corporate clients',
                'description' => 'Reference information',
                'link' => '#',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => 'Individuals',
                'description' => 'Frequently Asked Questions',
                'link' => SITE_DIR . 'about/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => 'Technical support',
                'description' => 'Connecting a Technical Support',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ],
    ],
    'de' => [
        'name' => 'Deutsch',
        'copyright' => 'VIPSERVICE 1995 - ' . date('Y') . ' All rights reserved',
        'path' => '/De/',
        'slogan' => [
            'first' => "Wir arbeiten",
            'second' => "um dein Herz zu gewinnen"
        ],
        'helpdeskName' => 'Helpdesk',
        'helpdesk' => [
            [
                'title' => 'Für Subagenten',
                'description' => 'Informationen für Subagenten',
                'link' => SITE_DIR . 'helpdesk/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => 'Für Firmenkunden',
                'description' => 'Informationen für Firmenkunden',
                'link' => '#',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => 'Für natürliche Personen',
                'description' => 'Antworten auf häufig gestellte Fragen (FAQ)',
                'link' => SITE_DIR . 'about/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => 'Technischer Support',
                'description' => 'Einen Experten für technischen Support einbeziehen',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ],
    ],
    'cn' => [
        'name' => '官話',
        'copyright' => 'VIPSERVICE 1995 - ' . date('Y') . ' All rights reserved',
        'path' => '/Cn/',
        'slogan' => [
            'first' => "我们竭诚服务，让客户发自内心",
            'second' => "地愿意选择我们！"
        ],
        'helpdeskName' => 'Helpdesk',
        'helpdesk' => [
            [
                'title' => '子代理',
                'description' => '供子代理的参考信息',
                'link' => SITE_DIR . 'helpdesk/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => '企业客户',
                'description' => '供企业客户的参考信息',
                'link' => '#',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => '自然人',
                'description' => '常见问题解答',
                'link' => SITE_DIR . 'about/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => '技术支持',
                'description' => '连接技术支持专家',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ]
    ],
    'kk' => [
        'name' => 'қазақша',
        'copyright' => 'VIPSERVICE 1995 - ' . date('Y') . ' All rights reserved',
        'path' => '/Kk/',
        'slogan' => [
            'first' => "Бізді жүрекпен",
            'second' => "таңдайтындай түрде жұмыс істейміз!"
        ],
        'helpdeskName' => 'Справка',
        'helpdesk' => [
            [
                'title' => 'Субагенттерге',
                'description' => 'Субагенттерге арналған анықтамалық ақпарат',
                'link' => SITE_DIR . 'helpdesk/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => 'Корпоративтік клиенттерге',
                'description' => 'Корпоративтік клиенттерге арналған анықтамалық ақпарат',
                'link' => '#',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => 'Жеке тұлғаларға',
                'description' => 'Ең жиі қойылатын сұрақтарға жауаптар',
                'link' => SITE_DIR . 'about/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => 'Техникалық қолдау',
                'description' => 'Техникалық қолдау маманын қосу',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ]
    ],
    'tr' => [
        'name' => 'Türk dili',
        'copyright' => 'VIPSERVICE 1995 - ' . date('Y') . ' Tüm hakları saklıdır',
        'path' => '/Tr/',
        'slogan' => [
            'first' => "İnsanların bizi",
            'second' => "kalpleriyle seçmesi için çalışıyoruz!"
        ],
        'helpdeskName' => 'Helpdesk',
        'helpdesk' => [
            [
                'title' => 'Alt temsilcilere',
                'description' => 'Alt temsilciler için referans bilgileri',
                'link' => SITE_DIR . 'helpdesk/',
                'image' => '/images/staff_icon.png'
            ],
            [
                'title' => 'Kurumsal müşterilere',
                'description' => 'Kurumsal müşteriler için referans bilgileri',
                'link' => '#',
                'image' => '/images/corporate_icon.png'
            ],
            [
                'title' => 'Gerçek kişilere',
                'description' => 'En sık sorulan soruların cevapları',
                'link' => SITE_DIR . 'about/',
                'image' => '/images/person_icon.png'
            ],
            [
                'title' => 'Teknik destek',
                'description' => 'Teknik destek uzmanına bağlanma',
                'link' => '/servicedesk/files/TeamViewerQS.exe',
                'image' => '/images/hd-1.png'
            ]
        ]
    ],
];
$proceed = false;

foreach ($langList as $key => $lang) {
    if ($lang['path'] == '/') {
        $proceed = $proceed || substr_count($req_uri, $lang['path']) < 4;
    } else {
        $proceed = $proceed || substr_count($req_uri, $lang['path']) == 1;
    }
}

$url = $_SERVER['REQUEST_URI'];
if (strpos($url, '/news/') !== false) {
    $url = "news/";
} else {
    if (strpos($url, '/careers/') !== false) {
        $url = "careers/corp_life/";
    } else {
        $url = $APPLICATION->GetCurPage();
    }
}

$sloganTemplate = '
<div class="slogan">
    <div class="line">$sloganFirst</div>
    <div class="line">$sloganSecond</div>
</div>';

$languagesHtml = '';
$helpdeskContainer = '';
$i = 1;
foreach ($langList[LANGUAGE_ID]['helpdesk'] as $item) {
    $helpdeskContainer .= '<div class="spravka-item" data-link="' . $item['link'] . '">';
    $helpdeskContainer .= '<div class="icon"><img src="' . SITE_TEMPLATE_PATH . '/images/icons/0' . $i . '.svg" alt="" /></div>';
    $helpdeskContainer .= '<h3>' . $item['title'] . '</h3>';
    $helpdeskContainer .= '<p class="info">' . $item['description'] . '</p></div>';
    $helpdeskContainer .= PHP_EOL;
    $i++;
}

foreach ($langList as $key => $lang) {
    $linkk = $url;
    if ($lang['path'] !== $langList[LANGUAGE_ID]['path']) {
        echo "<!--" . $url . "-->";
        if (substr($url, 0, 1) == '/') {
            $linkk = $lang['path'] . substr($url, strlen($langList[LANGUAGE_ID]['path']));
        } else {
            $linkk = $lang['path'] . $url;
        }
    }
    $selected = LANGUAGE_ID === $key ? ' is-selected' : '';
    $languagesHtml .= '<div class="lang' . $selected . '">';
    $languagesHtml .= $selected == '' ? '<a href="' . $linkk . '">' : '';
    $languagesHtml .= '<img src="/images/mobile/' . $key . '.png" alt="' . $lang['name'] . '"/>';
    $languagesHtml .= $selected == '' ? '</a>' : '';
    $languagesHtml .= '</div>';
    $languagesHtml .= PHP_EOL;
}

$sloganHtml = strtr($sloganTemplate, array(
    '$sloganFirst' => $langList[LANGUAGE_ID]['slogan']['first'],
    '$sloganSecond' => $langList[LANGUAGE_ID]['slogan']['second'],
));

?>

<?php

$cond1 =
    substr_count($_SERVER['REQUEST_URI'], 'subagent/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'corporate/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'mice/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'ticket_offices/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'VipTechnologies/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'tourism/') == 1 ||
    substr_count($_SERVER['REQUEST_URI'], 'helpdesk/') == 1;

// if not news and careers/corp_life
$notNews = (substr_count($_SERVER['REQUEST_URI'], 'news/') != 1) &&
    (substr_count($_SERVER['REQUEST_URI'], 'careers/corp_life/') != 1);
?>

<!-- START RENDER -->

<? //= $sloganHtml ?>
<? //= SITE_DIR ?>
<? //= SITE_TEMPLATE_PATH ?>

<div class="hero main<?= $locationMainpage ? '' : ' main2' ?>">
    <div class="hero-body">
        <div class="search-bar desktop"><!--SEARCH BAR-->
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "vipservice",
                array(
                    "USE_SUGGEST" => "N",
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "COMPONENT_TEMPLATE" => "vipservice"
                ),
                false
            );
            ?>
        </div><!--/SEARCH BAR-->
        <nav role="navigation" aria-label="main navigation">
            <div class="brand">
                <svg width="140" height="48" viewBox="0 0 140 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_4217_781)">
                        <path
                            d="M35.2921 42.7056H29.8478V26.7235H35.3907C38.1596 26.7235 40.7857 27.56 40.7857 30.7781C40.7857 32.1854 39.9481 33.6172 38.5193 34.3553C40.4309 34.9507 41.3819 36.5499 41.3819 38.1639C41.3819 41.5541 38.4454 42.7006 35.2921 42.7006V42.7056ZM34.9866 33.3073C35.9375 33.3073 37.8738 33.258 37.8738 31.1373C37.8738 29.5184 36.8441 28.9919 34.9571 28.9919H32.6907V33.3073H34.9817H34.9866ZM32.6956 40.4618H35.2478C37.3959 40.4618 38.47 39.8418 38.47 37.9572C38.47 35.9053 36.7259 35.6691 35.3414 35.6691H32.6907V40.4618H32.6956Z"
                            fill="#315470"/>
                        <path
                            d="M46.4764 30.7781V37.7899L51.3443 30.7781H53.926V42.7006H51.1521V35.615L46.235 42.7006H43.7025V30.7781H46.4764Z"
                            fill="#315470"/>
                        <path d="M67.3379 30.7781V42.7006H64.5738V33.2531H59.77V42.7006H57.006V30.7781H67.3428H67.3379Z"
                              fill="#315470"/>
                        <path
                            d="M79.1919 33.4942C78.3543 33.1399 76.9255 32.7758 75.61 32.7758C73.1958 32.7758 72.3828 34.2077 72.3828 36.9779C72.3828 39.4087 73.0283 40.7176 75.5804 40.7176C76.7728 40.7176 78.1129 40.4765 79.0687 40.1222L79.4235 42.2233C78.4676 42.7006 76.487 42.9368 74.935 42.9368C71.5945 42.9368 69.5646 41.1506 69.5646 36.9779C69.5646 32.8053 71.358 30.532 75.4129 30.532C76.6003 30.532 78.5908 30.7731 79.5417 31.3685L79.187 33.4893L79.1919 33.4942Z"
                            fill="#315470"/>
                        <path
                            d="M90.7849 42.1102C89.5187 42.6563 88.2081 42.9417 86.6512 42.9417C83.1185 42.9417 80.8078 41.6525 80.8078 36.8353C80.8078 32.7118 82.8081 30.5419 86.3457 30.5419C89.8833 30.5419 91.5042 32.4757 91.5042 35.7675C91.5042 35.9594 91.4845 36.8156 91.3564 37.3421H83.5767C83.6703 40.324 85.0598 40.7275 86.9616 40.7275C87.9913 40.7275 89.4497 40.4618 90.3316 40.1321L90.7898 42.1151L90.7849 42.1102ZM83.6211 35.428H88.7353C88.7599 33.6664 87.8484 32.7611 86.2964 32.7611C84.8676 32.7611 83.8871 33.4991 83.6211 35.428Z"
                            fill="#315470"/>
                        <path
                            d="M96.4554 42.2726V47.4736H93.6865V30.7781H96.4554V31.6146H96.5737C97.5739 30.7781 98.5543 30.537 99.8403 30.537C103.304 30.537 104.501 33.4057 104.501 36.5007C104.501 40.078 103.043 42.9418 99.249 42.9418C98.2686 42.9418 97.3374 42.7056 96.5293 42.2283C96.4998 42.248 96.4752 42.248 96.4554 42.2726ZM99.0766 32.7611C97.8646 32.7611 97.2684 32.9973 96.4554 33.2335V40.4126C97.2191 40.6537 97.8892 40.7718 98.8401 40.7718C101.033 40.7718 101.683 39.2464 101.683 36.6188C101.683 34.4735 101.254 32.7562 99.0766 32.7562V32.7611Z"
                            fill="#315470"/>
                        <path
                            d="M110.788 42.7055H106.349V30.783H110.862C113.03 30.783 115.134 31.2849 115.134 33.7648C115.134 34.8326 114.587 35.8364 113.513 36.4613C114.873 36.9583 115.617 37.8194 115.617 39.2021C115.617 41.8739 113.178 42.7105 110.788 42.7105V42.7055ZM110.576 35.5264C111.291 35.5264 112.316 35.428 112.316 34.2372C112.316 33.3072 111.714 32.9972 110.527 32.9972H109.118V35.5264H110.576ZM109.118 40.4814H110.739C112.34 40.4814 112.793 39.8417 112.793 39.0741C112.793 37.9522 111.907 37.7407 110.832 37.7407H109.113V40.4814H109.118Z"
                            fill="#315470"/>
                        <path
                            d="M120.613 30.7781V37.7899L125.486 30.7781H128.062V42.7006H125.293V35.615L120.376 42.7006H117.849V30.7781H120.618H120.613Z"
                            fill="#315470"/>
                        <path
                            d="M139.651 33.4942C138.813 33.1399 137.384 32.7758 136.069 32.7758C133.655 32.7758 132.847 34.2077 132.847 36.9779C132.847 39.4087 133.492 40.7176 136.044 40.7176C137.242 40.7176 138.577 40.4765 139.533 40.1222L139.892 42.2233C138.932 42.7006 136.956 42.9368 135.404 42.9368C132.063 42.9368 130.028 41.1506 130.028 36.9779C130.028 32.8053 131.822 30.532 135.882 30.532C137.069 30.532 139.055 30.7731 140.006 31.3685L139.651 33.4893V33.4942Z"
                            fill="#315470"/>
                        <path
                            d="M25.8025 13.0935C23.8711 15.5784 19.1166 19.3033 12.8347 22.7576C10.1298 19.1655 4.00061 14.0678 2.8477 15.2733C2.34515 15.8048 2.19241 16.6413 4.4736 19.077C5.30626 19.9922 6.02067 20.9861 6.70059 21.9949C9.42028 26.0396 10.5535 30.783 10.5535 30.783C10.5535 30.783 17.3773 27.068 22.1713 22.1326C24.8122 19.4165 26.98 16.4592 28.5813 12.9213C29.0691 11.8683 27.7536 10.589 25.8025 13.0935Z"
                            fill="url(#paint0_linear_4217_781)"/>
                        <path
                            d="M28.4236 3.12425C26.8421 1.35776 24.4279 0.486815 22.1171 0.526179C19.7768 0.550782 17.54 1.4168 15.6973 2.69124C14.7119 3.36043 13.8398 4.14281 13.0465 4.99899C9.04092 2.52886 3.17289 2.40092 0.61579 7.04103C-0.763763 9.41275 0.4532 13.8364 1.49279 13.5411C1.8968 13.423 1.94115 13.0146 2.0052 12.6013C3.06942 6.39151 10.3318 6.14548 14.0122 11.873C17.2936 2.21886 27.1476 4.49709 27.4974 9.12243C27.5466 9.78179 28.1871 10.3083 28.6256 10.1262C29.7884 9.64402 30.4191 5.29914 28.4187 3.13409L28.4236 3.12425Z"
                            fill="url(#paint1_linear_4217_781)"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear_4217_781" x1="28.4712" y1="21.1986" x2="1.91611" y2="21.1986"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#EE2737"/>
                            <stop offset="1" stop-color="#702082"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4217_781" x1="28.7949" y1="7.08609" x2="0.554265" y2="7.08609"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#315470"/>
                            <stop offset="1" stop-color="#62B5E5"/>
                        </linearGradient>
                        <clipPath id="clip0_4217_781">
                            <rect width="140" height="46.9473" fill="white" transform="translate(0 0.526367)"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>

            <div class="languages">
                <div class="arrow">
                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.999817 0.699999L5.23553 4.33062C5.68492 4.7158 6.34805 4.7158 6.79743 4.33061L11.0331 0.7" stroke="#121212" stroke-width="1.1" stroke-linecap="round"></path>
                    </svg>
                </div>
                <?= $languagesHtml ?>
            </div>

            <div class="navbar-menu" id="navMenu">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_horizontal_v2",
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "4",
                        "CHILD_MENU_TYPE" => "submenu",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                        "COMPONENT_TEMPLATE" => "main_horizontal_v2"
                    ),
                    false
                ); ?>
                <div class="search-bar mobile">
                    <p class="control has-icons-right">
                        <input class="input" type="text" placeholder="Поиск">
                        <span class="icon is-small is-right">
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                            <circle cx="8.25" cy="8.25" r="6" stroke="#D9D9D9" stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            <path d="M12.375 12.7185L16.125 16.4685" stroke="#D9D9D9" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </p>
                    <img class="flag" src="<?= SITE_TEMPLATE_PATH ?>/images/flag.png"/>
                </div>
            </div>
            <a class="navbar-burger" role="button" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </nav>
    </div>

    <?= $sloganHtml ?>

</div>

<?php
$ourPeopleCondition =
    CSite::InDir('/about/our_people/') ||
    CSite::InDir('/En/about/our_people/') ||
    CSite::InDir('/De/about/our_people/') ||
    CSite::InDir('/Kk/about/our_people/') ||
    CSite::InDir('/Tr/about/our_people/') ||
    CSite::InDir('/Cn/about/our_people/');
if ($ourPeopleCondition) $classPeople = "class=\"page-wrapper-our_people\"";

$arCurDir = explode("/", $APPLICATION->GetCurDir());

//echo $APPLICATION->GetTitle();
if (!$locationMainpage) {
    $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        ".vipservice",
        array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "vc",
            "COMPONENT_TEMPLATE" => ".default",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO"
        ),
        false
    );
} ?>

    <section class="section">


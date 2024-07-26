<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var string $helpdeskContainer */
/** @var string $helpdeskName */

IncludeTemplateLangFile(__FILE__); ?>

<?php $arCurDir = explode("/", $APPLICATION->GetCurDir()); ?>

</section>

<div id="helpdeskcontainer" class="section blue">
    <h2><?= $helpdeskName[LANGUAGE_ID]["helpdeskName"] ?></h2>
    <div class="spravka">
    <?= $helpdeskContainer ?>
    </div>
</div>
<div style="clear:both"></div>
<footer id="footer" class="footer">
    <div class="logo col">
        <svg width="140" height="47" viewBox="0 0 140 47" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_4217_381)">
                <path
                    d="M35.2918 42.1792H29.8475V26.1971H35.3904C38.1593 26.1971 40.7854 27.0336 40.7854 30.2517C40.7854 31.659 39.9478 33.0909 38.519 33.829C40.4307 34.4244 41.3816 36.0235 41.3816 37.6375C41.3816 41.0278 38.4451 42.1743 35.2918 42.1743V42.1792ZM34.9864 32.7809C35.9373 32.7809 37.8736 32.7317 37.8736 30.6109C37.8736 28.992 36.8438 28.4655 34.9568 28.4655H32.6904V32.7809H34.9814H34.9864ZM32.6953 39.9354H35.2475C37.3957 39.9354 38.4697 39.3154 38.4697 37.4308C38.4697 35.3789 36.7256 35.1428 35.3411 35.1428H32.6904V39.9354H32.6953Z"
                    fill="white"/>
                <path
                    d="M46.4769 30.2517V37.2635L51.3447 30.2517H53.9265V42.1743H51.1526V35.0886L46.2355 42.1743H43.703V30.2517H46.4769Z"
                    fill="white"/>
                <path d="M67.3376 30.2517V42.1743H64.5736V32.7268H59.7698V42.1743H57.0057V30.2517H67.3425H67.3376Z"
                      fill="white"/>
                <path
                    d="M79.1916 32.9678C78.3541 32.6135 76.9252 32.2494 75.6097 32.2494C73.1955 32.2494 72.3826 33.6813 72.3826 36.4516C72.3826 38.8823 73.028 40.1912 75.5802 40.1912C76.7725 40.1912 78.1126 39.9501 79.0685 39.5958L79.4232 41.6969C78.4674 42.1742 76.4867 42.4104 74.9347 42.4104C71.5942 42.4104 69.5643 40.6242 69.5643 36.4516C69.5643 32.2789 71.3577 30.0056 75.4126 30.0056C76.6001 30.0056 78.5906 30.2467 79.5415 30.8421L79.1867 32.9629L79.1916 32.9678Z"
                    fill="white"/>
                <path
                    d="M90.7836 41.5838C89.5174 42.13 88.2068 42.4154 86.6499 42.4154C83.1173 42.4154 80.8065 41.1262 80.8065 36.3089C80.8065 32.1855 82.8069 30.0155 86.3444 30.0155C89.882 30.0155 91.503 31.9493 91.503 35.2412C91.503 35.4331 91.4833 36.2892 91.3552 36.8157H83.5755C83.6691 39.7976 85.0585 40.2011 86.9603 40.2011C87.9901 40.2011 89.4484 39.9354 90.3304 39.6057L90.7886 41.5887L90.7836 41.5838ZM83.6198 34.9016H88.734C88.7587 33.1401 87.8472 32.2347 86.2952 32.2347C84.8663 32.2347 83.8859 32.9728 83.6198 34.9016Z"
                    fill="white"/>
                <path
                    d="M96.4544 41.7462V46.9473H93.6854V30.2517H96.4544V31.0882H96.5726C97.5728 30.2517 98.5533 30.0106 99.8392 30.0106C103.303 30.0106 104.5 32.8793 104.5 35.9744C104.5 39.5516 103.042 42.4154 99.248 42.4154C98.2675 42.4154 97.3363 42.1792 96.5283 41.7019C96.4987 41.7216 96.4741 41.7216 96.4544 41.7462ZM99.0755 32.2347C97.8635 32.2347 97.2673 32.4709 96.4544 32.7071V39.8862C97.2181 40.1273 97.8881 40.2454 98.839 40.2454C101.032 40.2454 101.682 38.72 101.682 36.0925C101.682 33.9471 101.253 32.2298 99.0755 32.2298V32.2347Z"
                    fill="white"/>
                <path
                    d="M110.789 42.1792H106.349V30.2566H110.863C113.03 30.2566 115.134 30.7585 115.134 33.2385C115.134 34.3062 114.587 35.31 113.513 35.9349C114.873 36.4319 115.617 37.293 115.617 38.6757C115.617 41.3476 113.178 42.1841 110.789 42.1841V42.1792ZM110.577 35C111.291 35 112.316 34.9016 112.316 33.7108C112.316 32.7809 111.715 32.4709 110.528 32.4709H109.118V35H110.577ZM109.118 39.9551H110.739C112.341 39.9551 112.794 39.3154 112.794 38.5478C112.794 37.4259 111.907 37.2143 110.833 37.2143H109.114V39.9551H109.118Z"
                    fill="white"/>
                <path
                    d="M120.612 30.2517V37.2635L125.484 30.2517H128.061V42.1743H125.292V35.0886L120.375 42.1743H117.848V30.2517H120.616H120.612Z"
                    fill="white"/>
                <path
                    d="M139.65 32.9678C138.812 32.6135 137.383 32.2494 136.068 32.2494C133.653 32.2494 132.845 33.6813 132.845 36.4516C132.845 38.8823 133.491 40.1912 136.043 40.1912C137.24 40.1912 138.576 39.9501 139.531 39.5958L139.891 41.6969C138.93 42.1742 136.955 42.4104 135.403 42.4104C132.062 42.4104 130.027 40.6242 130.027 36.4516C130.027 32.2789 131.821 30.0056 135.88 30.0056C137.068 30.0056 139.053 30.2467 140.004 30.8421L139.65 32.9629V32.9678Z"
                    fill="white"/>
                <path
                    d="M25.8017 12.5672C23.8703 15.0521 19.1157 18.7769 12.8339 22.2312C10.1289 18.6392 3.99979 13.5414 2.84688 14.747C2.34433 15.2784 2.19159 16.1149 4.47278 18.5506C5.30544 19.4658 6.01985 20.4598 6.69977 21.4685C9.41946 25.5132 10.5527 30.2567 10.5527 30.2567C10.5527 30.2567 17.3765 26.5416 22.1705 21.6063C24.8113 18.8901 26.9792 15.9328 28.5805 12.3949C29.0682 11.3419 27.7527 10.0626 25.8017 12.5672Z"
                    fill="white"/>
                <path
                    d="M28.4234 2.59788C26.8418 0.83139 24.4276 -0.0395527 22.1169 -0.000188003C19.7766 0.0244149 17.5397 0.890437 15.697 2.16487C14.7116 2.83407 13.8395 3.61644 13.0463 4.47262C9.04067 2.00249 3.17264 1.87455 0.615542 6.51466C-0.764011 8.88638 0.452952 13.31 1.49254 13.0147C1.89656 12.8967 1.9409 12.4882 2.00495 12.0749C3.06918 5.86514 10.3315 5.61911 14.012 11.3467C17.2934 1.69249 27.1473 3.97072 27.4971 8.59607C27.5464 9.25542 28.1869 9.78193 28.6254 9.59987C29.7882 9.11765 30.4188 4.77278 28.4185 2.60772L28.4234 2.59788Z"
                    fill="white"/>
            </g>
            <defs>
                <clipPath id="clip0_4217_381">
                    <rect width="140" height="46.9473" fill="white"/>
                </clipPath>
            </defs>
        </svg>
    </div>

    <?php $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "main_footer_v2",
        array(
            "ROOT_MENU_TYPE" => "top",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_USE_GROUPS" => "N",
            "MENU_CACHE_GET_VARS" => array(),
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "submenu",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "COMPONENT_TEMPLATE" => "main_footer_v2"
        ),
        false
    ); ?>

    <div class="col">
        <h4>Контакты</h4>
        <p>Москва, Переведеновский пер., д. 17, корп. 1.</p>
        <p>+7 (495) 626-44-40</p>
        <p>email@email.ru</p>

        <a target="_blank" href="https://t.me/Holding_Vipservice">
            <img src="/sign/tg/tg.png" width="32" height="32">
        </a>&nbsp;&nbsp;&nbsp;

        <a target="_blank" href="https://www.youtube.com/channel/UCiTmznB5muHnaBCYhc7k1rQ">
            <img src="/images/images/ytube.png" width="32" height="32">
        </a>
    </div>
</footer>

<div class="section">
    <p style="text-align: center; font-size: 12px; margin-bottom: 1rem">
        <?= $langList[LANGUAGE_ID]['copyright']; ?>
    </p>

    <div class="our-partners" style="text-align: center">
        <a target="_blank" href="https://osjd.org/"><img src="/images/images/osjd.png"></a>
        <a target="_blank" href="https://rostourunion.ru/"><img src="/images/images/rst.jpg"></a>
        <a target="_blank" href="http://atarussia.ru/"><img src="/images/images/ata.png"></a>
        <a target="_blank" href="https://www.businesstravelrussia.ru/"><img src="/images/images/abt.png"></a>
        <a target="_blank" href="https://www.tourpom.ru/"><img src="/images/images/tourprom.png"></a>
        <a target="_blank" href="https://www.atorus.ru/"><img src="/images/images/atorus.png"></a>
        <a target="_blank" href="https://www.aavt.ru"><img src="/images/images/logo_aavt.png"></a>
        <a target="_blank" href="https://www.iata.org"><img src="/images/images/iata.png"></a>
        <a target="_blank" href="https://www.mostpp.ru/"><img src="/images/images/mtpp.png"></a>
        <a target="_blank" href="https://www.tch.ru/ru-ru/Pages/Home.aspx?">
            <img src="/images/images/logo_TCH.png">
        </a>
        <a target="_blank" href="https://sadunion.ru/">
            <img src="/images/images/sad.jpg">
        </a>
    </div>
</div>
</body>
</html>
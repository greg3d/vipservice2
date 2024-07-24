<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__); ?>

<?php $arCurDir = explode("/", $APPLICATION->GetCurDir()); ?>

<div id="helpdeskcontainer">
    <?= $helpdeskContainer ?>
</div>

<div id="footer">
    <a target="_blank" href="https://t.me/Holding_Vipservice">
        <img src="https://vipservice.ru/sign/tg/tg.png" width="32" height="32">
    </a>&nbsp;&nbsp;&nbsp;

    <a target="_blank" href="https://www.youtube.com/channel/UCiTmznB5muHnaBCYhc7k1rQ">
        <img src="/images/images/ytube.png">
    </a>&nbsp;&nbsp;&nbsp;

    <div style="text-align: center">
        <a target="_blank" href="https://osjd.org/"><img src="/images/images/osjd.png" height="28"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://rostourunion.ru/"><img src="/images/images/rst.jpg" width="28"
                                                                height="28"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="http://atarussia.ru/"><img src="/images/images/ata.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.businesstravelrussia.ru/"><img src="/images/images/abt.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.tourpom.ru/"><img src="/images/images/tourprom.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.atorus.ru/"><img src="/images/images/atorus.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.aavt.ru"><img src="/images/images/logo_aavt.png" height="28"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.iata.org"><img src="/images/images/iata.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.mostpp.ru/"><img src="/images/images/mtpp.png"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://www.tch.ru/ru-ru/Pages/Home.aspx?"><img
                src="/images/images/logo_TCH.png" height="36"></a>&nbsp;&nbsp;&nbsp;
        <a target="_blank" href="https://sadunion.ru/"><img src="/images/images/sad.jpg"
                                                            height="28"></a>&nbsp;&nbsp;&nbsp;
    </div>
</div>

<?= $langList[LANGUAGE_ID]['copyright']; ?>

</body>
</html>
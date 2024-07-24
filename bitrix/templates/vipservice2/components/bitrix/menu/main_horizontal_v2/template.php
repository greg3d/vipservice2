<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult)) die();

$previousLevel = 0;
$closeDiv = '</div>'.PHP_EOL;

foreach ($arResult as $arItem) {
    $permission = $arItem["PERMISSION"] > "D";
    $topLevel = $arItem["DEPTH_LEVEL"] === 1;
    $level = $arItem["DEPTH_LEVEL"];
    $isParent = $arItem["IS_PARENT"];

    $selectedStyle = $arItem["SELECTED"] ? ' is-active' : '';
    $isParentStyle = $isParent ? ' is-parent' : '';

    $styles = $selectedStyle . $isParentStyle;

    $navBarItem = '<div class="navbar-item'. $styles .'" data-level="'. $level .'">';
    $a = '<a href="'.$arItem["LINK"].'">'.$arItem["TEXT"].'</a>';

    if ($previousLevel > $arItem["DEPTH_LEVEL"]) {
        echo str_repeat("\t", $level - 1 );
        echo $closeDiv.$closeDiv;
    }

    echo str_repeat("\t", $level - 1 );
    echo $navBarItem . PHP_EOL;

    echo str_repeat("\t", $level);
    echo $a . PHP_EOL;

    echo str_repeat("\t", $level - 1);
    if (!$isParent) {
        echo $closeDiv;
    } else {
        echo '<div class="submenu">' . PHP_EOL;
    };

    $previousLevel = $arItem["DEPTH_LEVEL"];
}
if ($previousLevel > 1) {
    echo str_repeat($closeDiv.$closeDiv, ($previousLevel - 1));
}
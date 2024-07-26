<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (empty($arResult)) die();

$previousLevel = 0;
$closeDiv = '</div>' . PHP_EOL;

foreach ($arResult as $arItem) {
    $permission = $arItem["PERMISSION"] > "D";
    $topLevel = $arItem["DEPTH_LEVEL"] === 1;
    $level = $arItem["DEPTH_LEVEL"];
    $isParent = $arItem["IS_PARENT"];

    $selectedStyle = $arItem["SELECTED"] ? ' is-active' : '';
    $isParentStyle = $isParent ? ' is-parent' : '';

    $styles = $selectedStyle . $isParentStyle;

    if ($arItem["ITEM_INDEX"] < 4) {
        if ($previousLevel > $arItem["DEPTH_LEVEL"]) {
            echo '</ul></div>';
        }

        if ($level === 1) {
            $a = '<a href="' . $arItem["LINK"] . '">' . $arItem["TEXT"] . '</a>';
            echo '<div class="col"><h4>' . $a . '</h4>';
            if ($isParent) {
                echo '<ul>';
            } else {
                echo '</div>';
            }

            echo "<!--";

            echo print_r($arItem, 1);
            echo "-->";
        }

        if ($level === 2) {
            $a = '<a href="' . $arItem["LINK"] . '">' . $arItem["TEXT"] . '</a>';
            echo '<li>' . $a . '</li>';
        }
    }

    $previousLevel = $arItem["DEPTH_LEVEL"];
}
if ($previousLevel > 1) {
    echo '</ul></div>';
}
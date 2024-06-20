<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

echo "Ваше местоположение: " . $arResult['LOCATION'];

$APPLICATION->IncludeComponent(
    "custom:locationDetector",
    "",
    array(),
    false
);

<?php
use Bitrix\Main\Loader;
use Bitrix\Sale\Location\LocationTable;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class LocationDetectorComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if ($this->startResultCache()) {
            $currentLocationId = $_SESSION['CURRENT_LOCATION_ID'];
            $location = LocationTable::getList(array(
                'select' => array('NAME'),
                'filter' => array('=ID' => $currentLocationId),
                'limit' => 1
            ))->fetch();
            $this->arResult['LOCATION'] = $location['NAME'];
            $this->includeComponentTemplate();
        }
    }
}

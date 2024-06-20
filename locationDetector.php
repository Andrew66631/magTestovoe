<?php
use Bitrix\Main\Loader;
use Bitrix\Sale\Location\LocationTable;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class LocationDetectorComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if ($this->startResultCache()) {
            Loader::includeModule('sale');
            $location = LocationTable::getList(array(
                'select' => array('ID', 'NAME_RU' => 'NAME.NAME'),
                'filter' => array('=NAME.LANGUAGE_ID' => 'ru'),
                'order' => array('SORT' => 'ASC'),
                'limit' => 1
            ))->fetch();

            $this->arResult['LOCATION'] = $location['NAME_RU'];
            $this->includeComponentTemplate();
        }
    }
}

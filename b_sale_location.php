<?php
namespace Bitrix\Sale\Location;

use Bitrix\Main;
use Bitrix\Main\Entity;

class LocationTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'b_sale_location';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true
            )),
            new Entity\StringField('CODE'),
            new Entity\StringField('NAME'),
        );
    }
}

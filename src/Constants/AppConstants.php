<?php

namespace Sjw19206\CommonUtils\Constants;

class AppConstants
{
    const APP_NAME = 'CommonUtils';
    const APP_VERSION = '1.0.0';
    const APP_AUTHOR = 'Sjw19206';
    const APP_DESCRIPTION = 'Common utilities for PHP projects';
    const APP_LICENSE = 'MIT';
    const APP_LICENSE_URL = 'https://opensource.org/licenses/MIT';
    const APP_REPOSITORY = '';
    const APP_REPOSITORY_URL = '';

    private static $constants = array();

    public static function getConstants()
    {
        return self::$constants;
    }

    public static function setConstant(string $propName, string | int | bool | array | float $propValue)
    {
        self::$constants[$propName] = $propValue;
    }

}    

?>
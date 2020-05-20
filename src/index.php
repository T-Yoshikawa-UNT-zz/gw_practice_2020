<?php
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
require dirname(__DIR__)  . DS . 'vendor' . DS . 'autoload.php';

use App\Config\JmaConnectConfig;
use App\Data\PrecipitationData;
use App\Display\DisplayMinimum;
use App\Display\DisplayMiyazaki;

$data = new PrecipitationData();
$data->addObserver(new DisplayMiyazaki());

$data->getLatestAllData(JmaConnectConfig::PRECIPITATION_1_HOUR_LATEST);



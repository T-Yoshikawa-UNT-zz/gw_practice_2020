<?php
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}
echo dirname(__DIR__)  . DS . 'vendor' . DS . 'autoload.php';
require dirname(__DIR__)  . DS . 'vendor' . DS . 'autoload.php';

use App\Config\JmaConnectConfig;
use App\Data\PrecipitationData;
use App\Display\DisplayMinimum;

$data = new PrecipitationData();
$data->addObserver(new DisplayMinimum());

$data->getLatestAllData(JmaConnectConfig::PRECIPITATION_1_HOUR_LATEST);



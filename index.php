<?php
require 'vendor/autoload.php';
require 'config.php';
use AfricasTalking\SDK\AfricasTalking;

$config=config_values();


$AT = new AfricasTalking($config['username'], $config['app_key']);
// Get one of the services
$sms      = $AT->sms();

//Use the service
$responce   = $sms->send([
    'to'      => '+254123456789',
    'message' => 'Hello World!'
]);

print_r($responce);

<?php
require_once __DIR__.'/../autoload.php';
use Asynclib\Consumer\Consumer;

$worker = new Consumer();
$worker->setExchange('demo_basic');
$worker->setQueue('demo_basic_queue', ['abc']);
$worker->run(function($key, $msg){
    echo " [$key] $msg \n";
});
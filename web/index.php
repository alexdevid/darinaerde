<?php
require_once __DIR__ . '/../vendor/autoload.php';
$app = new Portfolio(require_once __DIR__ . '/../config/config.php');
$app->run();
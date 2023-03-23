<?php

require 'vendor/autoload.php';

$app = new \Core\Bootstrap();

require __DIR__ . '/app/route.php';

try {
    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}
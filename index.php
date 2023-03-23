<?php

use Core\Bootstrap;

require 'vendor/autoload.php';

$app = new Bootstrap();

require __DIR__ . '/app/route.php';

$app->run();
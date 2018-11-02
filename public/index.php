<?php

// PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);
// BASE_PATH
define('BASE_PATH', dirname(PUBLIC_PATH));
// VIEW_BASE_PATH
define('VIEW_BASE_PATH', BASE_PATH.'/app/views/');

// Autoload
require BASE_PATH.'/vendor/autoload.php';
echo 1;
$app = require_once BASE_PATH.'/bootstrap/app.php';
echo 2;
$kernel = $app->make(TinyLara\Contracts\Kernel::class);

$response = $kernel->handle(
  $app->build(TinyLara\Http\Request::class)
);
echo 3;
$response->send();
echo 4;
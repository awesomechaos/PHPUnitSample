<?php
/*
 * This file bootstraps the test environment.
 */
if (!is_file(dirname(__DIR__) . '/../../vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run test suite.');
}

$loader = require dirname(__DIR__) . '/../../vendor/autoload.php';
$loader->add('Sample\\Test\\', __DIR__);

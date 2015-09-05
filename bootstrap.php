<?php

if (is_file(__DIR__ . '/vendor/autoload.php'))
{
    require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! defined('TOURZE_FLOW_DIR'))
{
    define('TOURZE_FLOW_DIR', __DIR__ . DIRECTORY_SEPARATOR);
}

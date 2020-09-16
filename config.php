<?php

//session_start();

define('SITE_URL', 'http://localhost/_routing/');

define('SITE_PATH', __DIR__ . DIRECTORY_SEPARATOR);

define('APP_TITLE', 'site title');

foreach(glob('_func/*.php') as $lib_file) {
    include_once($lib_file);
}
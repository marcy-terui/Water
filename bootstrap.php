<?php
require 'vendor/autoload.php';
// Set TimeZone
date_default_timezone_set('asia/tokyo');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// dir define
define("APP_ROOT", __DIR__);
define("CONFIG_DIR", APP_ROOT . "/config");
define("VENDOR_DIR", APP_ROOT . "/vendor");
define("VIEW_DIR", APP_ROOT . "/views");
define("AUTH_DIR", APP_ROOT . "/auth");
define("WEB_ROOT", APP_ROOT . "/webroot");

// required
require_once (CONFIG_DIR . "/env.php");
require_once (VENDOR_DIR. "/SimpleDBI/SimpleDBI.php");
require_once (CONFIG_DIR . "/db.php");
require_once (CONFIG_DIR . "/validate.php");
require_once (CONFIG_DIR . "/helper.php");
require_once (VENDOR_DIR . '/autoload.php');



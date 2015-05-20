<?php
require "vendor/autoload.php";
require "config.php";

$request = new \CpanelPhp\Cpanel\Request(WHMURL, WHMPORT);
$response = $request->build('listpkgs');
var_dump($response);
die();
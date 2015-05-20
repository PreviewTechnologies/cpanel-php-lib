<?php
require "vendor/autoload.php";
require "config.php";

$request = new \CpanelPhp\Cpanel\Request(WHMURL, WHMPORT);
$response = $request->build('listpkgs')->data;
print_r($response);
die();
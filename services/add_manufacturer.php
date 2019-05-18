<?php

require '../vendor/autoload.php';

$manufacturer = new Manufacturer();

echo $manufacturer->insert(["name"=>$_REQUEST["name"]]);


<?php

require '../vendor/autoload.php';

$manufacturer = new Manufacturer();

echo json_encode($manufacturer->selectAll());
<?php

header('Access-Control-Allow-Origin: *');  

require '../vendor/autoload.php';

$inventory = new Inventory();
if(isset($_REQUEST['id']) && $_REQUEST['id'] != '') {
    echo json_encode($inventory->select($_REQUEST['id'])[0]);
} else {
   
    echo json_encode($inventory->selectAll());
}
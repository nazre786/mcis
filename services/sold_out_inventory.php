<?php

require '../vendor/autoload.php';

$model = new Model();

echo $model->soldOut($_REQUEST['id']);
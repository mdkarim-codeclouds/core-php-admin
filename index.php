<?php
include_once('constant.php');
include_once('db.php');
include_once('utils.php');

if(!empty($_GET['migrate'])){
    include_once('migration.php');
    exit;
}

include_once('action.php');
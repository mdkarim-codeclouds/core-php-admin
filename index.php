<?php
include_once('constant.php');
include_once('db.php');
include_once('utils.php');

if(!empty($_GET['migrate'])){
    include_once('migration.php');
    exit;
}

if(!empty($_POST['form_handler'])){
    include_once('form_handler.php');
    exit;
}

include_once('action.php');
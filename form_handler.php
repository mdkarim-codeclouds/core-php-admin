<?php
$form_handler_1 = !empty($_POST['form_handler']) ? strtolower($_POST['form_handler']) : '';
switch ($form_handler_1){
    case 'login':
        include_once('form_handlers/login.php');
        break;
    default:
        auth_checking();
        include_once('action/404/view.php');
        break;
}
<?php
$action_1 = !empty(CURRENT_URI_ARR) ? strtolower(CURRENT_URI_ARR[0]) : '';
switch ($action_1){
    case '':
        auth_checking();
        include_once('action/home/view.php');
        break;
    case 'admin-profile':
        auth_checking();
        include_once('action/admin_profile/view.php');
        break;
    case 'login':
        already_loggedin_redirect();
        include_once('action/login/view.php');
        break;
    case 'logout':
        user_logged_out();
        break;
    default:
        auth_checking();
        include_once('action/404/view.php');
        break;
}
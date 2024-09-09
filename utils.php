<?php

function has_login_session(){
    return !empty($_SESSION['user_login_info']);
}

function redirect($url) {
    header('Location: '.$url);
    exit();
}

function auth_checking(){
    if(!has_login_session()){
        redirect(APP_URL.'/login');
    }
}

function already_loggedin_redirect(){
    if(has_login_session()){
        redirect(APP_URL.'/');
    }
}
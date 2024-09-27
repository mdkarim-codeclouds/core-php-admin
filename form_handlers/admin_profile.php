<?php

function edit_admin_profile(){
    $_SESSION['old'] = $_POST;
    if(empty($_POST['name'])){
        $_SESSION['errors']['name'] = 'Please enter the name';
    }
    if(isset($_SESSION['errors'])){
        redirect(APP_URL.'/admin-profile');
    }
    
    $name = db_escape_string($_POST['name']);
    $res = run_query("UPDATE `".DB_TABLE_PREFIX."users` SET `name`='".$name."' WHERE `id` = ".$_SESSION['user_login_info']['id']);
    if($res['status'] == 'success'){
        unset($_SESSION['old']);
        $sql_data = run_select_first("SELECT id,name,email,role_id FROM ".DB_TABLE_PREFIX."users WHERE `id` = ".$_SESSION['user_login_info']['id']." AND deleted_at IS NULL LIMIT 1");
        if($sql_data['status'] == 'success'){
            $_SESSION['user_login_info'] = $sql_data['data'];
        }
    }else{
        $_SESSION['errors']['not_found'] = 'User not found. Please check the email & password';
    }
    redirect(APP_URL.'/admin-profile');
}
<?php 

$get_profile_data = run_select("SELECT id,name,email,role_id FROM ".DB_TABLE_PREFIX."users WHERE id=".$_SESSION['user_login_info']['id']." AND deleted_at IS NULL");
$get_profile_data = !empty($get_profile_data['data'][0]) ? $get_profile_data['data'][0] : $get_profile_data['data'];
$main_layout = ROOT_DIR.'/layouts/admin_profile/index.php';
$page_title = 'Profile';
include_once(ROOT_DIR.'/layouts/app.php');
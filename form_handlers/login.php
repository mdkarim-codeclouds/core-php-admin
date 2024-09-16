<?php

$_SESSION['old'] = $_POST;
if(!isValidEmail($_POST['email'])){
    $_SESSION['errors']['email'] = 'Please enter your email';
}
if(empty($_POST['password'])){
    $_SESSION['errors']['password'] = 'Please enter the password';
}
if(isset($_SESSION['errors'])){
    redirect(APP_URL.'/login');
}

$email = db_escape_string($_POST['email']);
$password = db_escape_string($_POST['password']);

$sql = "SELECT id,name,email,role_id FROM ".DB_TABLE_PREFIX."users WHERE email = '$email' AND password = '".md5($password)."' AND deleted_at IS NULL";

$conn = connect_mysql();
$result = mysqli_query($conn, $sql);

$id_count = 0;
if (($id_count = mysqli_num_rows($result)) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['user_login_info'] = $row;
    }
    mysqli_free_result($result);
}

disconnect_mysql($conn);

if($id_count > 0){
    unset($_SESSION['old']);
    redirect(APP_URL.'/');
}else{
    $_SESSION['errors']['not_found'] = 'User not found. Please check the email & password';
    redirect(APP_URL.'/login');
}
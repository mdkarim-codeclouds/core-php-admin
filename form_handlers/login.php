<?php

if(isValidEmail($_POST['email'])){
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

$count_sql = "SELECT COUNT(id) as id_count FROM ".DB_TABLE_PREFIX."users WHERE email = '$email' AND password = '".md5($password)."' AND deleted_at IS NULL";
$result = run_query($count_sql);

// Associative array
$row = mysqli_fetch_assoc($result);

// Free result set
mysqli_free_result($result);

if($row['id_count'] > 0){
    redirect(APP_URL.'/');
}else{
    $_SESSION['errors']['not_found'] = 'User not found. Please check the email & password';
    redirect(APP_URL.'/login');
}
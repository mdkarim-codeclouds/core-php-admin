<?php

class DotEnvironment {
    private $path;
    private $tmp_env;
    function __construct($env_path = ""){
        // Check if .env file path has provided
        if(empty($env_path)){
            throw new ErrorException(".env file path is missing");
        }
        $this->path = $env_path;
 
        //Check .envenvironment file exists
        if(!is_file(realpath($this->path))){
            throw new ErrorException("Environment File is Missing.");
        }
        //Check .envenvironment file is readable
        if(!is_readable(realpath($this->path))){
            throw new ErrorException("Permission Denied for reading the ".(realpath($this->path)).".");
        }
        $this->tmp_env = [];
        $fopen = fopen(realpath($this->path), 'r');
        if($fopen){
            while (($line = fgets($fopen)) !== false){
                // Check if line is a comment
                $line_is_comment = (substr(trim($line),0 , 1) == '#') ? true: false;
                if($line_is_comment || empty(trim($line)))
                    continue;
 
                $line_no_comment = explode("#", $line, 2)[0];
                $env_ex = preg_split('/(\s?)\=(\s?)/', $line_no_comment);
                $env_name = trim($env_ex[0]);
                $env_value = isset($env_ex[1]) ? trim($env_ex[1]) : "";
                $this->tmp_env[$env_name] = $env_value;
            }
            fclose($fopen);
        }
        $this->load();
    }
 
    function load(){
        // Save .env data to Environment Variables
        foreach($this->tmp_env as $name=>$value){
            putenv("{$name}=$value");
            if(is_numeric($value))
            $value = floatval($value);
            if(in_array(strtolower($value),["true","false"]))
            $value = (strtolower($value) == "true") ? true : false;
            $_ENV[$name] = $value;
        }
        // print_r(realpath($this->path));
    }
}
if(file_exists(realpath(__DIR__."/.env"))){
    define('ENV_FILE_ROOT', realpath(__DIR__."/.env"));
    new DotEnvironment(ENV_FILE_ROOT);
}

function d($data){
    if(is_null($data)){
        $str = "<i>NULL</i>";
    }elseif($data == ""){
        $str = "<i>Empty</i>";
    }elseif(is_array($data)){
        if(count($data) == 0){
            $str = "<i>Empty array.</i>";
        }else{
            $str = "<table style=\"border-bottom:0px solid #000;\" cellpadding=\"0\" cellspacing=\"0\">";
            foreach ($data as $key => $value) {
                $str .= "<tr><td style=\"background-color:#008B8B; color:#FFF;border:1px solid #000;\">" . $key . "</td><td style=\"border:1px solid #000;\">" . d($value) . "</td></tr>";
            }
            $str .= "</table>";
        }
    }elseif(is_resource($data)){
        while($arr = mysql_fetch_array($data)){
            $data_array[] = $arr;
        }
        $str = d($data_array);
    }elseif(is_object($data)){
        $str = d(get_object_vars($data));
    }elseif(is_bool($data)){
        $str = "<i>" . ($data ? "True" : "False") . "</i>";
    }else{
        $str = $data;
        $str = preg_replace("/\n/", "<br>\n", $str);
    }
    return $str;
}

function dnl($data){
    echo d($data) . "<br>\n";
}

function dd($data){
    echo dnl($data);
    exit;
}

function ddt($message = ""){
    echo "[" . date("Y/m/d H:i:s") . "]" . $message . "<br>\n";
}

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

function user_logged_out(){
    if(has_login_session()){
        unset($_SESSION['user_login_info']);
    }
    redirect(APP_URL.'/');
}

function isValidEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
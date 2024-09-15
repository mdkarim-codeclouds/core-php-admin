<?php 

function connect_mysql(){
    $db_con = mysqli_connect(DB_HOST.':'.DB_PORT, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if( !$db_con ){
        return null;
    }
    return $db_con;
}
function disconnect_mysql($db_con){
    return mysqli_close($db_con); 
}

function db_escape_string($data){
    $conn = connect_mysql();
    if( empty($conn) ){
        $result['msg'] = 'DB not connected';
        return $result;
    }
    $data = mysqli_real_escape_string($conn, $data);
    disconnect_mysql($conn);
    return $data;
}

function run_query($query){
    $result = [
        'status' => 'failure',
        'msg' => '',
    ];
    $conn = connect_mysql();
    if( empty($conn) ){
        $result['msg'] = 'DB not connected';
        return $result;
    }
    if ($result = mysqli_query($conn, $query)) {
        $result = [
            'status' => 'success',
            'msg' => 'Query run successfully',
        ];
    } else {
        $result = [
            'status' => 'failure',
            'msg' => mysqli_error($conn),
        ];
    }
    disconnect_mysql($conn);
    return $result;
}
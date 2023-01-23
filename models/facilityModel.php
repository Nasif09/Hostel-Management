<?php
require_once 'db.php';


function insertFacility($user){
    $con = getConnection();
    $sql = "insert into facility values('', '{$user['name']}', '{$user['price']}', '{$user['receive']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}


function allFacilities(){
    $con = getConnection();
    $sql = "select * from facility";
    $status = mysqli_query($con, $sql);
    return $status;
    
}

function updateFacility($fid, $name, $price){
    $con = getConnection();
    $sql = "update facility set id='{$fid}', name='{$name}', price= '{$price}' where id={$fid}";
    $status = mysqli_query($con, $sql);
    return $status;     
}
function searchFacilities($user){
    $con = getConnection();
    $sql = "select * from facility where upper(name) like upper('%{$user['searchbyid']}%')";
    session_start();
    $_SESSION['sql']=$sql;
    $status = mysqli_query($con, $sql);
    return $status;
}
function searchFacility($fid){
    $con = getConnection();
    $sql = "select * from facility where id='$fid'";
    $status = mysqli_query($con, $sql);
    return $status;
}

function deleteFacility($user){
        $con = getConnection();
        $sql = "delete from facility where id='{$user['fid']}'";
        $status = mysqli_query($con, $sql);
        return $status;   
    }

?>
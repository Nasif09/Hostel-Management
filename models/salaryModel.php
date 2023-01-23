<?php
require_once 'db.php';


function addsalary($user){
    $con = getConnection();
    $sql = "insert into account values('{$user['id']}', '{$user['name']}', '{$user['absent']}', '{$user['late']}', '{$user['allowance']}', '{$user['deduction']}', '{$user['net']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}


?>
<?php

    $name = $_POST['name'];
    $id = $_POST['id'];
    $late = $_POST['late'];
    $absent = $_POST['absent'];
    $allowance = $_POST['allowance'];
    $deduction = $_POST['deduction'];
    $net = $_POST['net'];

    if($id == "" || $name == "" || $absent == "" || $late == ""  || $allowance == ""  || $deduction == ""   || $net == "" )
    {
        header('location: ../../views/employeedashboards/payroll.php?err=null');
    }
    else
    {
        // $user = ['id'=>$id, 'name'=>$name, 'absent'=>$absent, 'late'=>$late, 'allowance'=>$allowance, 'deduction'=>$deduction, 'net'=>$net];
        // $status = addsalary($user);

        $uid = $_COOKIE['uid'];
        $con = getConnection();
        //$sql = "insert into account values('{$user['id']}', '{$user['name']}', '{$user['absent']}', '{$user['late']}', '{$user['allowance']}', '{$user['deduction']}', '{$user['net']}')";
        $sql = "insert into account values('$uid','$id','$absent','$late','$allowance','$deduction','$net')";
        $status = mysqli_query($con, $sql);
        if($status)
        {
            header('location: showSallary.php');
        }
    }
        
?>
<?php

    session_start();
    require_once '../../models/employeeModel.php';

    if(isset($_POST['searchbyid']))
    {
        $searchbyid = $_POST['searchbyid'];
    }
    $user = ['searchbyid'=>$searchbyid];
    $result = searchEmp($user);
    $status=['nothing'=>'nothing'];

    while($row = mysqli_fetch_assoc($result))
    {
        $user=['id'=>$row['id'],'name'=>$row['name'],'fname'=>$row['fname'],'mname'=>$row['mname'],'dob'=>$row['dob'],'designation'=>$row['designation'],'salary'=>$row['salary'],'branch'=>$row['branch'],'email'=>$row['email'],'phone'=>$row['phone'],'username'=>$row['username'],'password'=>$row['password'],'gender'=>$row['gender']];
    }
    
    
    if($status)
    {
        $_SESSION['status'] = $status;
        header('location: ../../views/managerdashboards/foundemp.php');
    }else{
        echo "Error";
    }

?>
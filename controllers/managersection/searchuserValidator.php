<?php

    session_start();
    require_once('../../models/userModel.php');

    if(isset($_POST['searchbyid']))
    {
        $searchbyid = $_POST['searchbyid'];
    }
    $user = ['searchbyid'=>$searchbyid];
    $result = searchUser($user);
    $status=['nothing'=>'nothing'];

    while($row = mysqli_fetch_assoc($result))
    {
        $status=['id'=>$row['id'],'name'=>$row['name'], 'fathername'=>$row['fathername'], 'mothername'=>$row['mothername'], 'gender'=>$row['gender'], 'dob'=>$row['dob']];
    }
    
    
    if($status)
    {
        $_SESSION['status'] = $status;
        header('location: ../../views/managerdashboards/founduser.php');
    }else{
        echo "Error";
    }

?>
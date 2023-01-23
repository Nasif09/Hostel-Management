<?php

    session_start();
    require_once('../../models/roomModel.php');

    if(isset($_POST['searchbyid']))
    {
        $searchbyid = $_POST['searchbyid'];
    }
    $user = ['searchbyid'=>$searchbyid];
    $result = searchRoom($user);
    $status=['nothing'=>'nothing'];

    while($row = mysqli_fetch_assoc($result))
    {
        $status=['roomno'=>$row['roomno'],'roomtype'=>$row['roomtype'], 'branchname'=>$row['branchname']];
    }
    
    
    if($status)
    {
        $_SESSION['status'] = $status;
        header('location: ../../views/managerdashboards/foundroom.php');
    }else{
        echo "Error";
    }

?>
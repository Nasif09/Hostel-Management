<?php

    session_start();
    require_once('../../models/facilityModel.php');

    if(isset($_POST['searchbyid']))
    {
        $searchbyid = $_POST['searchbyid'];
    }
    $user = ['searchbyid'=>$searchbyid];
    $result = searchfacilities($user);
    $status=['nothing'=>'nothing'];

    while($row = mysqli_fetch_assoc($result))
    {
        $status=['id'=>$row['id'],'name'=>$row['name'],  'price'=>$row['price'], 'availability'=>$row['availability']];
    }
    
    
    if($status)
    {
        $_SESSION['status'] = $status;
        header('location: ../../views/managerdashboards/foundfacility.php');
    }else{
        echo "Error";
    }

?>
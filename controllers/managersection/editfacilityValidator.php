<?php

    // session_start();
    require_once('../../models/facilityModel.php');
    
    $fid = $_POST['fid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    // $availability = $_POST['availability'];

    // $user = ['un'=>$un, 'pass'=>$pass, 'fn'=>$fn, 'mn'=>$mn, 'occ'=>$occ, 'dob'=>$dob,'paddress'=>$paddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    // $status = editUser($user);
    //$user = ['uid'=>$uid, 'username'=>$username, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    $status = updateFacility($fid, $name, $price);
   
    if($status){
        //echo '<script>alert("facility '.$name.' added successfully");</script>';
        ?>
        <script>
            if(!alert("facility <?php echo $name; ?> updated"))
            {
                window.location.href = '../../views/managerdashboards/facilities.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/editfacility.php';
            }
        </script>
        <?php
    }

?>

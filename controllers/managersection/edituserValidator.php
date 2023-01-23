<?php

    // session_start();
    require_once('../../models/userModel.php');
    
    $uid = $_POST['uid'];
    $username = $_POST['name'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // $user = ['un'=>$un, 'pass'=>$pass, 'fn'=>$fn, 'mn'=>$mn, 'occ'=>$occ, 'dob'=>$dob,'paddress'=>$paddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    // $status = editUser($user);
    //$user = ['uid'=>$uid, 'username'=>$username, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    $status = updateusers($uid, $username, $fathername, $mothername, $dob, $gender);
    
    if($status){
        //echo '<script>alert("facility '.$name.' added successfully");</script>';
        ?>
        <script>
            if(!alert("Username: <?php echo $name; ?> updated"))
            {
                window.location.href = '../../views/managerdashboards/allusers.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/edituser.php';
            }
        </script>
        <?php
    }

?>

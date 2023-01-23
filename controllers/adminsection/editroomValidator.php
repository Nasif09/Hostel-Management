<?php

    // session_start();
    require_once('../../models/roomModel.php');
    
    $rno = $_POST['rno'];
    $roomno = $_POST['roomno'];
    $roomtype = $_POST['roomtype'];
    $branchid = $_POST['branchid'];
    // $availability = $_POST['availability'];

    // $user = ['un'=>$un, 'pass'=>$pass, 'fn'=>$fn, 'mn'=>$mn, 'occ'=>$occ, 'dob'=>$dob,'paddress'=>$paddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    // $status = editUser($user);
    //$user = ['uid'=>$uid, 'username'=>$username, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    $status = updateRoom($rno, $roomno, $roomtype, $branchid);
    
    if($status){
        //echo '<script>alert("facility '.$name.' added successfully");</script>';
        ?>
        <script>
            if(!alert("Room: <?php echo $rno; ?> updated"))
            {
                window.location.href = '../../views/managerdashboards/roomdetails.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/editroom.php';
            }
        </script>
        <?php
    }

?>

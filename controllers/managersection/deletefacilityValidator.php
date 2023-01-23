<?php

    // session_start();
    require_once('../../models/facilityModel.php');

    $fid = $_GET['fid'];
    $user = ['fid'=>$fid];
    $status = deleteFacility($user);
    if($status){
        ?>
        <script>
            if(!alert("Facility <?php echo $fid; ?> Deleted"))
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
                window.location.href = '../../views/managerdashboards/facilities.php';
            }
        </script>
        <?php
    }

?>

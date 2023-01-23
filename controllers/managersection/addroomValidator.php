<?php

    // session_start();
    require_once('../../models/roomModel.php');

    $roomno = $_POST['roomno'];
    $roomtype = $_POST['roomtype'];
    $branchname = $_POST['branchname'];
    
    if($roomno == ""){
        header('location: ../../views/managersection/addroom.php?err=null');

    }else { 
        $user = ['roomno'=>$roomno, 'roomtype'=> $roomtype, 'branchname'=> $branchname];
        $status = insertRoom($user);
        if($status){
            //echo '<script>alert("facility '.$name.' added successfully");</script>';
            ?>
            <script>
                if(!alert("Room <?php echo $roomno; ?> added successfully"))
                {
                    window.location.href = '../../views/managerdashboards/addroom.php';
                }
            </script>
            <?php
        }else{
            ?>
            <script>
                if(!alert("Error"))
                {
                    window.location.href = '../../views/managerdashboards/addroom.php';
                }
            </script>
            <?php
        }
        
    }

?>
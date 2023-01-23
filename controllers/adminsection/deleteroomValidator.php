<?php

    // session_start();
    require_once('../../models/roomModel.php');

    $rno = $_GET['rno'];
    $user = ['rno'=>$rno];
    $status = deleteRoom($user);

    if($status){
        ?>
        <script>
            if(!alert("Room <?php echo $rno; ?> Deleted"))
            {
                window.location.href = '../../views/managerdashboards/allrooms.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/allrooms.php';
            }
        </script>
        <?php
    }

?>

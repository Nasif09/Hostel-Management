<?php

    // session_start();
    require_once('../../models/userModel.php');

    $_SERVER['REQUEST_METHOD'] == 'GET';
    $uid=$_GET['uid'];


    $user = ['uid'=>$uid];
    $status = deleteUser($user);
   
    if($status){
        ?>
        <script>
            if(!alert("User: <?php echo $uid; ?> Deleted"))
            {
                window.location.href = '../../views/admindashboards/allusers.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/admindashboards/allusers.php';
            }
        </script>
        <?php
    }

?>


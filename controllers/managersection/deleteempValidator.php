<?php

    require_once '../../models/employeeModel.php';

    $rno = $_GET['rno'];
    $user = ['rno'=>$rno];
    $status = deleteEmp($user);

    if($status){
        ?>
        <script>
            if(!alert("Employee: <?php echo $rno; ?> Deleted"))
            {
                window.location.href = '../../views/managerdashboards/employeedetails.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/employeedetails.php';
            }
        </script>
        <?php
    }

?>

<?php

require_once '../../models/employeeModel.php';
    
    $id = $_POST['id'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $branch = $_POST['branch'];
    // $availability = $_POST['availability'];

    // $user = ['un'=>$un, 'pass'=>$pass, 'fn'=>$fn, 'mn'=>$mn, 'occ'=>$occ, 'dob'=>$dob,'paddress'=>$paddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    // $status = editUser($user);
    //$user = ['uid'=>$uid, 'username'=>$username, 'fathername'=>$fathername, 'mothername'=>$mothername, 'occupation'=>$occupation, 'dob'=>$dob,'parmanentaddress'=>$parmanentaddress, 'room'=>$room, 'furniture'=>$furniture, 'branch'=>$branch];
    $status = updateEmp($id, $name,$fathername,$mothername, $dobe,$gender,$salary, $branch);
    
    if($status){
        //echo '<script>alert("facility '.$name.' added successfully");</script>';
        ?>
        <script>
            if(!alert("Room: <?php echo $id; ?> updated"))
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
                window.location.href = '../../views/managerdashboards/editemp.php';
            }
        </script>
        <?php
    }

?>

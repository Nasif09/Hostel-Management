<?php

    // session_start();
    require_once('../../models/userModel.php');

    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    if($name == "" || $fathername == "" || $mothername == ""  || $dob == ""  || $gender == "" ){
        header('location: ../../views/managerdashboards/adduser.php?err=null');
    }else { 
        $user = ['name'=>$name, 'fathername'=>$fathername, 'mothername'=>$mothername, 'gender'=>$gender, 'dob'=>$dob];
        $status = adduser($user);
        
        if($status){
            ?>
            <script>
                if(!alert("User <?php echo $name; ?> added successfully"))
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
                    window.location.href = '../../views/managerdashboards/allusers.php';
                }
            </script>
            <?php
        }
    }

?>
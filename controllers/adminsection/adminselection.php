<?php
session_start();
    $chc = $_GET['name'];
    if($chc=="addemployee"){
        echo 'addemployee.php';
    }
    else if($chc=="employeedetails"){
        echo 'employeedetails.php';
    }
    else if($chc=="adduser"){
        echo 'adduser.php';
    }
    else if($chc=="userdetails"){
        echo 'userdetails.php';
    }
    else if($chc=="addnewfacility"){
        echo 'addnewfacility.php';
    }
    else if($chc=="facilitydetails"){
        echo 'employeedetails.php';
    }
    else if($chc=="addnewbranch"){
        echo 'addnewbranch.php';
    }
    else if($chc=="branchdetails"){
        echo 'branchdetails.php';
    }
    else if($chc=="addnewroom"){
        echo 'addnewroom.php';
    }
    else if($chc=="roomdetails"){
        echo 'roomdetails.php';
    }
    else if($chc=="totalrevenue"){
        echo 'totalrevenue.php';
    }
?>
<?php
session_start();
    $chc = $_GET['name'];
    if($chc=="updateprof"){
        echo 'updateprof.php';
    }
    else if($chc=="updateinfo"){
        echo 'updateinfo.php';
    }
    else if($chc=="monthlybill"){
        echo 'monthlybill.php';
    }
    else if($chc=="servicecost"){
        echo 'servicecost.php';
    }
    else if($chc=="addnewfacility"){
        echo 'addnewfacility.php';
    }
    else if($chc=="cancelservice"){
        echo 'cancelservice.php';
    }
    else if($chc=="termsandconditions"){
        echo 'termsandconditions.php';
    }
    else if($chc=="leaveapplication"){
        echo 'leaveapplication.php';
    }
?>
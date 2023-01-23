<?php
    require_once '../../models/roommodel.php';
    $roomno=$_REQUEST['roomno'];
    $row=checkexistance($roomno);
    if($row>0){
        $_SESSION['roomexits']='Room No. already exits';
        echo 'Room No. already exits';
    }
?>
<?php
    require_once '../../models/roommodel.php';
    $roomno = $_POST["roomno"];
    $branchid= $_POST["branch"];
    $roomtype= $_POST["branchtype"];
    $totaluser=0;
    if($roomtype=='economy') $capacity=4;
    if($roomtype=='businessclass') $capacity=2;
    if($roomtype=='firstclass') $capacity=1;
    
    $room=['roomno'=>$roomno,'branchid'=>$branchid,'roomtype'=>$roomtype,'totaluser'=>$totaluser, 'capacity'=>$capacity];
    $status=addroom($room);

    if(isset($_SESSION['insertroom'])){
        header('location: ../../views/admindashboards/addnewroom.php');
    }
    else{
        $_SESSION['insertroomerr']="Room couldnot added";
        header('location: ../../views/admindashboards/addnewroom.php');
    }
?>  
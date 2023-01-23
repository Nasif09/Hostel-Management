<?php
    require_once 'db.php';
        
    function checkexistance($roomno){
        $con = getconnection();
        $sql = "SELECT COUNT(roomno) FROM room WHERE `roomno`='$roomno'";
        $result = mysqli_query($con, $sql);
        $existance = mysqli_fetch_assoc($result);
        return $existance;
    }

    function addroom($room){
        $con = getconnection();
        $sql2 = "INSERT INTO `room`(`roomno`, `roomtype`, `branchid`, `totaluser`, `capacity`) VALUES ('{$room['roomno']}','{$room['roomtype']}','{$room['branchid']}','{$room['totaluser']}','{$room['capacity']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertroom']="Room Added Successfully";
        }
    }

    function countroom(){
        $con = getconnection();
        $sql2 = "SELECT * from room";
        $result2 = mysqli_query($con, $sql2);
        $result = mysqli_num_rows($result2);
        return $result;
    }

    //
    function searchRoom($user){
        $con = getConnection();
        $sql = "select * from room where upper(roomno) like upper('%{$user['searchbyid']}%')";
        session_start();
        $_SESSION['sql']=$sql;
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function searchRooms($rno){
        $con = getConnection();
        $sql = "select * from room where roomno='$rno'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    
    function updateRoom($rno, $roomno, $roomtype, $branchid){
        $con = getConnection();
        $sql = "update room set roomno='{$rno}', roomtype='{$roomtype}', branchid= '{$branchid}' where roomno='{$roomno}'";
        $status = mysqli_query($con, $sql);
        return $status;     
    }
    
    function allRooms(){
        $con = getConnection();
        $sql = "select * from room";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }
    function deleteRoom($user)
        {
            $con = getConnection();
            $sql = "delete from room where roomno='{$user['rno']}'";
            $status = mysqli_query($con, $sql);
            return $status;   
        }
?>
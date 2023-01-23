<?php
    require_once 'db.php';
        
    function searchforuserid(){
        $con = getconnection();
        $sql = "SELECT max(id) FROM user";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
        $user=$users['max(id)'];
        if($user != null){
            $lastint=(int)$user;
            $format=substr($user,0,(strlen($user)-1));
            $lastint=(int)substr($user,strrpos($user,'-')+1,(strlen($user)));
            $newid=$format.($lastint+1);
          return $newid;
        }
        else{
            return "U-2022-1";
        }
    }
    function adduser($user){
        $con = getconnection();
        $sql = "INSERT INTO `user`(`id`, `name`, `fathername`, `mothername`, `dob`, `gender`) VALUES ('{$user['id']}','{$user['name']}','{$user['fname']}','{$user['mname']}','{$user['dob']}','{$user['gender']}')";
        $result = mysqli_query($con, $sql);
        print_r($result);
        print_r($user);
        if($result){
            return $_SESSION['adduser']='Add user successfull';
        }
    }

    function countuser(){
        $con = getconnection();
        $sql2 = "SELECT * from user";
        $result2 = mysqli_query($con, $sql2);
        $result = mysqli_num_rows($result2);
        return $result;
    }

    //nasif
    function insertUser($user){
        $con = getConnection();
        $sql = "insert into user values('', '{$user['name']}', '{$user['fathername']}', '{$user['mothername']}', '{$user['dob']}', '{$user['gender']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    // function insertFacility($user){
    //     $con = getConnection();
    //     $sql = "insert into facility values('', '{$user['name']}', '{$user['price']}', '{$user['receive']}')";
    //     $status = mysqli_query($con, $sql);
    //     return $status;
    // }

//delete
    function deleteUser($user)
    {
        $con = getConnection();
        $sql = "delete from user where id='{$user['uid']}'";
        $status = mysqli_query($con, $sql);
        return $status;   
    }

//update
    function updateUser($user){
        $con = getConnection();
        $sql = "update user set username='{$user['username']}', fathername='{$user['fathername']}', mothername= '{$user['mothername']}', occupation='{$user['occupation']}', parmanentaddress='{$user['parmanentaddress']}', branch={$user['branch']}, room={$user['room']}, furniture={$user['furniture']}, dob='{$user['dob']}' where uid={$user['uid']}";
        $status = mysqli_query($con, $sql);
        return $status;     
    }
    // manager model
    function updateusers($uid, $name, $fname, $mname, $dob, $gender){
        $con = getConnection();
        $sql = "update user set name='{$name}', fathername='{$fname}', mothername= '{$mname}', gender='{$gender}', dob='{$dob}' where id={$uid}";
        $status = mysqli_query($con, $sql);
        return $status;     
    }
    // function updateUser($user){
    //     $con = getConnection();
    //     $sql = "update user set username='$username', fathername='$fathername', mothername= '$mothername', occupation='$occupation', parmanentaddress='$parmanentaddress', branch='$branch', room='$room', furniture='$furniture', dob='$dob' where uid='$uid'";
    //     $status = mysqli_query($con, $sql);
    //     return $status;     
    // }

//SEARCH
    function searchUser($user){
        $con = getConnection();
        $sql = "select * from user where upper(name) like upper('%{$user['searchbyid']}%')";
        session_start();
        $_SESSION['sql']=$sql;
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function searchAnUser($uid){
        $con = getConnection();
        $sql = "select * from user where id='$uid'";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function allUsers(){
        $con = getConnection();
        $sql = "select * from user";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }
    // function allRooms(){
    //     $con = getConnection();
    //     $sql = "select * from room";
    //     $status = mysqli_query($con, $sql);
    //     return $status;
        
    // }

    // function login($user){
    //     $con = getConnection();
    //     $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    //     $result = mysqli_query($con, $sql);
    //     $user = mysqli_fetch_assoc($result);
        
    //     if($user != null){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
?>
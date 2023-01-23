<?php
    require_once 'db.php';
        
    function searchforempid(){
        $con = getconnection();
        $sql = "SELECT max(id) FROM `employee`";
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
            return "E-2022-1";
        }
    }

    function addemployee($user){
        $con = getconnection();
        $sql2 = "INSERT INTO `employee`(`id`, `name`, `fathername`, `mothername`, `dob`, `gender`, `designation`, `salary`, `branch`) VALUES ('{$user['id']}','{$user['name']}','{$user['fname']}','{$user['mname']}','{$user['dob']}','{$user['gender']}','{$user['designation']}','{$user['salary']}','{$user['branch']}')";
        $result2 = mysqli_query($con, $sql2);
        
        if($result2){
            return $_SESSION['insertemployee']="Insert Employee Successfull";
        }
    }
    function addemployeeinlogin($user){
        $con = getconnection();
        $sql1 = "INSERT INTO `login`(`id`, `email`, `phonenumber`, `username`, `password`, `role`) VALUES ('{$user['id']}','{$user['email']}','{$user['phone']}','{$user['username']}','{$user['password']}','{$user['designation']}')";
        $result = mysqli_query($con, $sql1);
        
        if($result){
            return $_SESSION['insertemployeelogin']="Login can be done<br>User ID: ".$user['id']."<br>Password: ".$user['password'];
        }
    }

    function countemployee(){
        $con = getconnection();
        $sql2 = "SELECT * FROM employee";
        $result2 = mysqli_query($con, $sql2);
        $result = mysqli_num_rows($result2);
        return $result;
    }


    function editemployee($user){
        $con = getconnection();
        $sql = "UPDATE `login` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`phonenumber`='[value-4]',`username`='[value-5]',`password`='[value-6]',`role`='[value-7]' WHERE username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function deleteemployee($user){
        $con = getconnection();
        $sql = "DELETE FROM `login` WHERE  `id`={$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function searchemployee($user){
        $con = getconnection();
        $sql = "select * from login where username='{$user['username']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return $_SESSION['user']=$user;
        }
    }
    function showallemp(){
        $con = getconnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function showallempbyname($name){
        $con = getconnection();
        $sql = "SELECT * FROM employee WHERE `name` LIKE '".$name."' ORDER BY id ASC;";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function deleteEmp($user)
    {
        $con = getConnection();
        $sql = "delete from employee where id='{$user['rno']}'";
        $status = mysqli_query($con, $sql);
        return $status;   
    }
    function allEmp(){
        $con = getConnection();
        $sql = "select * from employee";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }
    // function searchEmp($user){
    //     $con = getConnection();
    //     $sql = "select * from employee where upper(name) like upper('%{$user['searchbyid']}%')";
    //     session_start();
    //     $_SESSION['sql']=$sql;
    //     $status = mysqli_query($con, $sql);
    //     return $status;
    // }
    function searchEmps($rno){
        $con = getConnection();
        $sql = "select * from employee where id='$rno'";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function updateEmp($id, $name,$fathername,$mothername, $dobe,$gender,$salary, $branch){
        $con = getConnection();
        $sql = "update employee set id='{$id}', name='{$name}', fathername= '{$fathername}',mothername= '{$fathername}',mothername= '{$fathername}', dob= '{$dob}', gender= '{$gender}', salary= '{$salary}', branch= '{$branch}' where id='{$id}'";
        $status = mysqli_query($con, $sql);
        return $status;     
    }
    function searchEmp($user){
        $con = getConnection();
        $sql = "select * from employee where upper(name) like upper('%{$user['searchbyid']}%')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>
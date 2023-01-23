<?php
    
    require_once '../models/loginmodel.php';
    $uid = $_POST["uid"];
    $password = $_POST["password"];
    
    if(empty($uid) || empty($password)){
        if(empty($uid)){
            $_SESSION["emtuid"] ="*Must fill up user id";
        }
        if(empty($password)){
            $_SESSION["emtpass"] ="*Must fill up password";
        }
        header("location: ../views/login.php");
    }
    else{
        $user=['uid'=>$uid, 'password'=>$password];
        $status=login($user);
        if(isset($_SESSION['user'])){
            $role=$_SESSION['user']['role'];
            setcookie('logstatus', 'true', time()+3600, '/');
            if($role=="admin"){
                header('location: ../views/admindashboards/admindashboard.php');
            }
            if($role=="manager"){
                header('location: ../views/managerdashboards/managerdashboard.php');
            }
            if($role=="Cook"){
                header('location: ../views/employeedashboards/cooker.php');
            }
            if($role=="Accountant"){
                header('location: ../views/employeedashboards/accountdashboard.php');
            }
            if($role=="Employee"){
                header('location: ../views/employeedashboard.php');
            }
            if($role=="User"){
                header('location: ../views/userdashboards/userdashboard.php');
            }
        }
        else{
            $_SESSION['logerr']="Invalid User or Password";
            header('location: ../views/login.php');
        }
    }
?>
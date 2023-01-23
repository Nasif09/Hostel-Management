<?php
session_start();
    // if(!isset($_POST['mngopt'])){
        // $_SESSION['mngopterr'] = "Select radio options properly";
       // header('location: ../../mangerdashboard.php');

        // $opt=$_POST['mngOpt'];

        $chc=$_GET['name'];
    
        // echo $opt.$chc;


   //others     
        if($chc=="contactbox"){
            echo 'contactbox.php';
            // header('location: ../../views/managerdashboards/contactbox.php');
        } 
        else if($chc=="complainbox"){
            echo 'complainbox.php';
            // header('location: ../../views/managerdashboards/complainbox.php');
        } 
        else if($chc=="leaveapplication"){
            echo 'leaveapplication.php';
            // header('location: ../../views/managerdashboards/leaveapplication.php');
        } 

  //accounts
  
        else if($chc=="payslip"){
            echo 'payslip.php';
            // header('location: ../../views/managerdashboards/payslip.php');
        } else if($chc=="payroll"){
            echo 'payroll.php';
            // header('location: ../../views/managerdashboards/payslip.php');
        } 
    //}
?>
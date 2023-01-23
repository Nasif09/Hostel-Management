<?php
session_start();
    // if(!isset($_POST['mngopt'])){
        // $_SESSION['mngopterr'] = "Select radio options properly";
       // header('location: ../../mangerdashboard.php');

        // $opt=$_POST['mngOpt'];

        $chc=$_GET['name'];
    
        // echo $opt.$chc;
//user
        if($chc=="adduser"){
            echo 'adduser.php';
            // header('location:../../views/managerdashboards/adduser.php');
        }
        else if($chc=="searchuser"){
            echo 'searchuser.php';
            // header('location:../../views/managerdashboards/searchuser.php');
        }
        else if($chc=="users"){
            echo 'allusers.php';
            // header('location:../../views/managerdashboards/allusers.php');
        }

//employee
        else if($chc=="addemployee"){
            echo 'addemployee.php';
            // header('location:../../views/managerdashboards/addemployee.php');
        }
        else if($chc=="searchemployee"){
            echo 'searchemployee.php';
            // header('location:../../views/managerdashboards/searchemployee.php');
        }
        else if($chc=="employeedetails"){
            echo 'employeedetails.php';
            // header('location:../../views/managerdashboards/employees.php');
        }

//room
        else if($chc=="addroom"){
            echo 'addroom.php';
            // header('location:../../views/managerdashboards/addroom.php');
        }
        else if($chc=="roomdetails"){
            echo 'roomdetails.php';
            // header('location:../../views/managerdashboards/roomdetails.php');
        }

//facility   
        else if($chc=="addfacility"){
            echo 'addfacility.php';
            // header('location:../../views/managerdashboards/addfacility.php');
        } 
        else if($chc=="facilities"){
            echo 'facilities.php';
            // header('location:../../views/managerdashboards/facilities.php');
        }
        else if($chc=="updatefacility"){
            echo 'facilities.php';
            // header('location:../../views/managerdashboards/facilities.php');
        }

 //facility   
        else if($chc=="addfacility"){
            echo 'addfacility.php';
            // header('location:../../views/managerdashboards/addfacility.php');
        } 
        else if($chc=="facilities"){
            echo 'facilities.php';
            // header('location:../../views/managerdashboards/facilities.php');
        }
        else if($chc=="updatefacility"){
            echo 'updatefacility.php';
            // header('location:../../views/managerdashboards/facilities.php');
        }

   //others     
        else if($chc=="contactbox"){
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
        } 
    //}
?>
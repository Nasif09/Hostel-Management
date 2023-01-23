<?php
    require_once '../../models/loginmodel.php';
    require_once '../../models/employeeModel.php';
    $name = $_POST["name"];
    $fname= $_POST["fathername"];
    $mname= $_POST["mothername"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $designation = $_POST["designation"];
    $branch = $_POST["branch"];
    $salary = $_POST["salary"];
    
    if(empty($name) || empty($email) || empty($phone) || empty($salary) || empty($branch)|| empty($fname)|| empty($mname) || empty($designation)|| empty($dob)){
        if(empty($name)){
            $_SESSION["emtname"] ="*Must fill up name";
        }
        if(empty($email)){
            $_SESSION["emtemail"] ="*Must fill up email";
        }
        if(empty($phone)){
            $_SESSION["emtphone"] ="*Must fill up Phone number";
        }
        header("location: ../../views/managerdashboards/addemployee.php");
    }
    else{
        $username=strtolower(str_replace(" ",'',$name))."_".date("m");
        $password=$phone."@";
        $id=searchforempid();
        //echo $id;
        $user=['id'=>$id,'name'=>$name,'fname'=>$fname,'mname'=>$mname ,'dob'=>$dob,'designation'=>$designation,'salary'=>$salary,'branch'=>$branch,'email'=>$email,'phone'=>$phone,'username'=>$username,'password'=>$password,'gender'=>$gender];
        //print_r($user);
        $status=addlogininfo($user);
        $status=addemployee($user);

        if(isset($_SESSION['insertemployee']) && isset($_SESSION['insertemployeelogin'])){
            header('location: ../../views/managerdashboards/addemployee.php');
        }
    }

    if($status){
        ?>
        <script>
            if(!alert("Employee <?php echo $name; ?> added successfully"))
            {
                window.location.href = '../../views/managerdashboards/addemployee.php';
            }
        </script>
        <?php
    }else{
        ?>
        <script>
            if(!alert("Error"))
            {
                window.location.href = '../../views/managerdashboards/addemployee.php';
            }
        </script>
        <?php
    }
?>
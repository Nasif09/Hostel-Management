<?php
    require_once '../../models/employeeModel.php';

    if(isset($_POST['searchbyid']))
    {
        $searchbyid = $_POST['searchbyid'];
    }
    $user = ['searchbyid'=>$searchbyid];
    $result = searchEmp($user);
    $status=['nothing'=>'nothing'];

    while($row = mysqli_fetch_assoc($result))
    {
        $status=['id'=>$row['id'],'name'=>$row['name'], 'fathername'=>$row['fathername'], 'mothername'=>$row['mothername'],'dob'=>$row['dob'], 'gender'=>$row['gender'],'designation'=>$row['designation'], 'salary'=>$row['salary'], 'branch'=>$row['branch']];
    }
    
    
    if($status)
    {
        $_SESSION['status'] = $status;
        header('location: ../../views/managerdashboards/foundemployee.php');
    }else{
        echo "Error";
    }

?>
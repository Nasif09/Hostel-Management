<?php
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }
?>

<?php
require_once('../../models/employeeModel.php');
$status = $_SESSION['status'];
?>


<html>
    <head>
    </head>
    <body>
        <form>
        <?php
        echo "
        <table border='1'>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Fathername</th>
            <th>Mothername</th>
            <th>Date of Barth</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Branch</th>
            <th></th>
            <th></th>
            </tr>";
            if($status){
            echo "<tr>
            <td>{$status['id']}</td>
            <td>{$status['name']}</td>
            <td>{$status['fathername']}</td>
            <td>{$status['mothername']}</td>
            <td>{$status['dob']}</td>
            <td>{$status['gender']}</td>
            <td>{$status['designation']}</td>
            <td>{$status['salary']}</td>
            <td>{$status['branch']}</td>
            <td><a href='../../views/managerdashboards/editemp.php?uid=$status[id] & un=$status[name] & fn=$status[fathername] & mn=$status[mothername] & branch=$status[branch] & designation=$status[designation] & salary=$status[salary] & dob=$status[dob] & gender=$status[gender]'>edit</td>
            <td><a href='../../controllers/managersection/deleteemp.php?uid=$status[id]'>delete</td>
            </tr>";
            }
        echo "</table>"
        ?>
        </form>
    </body>
</html>
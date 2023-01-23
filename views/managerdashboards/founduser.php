<?php
    // //session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }
?>

<?php
require_once('../../models/userModel.php');
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
                <th>Date of Birth</th>
                <th>Gender</th>
                <th></th>
                <th></th>
            </tr>";
            if($status){
                ?>
            <tr>
                <td><?php echo $status['id'] ; ?></td>
                <td><?php echo $status['name'] ; ?></td>
                <td><?php echo $status['fathername'] ; ?></td>
                <td><?php echo $status['mothername'] ; ?></td>
                <td><?php echo $status['dob'] ; ?></td>
                <td><?php echo $status['gender'] ; ?></td>
                <td><a href='../../views/managerdashboards/edituser.php?uid=<?php echo $status['id']; ?>'> edit </a> </td>
                <td><a href='../../controllers/managersection/deleteuserValidator.php?uid=<?php echo $status['id']; ?>'>delete </a> </td>
            </tr>
            <?php
            }
        echo "</table>"
        ?>
        </form>
    </body>
</html>
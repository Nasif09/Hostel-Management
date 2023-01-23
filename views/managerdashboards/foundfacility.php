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
require_once('../../models/facilityModel.php');
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
            <th>Price</th>
            <th>Availability</th>
            <th></th>
            <th></th>
            </tr>";
            if($status){
                ?>
            <tr>
                <td><?php echo $status['id'] ; ?></td>
                <td><?php echo $status['name'] ; ?></td>
                <td><?php echo $status['price'] ; ?></td>
                <td><a href='../../views/managerdashboards/editfacility.php?fid=<?php echo $status['id']; ?>'> edit </a> </td>
                <td><a href='../../controllers/managersection/deletefacilityValidator.php?fid=<?php echo $status['id']; ?>'>delete </a> </td>
            </tr>
            <?php
            }
        echo "</table>"
        ?>
        </form>
    </body>
</html>
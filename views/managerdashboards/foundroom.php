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
require_once('../../models/roomModel.php');
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
            <th>Room No</th>
            <th>Room Type</th>
            <th>Branch Name</th>
            <th></th>
            <th></th>
            </tr>";
            if($status){
                ?>
            <tr>
                <td><?php echo $status['roomno'] ; ?></td>
                <td><?php echo $status['roomtype'] ; ?></td>
                <td><?php echo $status['branch'] ; ?></td>
                <td><a href='../../views/managerdashboards/editroom.php?rno=<?php echo $status['roomno']; ?>'> edit </a> </td>
                <td><a href='../../controllers/managersection/deleteroomValidator.php?rno=<?php echo $status['roomno']; ?>'>delete </a> </td>
            </tr>
            <?php
            }
        echo "</table>"
        ?>
        </form>
    </body>
</html>
<html>
<head>
    <link href="../displaytable.css" rel="stylesheet" />
</head>
<body>
    <section class="header">
        <div>
            <nav>
            <a class="logo" href="managerdashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
            <div class="nav-links">
                <ul>
                <li><h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></li>
                    <li><a href="../../controllers/logout.php">Logout</a></li>
                </ul>

            </div>
            </nav>
        </div>
    </section>
</body>
</html>

<?php
$rno="";
$roomtype="";
$branchid="";

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['rno']))
    {
        $rno=$_GET['rno'];
        include '../../models/roomModel.php';
        $result=searchRooms($rno);
        if($result)
        {
            if($result->num_rows==1)
            {

                $row=$result->fetch_assoc();
                $roomtype=$row['roomtype'];
                $bname=$row['branchid'];
                ?>
                <form action="../../controllers/managersection/editroomValidator.php" method="post">
                <div class="displaytable"><table>
                    <tr>
                        <td>Old Room No</td>
                        <td>:<input type="text" value="<?php echo "$rno" ?>"  name="roomno" readonly /></td>
                    </tr>
                    <tr>
                        <td>Room No</td>
                        <td>:<input type="text" value="<?php echo "$rno" ?>"  name="rno" /></td>
                    </tr>
                    <tr>
                        <td>Room Type</td>
                        <td>:
                            <select name="roomtype">
                                <option value="AC" <?php if($roomtype=="AC")echo "selected"; ?>>AC</option>
                                <option value="DELUX" <?php if($roomtype=="DELUX")echo "selected"; ?>>DELUX</option>
                                <option value="Non AC" <?php if($roomtype=="Non AC")echo "selected"; ?>>Non AC</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Branch</td>
                        <td>:
                            <select name="branchid">
                                <option value="Branch 01" <?php if($bname=="Branch 01")echo "selected"; ?>>Branch 01</option>
                                <option value="Branch 02" <?php if($bname=="Branch 02")echo "selected"; ?>>Branch 02</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="insert" value="Insert" ></td>
                    </tr>
                </table>
                </div>
                </form>
                <?php
            }
        }
        else
        {
            echo 'Error';
        }
    }
}
?>
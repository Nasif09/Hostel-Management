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
                    <li><a href="../controllers/logout.php">Logout</a></li>
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
                <form action="../../controllers/adminsection/editroomValidator.php" method="post">
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
                                <option value="economy" <?php if($roomtype=="economy")echo "selected"; ?>>Economy</option>
                                <option value="businessclass" <?php if($roomtype=="businessclass")echo "selected"; ?>>Business class</option>
                                <option value="firstclass" <?php if($roomtype=="firstclass")echo "selected"; ?>>First class</option>
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
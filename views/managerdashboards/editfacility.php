
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
                <!-- <li><h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></li> -->
                    <li><a href="../../controllers/logout.php">Logout</a></li>
                </ul>

            </div>
            </nav>
        </div>
    </section>
</body>
</html>

<?php
$fid="";
$name="";
$price="";
$availability="";


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['fid']))
    {
        $fid=$_GET['fid'];
        include '../../models/facilityModel.php';
        $result=searchFacility($fid);
        if($result)
        {
            if($result->num_rows==1)
            {
                $row=$result->fetch_assoc();
                $name=$row['name'];
                $price=$row['price'];
                ?>
                <form action="../../controllers/managersection/editfacilityValidator.php" method="post">
                <div class="displaytable">
                    <table>
                        <tr>
                            <td>Id</td>
                            <td>:<input type="text" value="<?php echo "$fid" ?>"  name="fid" /></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:<input type="text" value="<?php echo "$name" ?>"  name="name" /></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:<input type="number" value="<?php echo "$price" ?>"  name="price" /></td>
                        </tr>
                        <tr>
                            <td>Availability</td>
                            <td>:<input type="checkbox" name="availability"  <?php if($availability=="Yes")echo "checked"; ?> /></td>
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
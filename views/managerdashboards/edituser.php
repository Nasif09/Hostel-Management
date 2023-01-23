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
$name="";
$fname="";
$mname="";
$dob="";
$gender="";
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['rno']))
    {
        $rno=$_GET['rno'];
        include '../../models/userModel.php';
        $result=searchAnUser($rno);
        if($result)
        {
            if($result->num_rows==1)
            {
                $row=$result->fetch_assoc();
                $name=$row['name'];
                $fname=$row['fathername'];
                $mname=$row['mothername'];
                $dob=$row['dob'];
                $gender=$row['gender'];
                ?>
                <form action="../../controllers/managersection/edituserValidator.php" method="post">
                <div class="displaytable">
                    <table>
                        <tr>
                            <td>Old Id</td>
                            <td>:<input type="text" value="<?php echo "$rno" ?>"  name="id" readonly /></td>
                        </tr>
                        <tr>
                            <td>Id</td>
                            <td>:<input type="text" value="<?php echo "$rno" ?>"  name="rno" /></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:<input type="text" name="name" value="<?php echo $name; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Fathername</td>
                            <td>:<input type="text" name="fathername"  value="<?php echo $fname; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Mothername</td>
                            <td>:<input type="text" name="mothername"  value="<?php echo $mname; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:<input type="date" name="dob"  value="<?php echo $dob; ?>"/></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio" name="gender" value="male" <?php if($gender=="male")echo "checked"; ?>/>Male
                                <input type="radio" name="gender" value="female" <?php if($gender=="female")echo "checked"; ?> />Female
                                <input type="radio" name="gender" value="others" <?php if($gender=="others")echo "checked"; ?> />Others
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>Parmanentaddress</td>
                            <td>:<input type="text" name="parmanentaddress" /></td>
                        </tr> -->
                        <!-- <tr>
                            <td>Branch</td>
                            <td>:
                                <select name="branch">
                                    <option value="1">Branch 01</option>
                                    <option value="2">Branch 02</option>
                                </select>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td>Furniture</td>
                            <td>:<input type="number" name="furniture" /></td>
                        </tr>     -->
                        <tr>
                            <td align="center" colspan="2"><input type="submit" name="edit" value="EDIT" ></td>
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
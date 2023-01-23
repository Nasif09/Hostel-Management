<?php
    //  session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }

?>
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
$id="";
$name="";
$fathername="";
$mothername="";
$dob="";
$gender="";
$designation="";
$salary="";
$branch="";
$gender="";

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_GET['rno']))
    {
        $rno=$_GET['rno'];
        require_once '../../models/employeeModel.php';
        $result=searchEmps($rno);
        if($result)
        {
            if($result->num_rows==1)
            {

                $row=$result->fetch_assoc();
                $id=$row['id'];
                $fathername=$row['fathername'];
                $name=$row['name'];
                $mothername=$row['mothername'];
                $dob=$row['dob'];
                $gender=$row['gender'];
                $branch=$row['branch'];
                $salary=$row['salary'];
                ?>
                <form action="../../controllers/managersection/editempValidator.php" method="post">
                <div class="displaytable"><table>
                    <tr>
                        <td>Old Id</td>
                        <td>:<input type="text" value="<?php echo "$rno" ?>"  name="id" readonly /></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:<input type="text" value="<?php echo "$name" ?>"  name="name" /></td>
                    </tr>
                    <tr>
                        <td>Father Name</td>
                        <td>:<input type="text" value="<?php echo "$fathername" ?>"  name="fathername" /></td>
                    </tr>
                    <tr>
                        <td>Mother Name</td>
                        <td>:<input type="text" value="<?php echo "$mothername" ?>"  name="mothername" /></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>:<input type="date" name="dob"  value="<?php echo $dob; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>:<input type="number" value="<?php echo "$salary" ?>"  name="salary" /></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="male" <?php if($gender=="male")echo "checked"; ?>/>Male
                            <input type="radio" name="gender" value="female" <?php if($gender=="female")echo "checked"; ?> />Female
                            <input type="radio" name="gender" value="others" <?php if($gender=="others")echo "checked"; ?> />Others
                        </td>
                    </tr>
                    <tr>
                        <td>Branch</td>
                        <td>:
                            <select name="branch">
                                <option value="Branch 01" <?php if($branch=="Branch 01")echo "selected"; ?>>Branch 01</option>
                                <option value="Branch 02" <?php if($branch=="Branch 02")echo "selected"; ?>>Branch 02</option>
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
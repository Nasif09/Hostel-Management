<?php
    require_once '../../models/branchmodel.php';
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['err'])){
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
    if(isset($_SESSION['insertemployee'])){
        echo $_SESSION['insertemployee'];
        unset($_SESSION['insertemployee']);
    }
?>
<?php?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <script src="dashboard.js"></script>
        <link href="../DaashboardStyle.css" rel="stylesheet" />
    </head>
    <body>
        <table width="100%" height="100%">
            <tr>
            <section class="header">
            <div>
                <nav>
                <a class="logo" href="admindashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
                <div class="nav-links">
                    <ul>
                        <!-- <li><a href="managerdashboards.php">Home</a></li> -->
                        <li><h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></li>
                        <li><a href="../../controllers/logout.php">Logout</a></li>
                    </ul>

                </div>
                </nav>
            </div>
            </section>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../../controllers/adminsection/adminselection.php">
                                <table  class="table">
                                        <tr align="left">
                                            <td class="select">
                                                <select name="employeemanagement"  class="cformate" onchange="change1()" id='emp1'>
                                                    <option value="addemployee">Employee Management</option>
                                                    <option value="addemployee">Add Employee</option>
                                                    <option value="employeedetails">Employee Details</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="usermanagement"  class="cformate" onchange="change2()" id='emp2'>
                                                    <option value="">User Management</option>
                                                    <option value="adduser">Add User</option>
                                                    <option value="userdetails">User Details</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="facilityAndServices"  class="cformate" onchange="change3()" id='emp3'>
                                                    <option value="">Facility & Services</option>
                                                    <option value="addnewfacility">Add new Facility</option>
                                                    <option value="facilitydetails">Facilities</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="branch" class="cformate" onchange="change4()" id='emp4'>
                                                    <option value="">Branch</option>
                                                    <option value="addnewbranch">Add new branch</option>
                                                    <option value="branchdetails">Branch Details</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="room"  class="cformate" onchange="change5()" id='emp5'>
                                                    <option value="">Room</option>
                                                    <option value="addnewroom">Add new room</option>
                                                    <option value="roomdetails">Room Details</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="accounts" class="cformate" onchange="change6()" id='emp6'>
                                                    <option value="">Accounts</option>
                                                    <option value="totalrevenue">Total Revenue</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                            <td align="center">
                                <form method="post" action="../../controllers/adminsection/addemployeevalidator.php">
                                    <fieldset>
                                        <legend>Add Employee</legend>
                                        <table>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input type="text" name="name" />
                                                <?php
                                                    if(isset($_SESSION["emtname"])){
                                                        echo $_SESSION["emtname"];
                                                        unset($_SESSION["emtname"]);
                                                    }
                                                    if(isset($_SESSION['nameerr'])){
                                                        echo $_SESSION['nameerr'];
                                                        unset($_SESSION['nameerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father's Name</td>
                                                <td>:<input type="text" name="fathername" />
                                                <?php
                                                    if(isset($_SESSION["emtname"])){
                                                        echo $_SESSION["emtname"];
                                                        unset($_SESSION["emtname"]);
                                                    }
                                                    if(isset($_SESSION['nameerr'])){
                                                        echo $_SESSION['nameerr'];
                                                        unset($_SESSION['nameerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother's Name</td>
                                                <td>:<input type="text" name="mothername" />
                                                <?php
                                                    if(isset($_SESSION["emtname"])){
                                                        echo $_SESSION["emtname"];
                                                        unset($_SESSION["emtname"]);
                                                    }
                                                    if(isset($_SESSION['nameerr'])){
                                                        echo $_SESSION['nameerr'];
                                                        unset($_SESSION['nameerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:<input type="email" name="email" />
                                                <?php
                                                    if(isset($_SESSION["emtemail"])){
                                                        echo $_SESSION["emtemail"];
                                                        unset($_SESSION["emtemail"]);
                                                    }
                                                    if(isset($_SESSION['emailerr'])){
                                                        echo $_SESSION['emailerr'];
                                                        unset($_SESSION['emailerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>:<input type="number" name="phone" />
                                                <?php
                                                    if(isset($_SESSION["emtphone"])){
                                                        echo $_SESSION["emtphone"];
                                                        unset($_SESSION["emtphone"]);
                                                    }
                                                    if(isset($_SESSION['phoneerr'])){
                                                        echo $_SESSION['phoneerr'];
                                                        unset($_SESSION['phoneerr']);
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>
                                                    :<input type="date" name="dob" />
                                                    <?php
                                                        if(isset($_SESSION["emtphone"])){
                                                            echo $_SESSION["emtphone"];
                                                            unset($_SESSION["emtphone"]);
                                                        }
                                                        if(isset($_SESSION['phoneerr'])){
                                                            echo $_SESSION['phoneerr'];
                                                            unset($_SESSION['phoneerr']);
                                                        }
                                                    ?>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>:
                                                    <select name="gender" onchange='myfunc()'>
                                                        <option value="">Select e gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Occupation</td>
                                                <td>:
                                                    <select name="occupation">
                                                        <option value="Student">Student</option>
                                                        <option value="Private Job">Private Job</option>
                                                        <option value="Govt. Officer">Govt. Officer</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Branch</td>
                                                <td>:
                                                    <?php 
                                                        $results=showbranchid();
                                                        $rows=mysqli_num_rows($results);
                                                        if($rows>0){
                                                            echo "<select name='branch'>";          
                                                            while($row = mysqli_fetch_assoc($results)){
                                                                echo "<option value='".$row['id']."'>".$row['id']."</option>";
                                                            }
                                                            echo "</select>";
                                                        }
                                                        else{
                                                            echo "No Branch added yet...";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Salary</td>
                                                <td>:<input type="number" name="salary" /></td>
                                            </tr>      
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="ADD" ></td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
            <script>
                function myFunction() {
                    let x = document.getElementById("Male").checked;
                    document.getElementByTagName("p")[0].innerHTML = x;
                }
            </script>
        </script>
    </body>
</html>
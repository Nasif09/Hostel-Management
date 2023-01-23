<?php
    require_once '../../models/branchmodel.php';
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['insertroomerr'])){
        echo "<script>alert('".$_SESSION['insertroomerr']."')</script>";
        unset($_SESSION['insertroomerr']);
    }
    if(isset($_SESSION['insertroom'])){
        echo "<script>alert('".$_SESSION['insertroom']."')</script>";
        unset($_SESSION['insertroom']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
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
                                <form method="post" action="../../controllers/adminsection/addroomval.php">
                                    <fieldset>
                                        <legend>Add New Room</legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input type="text" name="roomno" id='roomno' placeholder="Room no."/>
                                                    <p id='romexits'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php 
                                                        $results=showbranchid();
                                                        $rows=mysqli_num_rows($results);
                                                        if($rows>0){
                                                            echo "<select name='branch' id='branchroom' onchange='showavaiablepackage()'><option value='' id='branchroom' onchange='showavaiablepackage()'>Select Branch</option>";          
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
                                                <td>
                                                    <select name="branchtype">
                                                        <option value="">Select a Package</option>
                                                    </select>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="ADD" onclick='checkroomexits()'></td>
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
            function checkroomexits() {
                let roomno = document.getElementById('roomno').value;
                if (roomno != " ") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('POST', '../../controllers/adminsection/roomexistancecheck.php?roomno=' + roomno, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                        }
                    }
                }
            }
        </script>
    </body>
</html>
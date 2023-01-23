<?php
    session_start();
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
?>
<?php?>
<html>
    <head>
        <script src="dashboard.js"></script>
        <link href="../DaashboardStyle.css" rel="stylesheet" />
        <title>Admin Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
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
                                <form method="post" action="addemployeevalidator.php">
                                    <fieldset>
                                        <legend>Add New Service</legend>
                                        <table>
                                            <tr>
                                                <td>Service Name</td>
                                                <td>:<input type="text" name="servicename" /></td>
                                            </tr>
                                            <tr>
                                                <td>Cost</td>
                                                <td>:<input type="text" name="Cost" /></td>
                                            </tr>
                                            <tr>
                                                <td>Supervisor</td>
                                                <td>:<input type="text" name="supervisor" /></td>
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
    </body>
</html>
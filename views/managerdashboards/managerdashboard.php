<?php
     session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }

?>
<html>
    <head>
        <title>Manager Dashboard</title>
        <script src="../dashboard.js"></script>
        <link href="../DaashboardStyle.css" rel="stylesheet" />
    </head>
    <body>
        <table width="100%" height="100%" class="background">
            <tr>
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
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../controllers/managersection/managersection.php">
                                    <table class="table">
                                        <tr align="left">
                                            <td class="select">
                                                <select name="formate" class="cformate" onchange="change1()" id='emp1' >
                                                    <option selected disabled>User Management</option>
                                                    <option value="adduser">Add User</option>
                                                    <option value="searchuser">Search User</option>
                                                    <option value="users">Users</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        <tr align="left">
                                            <td class="select">
                                                <select name="employeemanagement" class="cformate" onchange="change2()" id='emp2'>
                                                    <option selected disabled>Employee Management</option>
                                                    <option value="addemployee">Add Employee</option>
                                                    <option value="searchemployee">Search Employee</option>
                                                    <option value="employeedetails">Employees</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="facilityAndServices" class="cformate" onchange="change3()" id='emp3'>
                                                    <option selected disabled>Facility & Services</option>
                                                    <option value="addfacility">Add Facility</option>
                                                    <option value="facilities">Facilities</option>
                                                    <option value="updatefacility">Update Facility</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="room" class="cformate" onchange="change4()" id='emp4'>
                                                    <option selected disabled>Room</option>
                                                    <option value="addroom">Add Room</option>
                                                    <option value="roomdetails">Room Details</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="accounts" class="cformate" onchange="change5()" id='emp5'>
                                                    <option selected disabled>Accounts</option>
                                                    <option value="payslip">Pay Slip</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="others" id="formate" class="cformate" onchange="change6()" id='emp6'>
                                                    <option selected disabled>Others</option>
                                                    <option value="contactbox">Contact Box</option>
                                                    <option value="complainbox">Complain Box</option>
                                                    <option value="leaveapplication">Leave Application</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <td align="center" colspan="2">
                                                <input class="btn" type="submit" name="" value="Continue..." />
                                                <input class="btn" type="reset" name="" value="Reset" />
                                            </td>
                                        </tr> -->
                                        </table>
                                </form>
                            </td>
                            <td align="center">
                                <table>
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <legend>Users</legend>
                                                <h2>Number of users:
                                                <?php 
                                                require_once('../../models/userModel.php');
                                                $data = allUsers();
                                                $countrow = mysqli_num_rows($data);
                                                echo $countrow;
                                                ?>
                                                </h2>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                                <legend>Facilities</legend>
                                                <h2>Number of facilities:
                                                <?php 
                                                require_once('../../models/facilityModel.php');
                                                $data = allFacilities();
                                                $countrow = mysqli_num_rows($data);
                                                echo $countrow;
                                                ?>
                                                </h2>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <legend>Roomes</legend>
                                                <h2>Number of roomes: 
                                                <?php 
                                                require_once('../../models/roomModel.php');
                                                $data = allUsers();
                                                $countrow = mysqli_num_rows($data);
                                                echo $countrow;
                                                ?>
                                                </h2>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                                <legend>Rooms</legend>
                                                <h2>Number of Rooms:  
                                                <?php 
                                                require_once('../../models/userModel.php');
                                                $data = allRooms();
                                                $countrow = mysqli_num_rows($data);
                                                echo $countrow;
                                                ?>
                                                </h2>
                                            </fieldset>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
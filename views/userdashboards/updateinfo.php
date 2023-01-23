<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:views/login.php');
    }
    if(isset($_SESSION['profilepic'])){
        echo "<script>alert('".$_SESSION['profilepic']."')</script>";
        unset($_SESSION['profilepic']);
    }
?>
<?php?>
<html>
    <head>
        <script src="dashboard.js"></script>
        <title>User Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <h2><i>Smart Hostel</i></h2>
                            </td>
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></td>
                            <td align="right">
                                <a href="../../controllers/logout.php"><img src="../../assets/image/logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../../usersection/usersection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td>
                                                    <select name="information" id='emp1' onchange="change1()">
                                                        <option value="">My Profile</option>
                                                        <option value="updateProf">Upload Profile Picture</option>
                                                        <option value="updateinfo">Update Information</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr align="left">
                                                <td>
                                                    <select name="accounts" id='emp2' onchange="change2()">
                                                        <option value="">Accounts</option>
                                                        <option value="monthlybill">Monthly Bill</option>
                                                        <option value="servicecost">View Services Cost</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            

                                            <tr align="left">
                                                <td>
                                                    <select name="facility" id='emp3' onchange="change3()">
                                                        <option value="">Facility & Services</option>
                                                        <option value="addnewfacility">Add Services</option>
                                                        <option value="cancelservice">Cancel Services</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="others" id='emp4' onchange="change4()">
                                                        <option value="">Others</option>
                                                        <option value="termsandconditions">Terms and conditions</option>
                                                        <option value="leaveapplication">Leave application</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td align="center">
                                <fieldset>
                                    <legend>Upload Profile Picture</legend>
                                    <form method="POST" action="../../controllers/usersection/uploadprofpicvalidator.php" enctype="multipart/form-data">
                                        <table width="100%">
                                            <tr>
                                                <td align="center">
                                                    <img src="../../assets/profilepics/noprof.png" height="200px" wight="120px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    Image: <input type="file" name="image" value="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <input type="submit" name="submit" value="Submit" />
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
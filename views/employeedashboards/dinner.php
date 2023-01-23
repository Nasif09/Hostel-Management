<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }
?>
<html>
    <head>
        <title>Cooker Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <a href="cookerdashboard.php"><h2><i>Smart Hostel</i></h2></a>
                            </td>
                            <td align="right"> <h4>Welcome, cooker</h4></td>
                            <td align="right">
                                <a href="../controllers/logout.php"><img src="image\logout-icon.jpg" width="35" height="35" align="center"></a>
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
                                <form method="post" action="../../controllers/employee/cookersection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td><input type="radio" name="empOpt" value="manu" />Manu</td>
                                                <td>
                                                    <select name="manu">
                                                        <option value="updatemanu">Update Manu</option>
                                                        <!-- <option value="searchuser">Search User</option>
                                                        <option value="users">Users</option> -->
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            <tr align="left">
                                                <td><input type="radio" name="empOpt" value="accounts" />Accounts</td>
                                                <td>
                                                    <select name="accounts">
                                                        <option value="financials">$Financials</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td><input type="radio" name="empOpt" value="others" />Others</td>
                                                <td>
                                                    <select name="others">
                                                        <option value="contactbox">Contact Box</option>
                                                        <option value="complainbox">Complain Box</option>
                                                        <option value="leaveapplication">Leave Application</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            
                                            <tr align="left">
                                                <td><input type="radio" name="empOpt" value="message" />Message</td>
                                                <td>
                                                    <select name="message">
                                                        <option value="financials">Mail Box</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="center" colspan="2">
                                                    <input type="submit" name="" value="Continue..." />
                                                    <input type="reset" name="" value="Reset" />
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td align="center">
                                <table border="1" height="30%" width="50%">
                                    <tr>
                                        <th>Day</td>
                                        <th>Snacks</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>Rice, Egg</td>
                                    </tr>
                                    <tr>
                                        <td>Monday</td>
                                        <td>Parata, Egg, Vegetable</td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>Khichuri, Chicken</td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>Rice, Mutton </td>
                                    </tr>
                                    <tr>
                                        <td>thursday</td>
                                        <td>Rice, Egg, Vegetable</td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>Pulau, beaf</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>Khichuri, Eggs </td>
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
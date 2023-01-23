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
        <title>Add User</title>
        <script src="../dashboard.js"></script>
        <link href="../DaashboardStyle.css" rel="stylesheet" />
    </head>
    <body>
        <table width="100%" height="100%">
            <tr>
            <section class="header">
            <div>
                <nav>
                <a class="logo" href="accountdashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
                <div class="nav-links">
                    <ul>
                        <!-- <li><a href="managerdashboards.php">Home</a></li> -->
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
                                <form method="post" action="../../controllers/employeesection/accountsection.php">
                                    <table class="table">
                                    
                                        <tr align="left">
                                            <td class="select">
                                                <select name="accounts" class="cformate" onchange="change1()" id='emp1'>
                                                    <option selected disabled>Accounts</option>
                                                    <option value="payroll">Payroll</option>
                                                    <option value="payslip">Pay Slip</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr align="left">
                                            <td class="select">
                                                <select name="others" id="formate" class="cformate" onchange="change2()" id='emp2'>
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
                                <form method="post" action="../../controllers/employeesection/salaryValidator.php" onsubmit="return checkfield()">
                                    <fieldset>
                                        <legend>Salary</legend>
                                        <table>
                                            <tr>
                                                <td>Id</td>
                                                <td>:<input type="text" name="id" id="id"/></td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>:<input type="text" name="name" id="name"/></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Password</td>
                                                <td>:<input type="text" name="password" /></td>
                                            </tr> -->
                                            <tr>
                                                <td>Absent</td>
                                                <td>:<input type="text" name="absent" id="absent"/></td>
                                            </tr>
                                            <tr>
                                                <td>Late</td>
                                                <td>:<input type="text" name="late" id="late"/></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Occupation</td>
                                                <td>:<input type="text" name="occupation" /></td>
                                            </tr> -->
                                            <tr>
                                                <td>Total Allowance</td>
                                                <td>:<input type="allowance" name="allowance" id="allowance"/></td>
                                            </tr>
                                            <tr>
                                                <td>Total Deduction</td>
                                                <td>:<input type="deduction" name="deduction" id="deduction"/></td>
                                            </tr>
                                            <tr>
                                                <td>Net</td>
                                                <td>:<input type="net" name="net" id="net"/></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Gender</td>
                                                <td>
                                                    <input type="radio" name="gender" value="male" />Male
                                                    <input type="radio" name="gender" value="female" />Female
                                                    <input type="radio" name="gender" value="others" />Others
                                                </td>
                                            </tr> -->
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

<script>
    function checkfield()
        {  

            let name = document.getElementById('name').value;
            let fathername = document.getElementById('fathername').value;
            let mothername = document.getElementById('mothername').value;
            let dob = document.getElementById('dob').value;

            if(name=="" || fathername=="" || mothername=="" || dob=="")
            { 
                alert("Must be fillup all information"); event.preventDefault();
                //document.getElementById('errmsg').innerHTML = "Must be fillup all information"; 
            }
        }
</script>
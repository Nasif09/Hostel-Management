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
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="Male" />Male
                                                        <input type="radio" name="gender" value="Female" />Female
                                                        <input type="radio" name="gender" value="Other" />Other
                                                        <p id="g1err"></p>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Designation</td>
                                                <td>:
                                                    <select name="designation">
                                                        <option value="Manager">Manager</option>
                                                        <option value="General Employee">General Employee</option>
                                                        <option value="Accountant">Accountant</option>
                                                        <option value="Service Man">Service Men</option>
                                                        <option value="Washerman">Washerman</option>
                                                        <option value="Cook">Cook</option>
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
            function change1() {
                let name = document.getElementById('emp1').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change2() {
                let name = document.getElementById('emp2').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change3() {
                let name = document.getElementById('emp3').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change4() {
                let name = document.getElementById('emp4').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change5() {
                let name = document.getElementById('emp5').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change6() {
                let name = document.getElementById('emp6').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
        </script>
    </body>
</html>
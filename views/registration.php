<?php
    session_start();
    if(isset($_SESSION["regValid"])){
        echo $_SESSION["regValid"];
        unset($_SESSION["regValid"]);
    }
    if(isset($_SESSION["regerr"])){
        echo "<script>alert('".$_SESSION["regerr"]."')</script>";;
        unset($_SESSION["regerr"]);
    }

?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" width="100%" height="100%">
        <tr>
            <td>
                <center>
                    <table height="100%" width="100%">
                        <tr>
                            <td><h1><i>Smart Hostel</i></h1></td>
                            <td align="right">
                                <a href="../index.php">Home</a> |
                                <a href="login.php">Login</a> |
                                <a href="registration.php">Registration</a>
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>REGISTRATION</legend>
                                    <form method="post" action="../controllers/registrationvalidator.php" >
                                        <table>
                                            <tr>
                                                <td colspan="2"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>
                                                    :<input type="text" name="name" value="" onkeyup="f1()" id='na1'/>
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
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Father's Name</td>
                                                <td>
                                                    :<input type="text" name="fname" value="" onkeyup="f7()" id='na2'/>
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
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mother's Name</td>
                                                <td>
                                                    :<input type="text" name="mname" value="" onkeyup="f8()" id='na3'/>
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
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    :<input type="text" name="email" value="" onkeyup="f2()" id='em1'/>
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
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>
                                                    :<input type="number" name="phone" value="" onkeyup="f3()" id='phn1' />
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
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Userame</td>
                                                <td>
                                                    :<input type="text" name="username" value="" onkeyup="f4()" id='uid1'/>
                                                    <?php
                                                    
                                                        if(isset($_SESSION["emtusername"])){
                                                            echo $_SESSION["emtusername"];
                                                            unset($_SESSION["emtusername"]);
                                                        }
                                                    
                                                        if(isset($_SESSION['usernameerr'])){
                                                            echo $_SESSION['usernameerr'];
                                                            unset($_SESSION['usernameerr']);
                                                        }
                                                    ?>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    :<input type="password" name="pass" value="" onkeyup="f5()" id='pass1'/>
                                                    <?php
                                                        if(isset($_SESSION["emtpass"])){
                                                            echo $_SESSION["emtpass"];
                                                            unset($_SESSION["emtpass"]);
                                                        }
                                                        if(isset($_SESSION['passerr'])){
                                                            echo $_SESSION['passerr'];
                                                            unset($_SESSION['passerr']);
                                                        }
                                                    ?>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    :<input type="password" name="conpass" value="" onkeyup="f6()" id='con1'/>
                                                    <?php
                                                        if(isset($_SESSION["emtconpass"])){
                                                            echo $_SESSION["emtconpass"];
                                                            unset($_SESSION["emtconpass"]);
                                                        }
                                                        if(isset($_SESSION['conpasseerr'])){
                                                            echo $_SESSION['conpasseerr'];
                                                            unset($_SESSION['conpasseerr']);
                                                        }
                                                    ?>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="Male" />Male
                                                        <input type="radio" name="gender" value="Female" />Female
                                                        <input type="radio" name="gender" value="Other" />Other
                                                    </fieldset>
                                                    <?php
                                                        if(isset($_SESSION["emtgender"])){
                                                            echo $_SESSION["emtgender"];
                                                            unset($_SESSION["emtgender"]);
                                                        }
                                                    ?>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td  colspan="2">
                                                    <fieldset>
                                                        <legend>Date of Birth</legend>
                                                        <input type="date" name="dob" value="" />
                                                    </fieldset>
                                                    <?php
                                                        if(isset($_SESSION["emtdob"])){
                                                            echo $_SESSION["emtdob"];
                                                            unset($_SESSION["emtdob"]);
                                                        }
                                                    ?>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="" value="Submit" />
                                                    <input type="reset" name="" value="Reset" />
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset> 
                            </td>
                        </tr>
                    </table>
                </center>
            </td>
        </tr>
        <!-- <tr>
            <td align="center"><h4>copyright @ smart_hostel</h4></td>
        </tr> -->
    </table>
    <script>
        function f1() {
            let name = document.getElementById('na1').value;
            if (name.length < 8) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
            }
            else {
                document.getElementsByTagName('p')[0].style.display = 'none';
            }
        }
        function f2() {
            let email = document.getElementById('em1').value;
            if (email.length < 12) {
                document.getElementsByTagName('p')[3].innerHTML = "Invalid email";
            }
            else {
                document.getElementsByTagName('p')[3].innerHTML = "";
            }
        }
        function f3() {
            let phone = document.getElementById('phn1').value;
            //let phone=phone1.tostring();
            if (phone.length < 11) {
                document.getElementsByTagName('p')[4].innerHTML = "Invalid phone number";
            }
            else {
                document.getElementsByTagName('p')[4].innerHTML = "";
            }
        }
        function f4() {
            let username = document.getElementById('uid1').value;
            if (username.length < 2) {
                document.getElementsByTagName('p')[5].innerHTML = "Invalid username";
            }
            else {
                document.getElementsByTagName('p')[5].innerHTML = "";
            }
        }
        function f5() {
            let pass = document.getElementById('pass1').value;
            if (pass.length < 12) {
                document.getElementsByTagName('p')[6].innerHTML = "weak password";
            }
            else {
                document.getElementsByTagName('p')[6].innerHTML = "password is strong";
            }
        }
        function f6() {
            let pass = document.getElementById('pass1').value;

            let conpass = document.getElementById('con1').value;
            if (conpass != pass) {
                document.getElementsByTagName('p')[7].innerHTML = "Password didn't match";
            }
            else {
                document.getElementsByTagName('p')[7].innerHTML = "";
            }
        }
        function f7() {
            let name = document.getElementById('na2').value;
            if (name.length < 8) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
            }
            else {
                document.getElementsByTagName('p')[0].style.display = 'none';
            }
        }
        function f8() {
            let name = document.getElementById('na3').value;
            if (name.length < 8) {
                document.getElementsByTagName('p')[0].innerHTML = "Invalid name";
            }
            else {
                document.getElementsByTagName('p')[0].style.display = 'none';
            }
        }
    </script>
</body>
</html>
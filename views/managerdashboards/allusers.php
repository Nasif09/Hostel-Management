<?php
    // session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }
?>


<?php
// session_start();
require_once('../../models/userModel.php');
//$status = $_SESSION['status']
?>

<html>
    <head>
        <link href="../displaytable.css" rel="stylesheet" />
    </head>
    <body>
    <input type="submit" value="Print Ticket" name="Print" onclick="window.print()">
        <section class="header">
        <div>
            <nav>
            <a class="logo" href="managerdashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
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

        <div class="search">
            <td><input type='text' size="30" class="searchTerm" name='searchbyusername' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' />
            <button type='submit' class="searchButton">Search</button></td>
        </div> 
        
        <div class="displaytable">
            <?php
            echo "
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fathername</th>
                    <th>Mothername</th>
                    <th>Date of Barth</th>
                    <th>Gender</th>
                </tr>";
                $status=allUsers();
                while($row = mysqli_fetch_assoc($status)){
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['fathername']}</td>
                    <td>{$row['mothername']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['gender']}</td>
                </tr>";
                }
            echo "</table>";
            ?>
        </div>
    </body>
</html>


<script>
    
    function ajax(){
        let searchbyid = document.getElementById('searchbyid').value;
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', '../../controllers/managersection/searchuserValidator.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchbyid='+searchbyid);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('h1')[0].innerHTML = this.responseText;
            }
        }
    }              

</script>
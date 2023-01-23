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
require_once('../../models/roomModel.php');
//$status = $_SESSION['status']
?>

<html>
    <head>
        <link href="../displaytable.css" rel="stylesheet" />
    </head>
    <body>
        <section class="header">
            <div>
                <nav>
                <a class="logo" href="managerdashboards.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
                <div class="nav-links">
                    <ul>
                        <!-- <li><a href="managerdashboards.php">Home</a></li> -->
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
            <table border='1'>
            
            <tr>
            <td><input type='text' name='searchbyusername' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' /></td>
            </tr> 
            <tr>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Branch Name</th>
            </tr>";
                $status=allRooms();
                while($row = mysqli_fetch_assoc($status)){
                echo "<tr>
                    <td>{$row['roomno']}</td>
                    <td>{$row['roomtype']}</td>
                    <td>{$row['branchid']}</td>
                </tr>";
                }
            echo "</table>"
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


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
require_once('../../models/facilityModel.php');
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
            <a class="logo" href="managerdashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
            <div class="nav-links">
                <ul>
                <li><h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></li>
                    <!-- <li><a href="managerdashboards.php">Home</a></li> -->
                    <li><a href="../controllers/logout.php">Logout</a></li>
                </ul>

            </div>
            </nav>
        </div>
        </section>
        
        <div class="search">
        <td><input type='text' name='searchbyusername' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' />
        <input type="button" name="btn" value="Search" onclick="ajax()"/></td>    
        </div> 

        <div class="displaytable">
        <table border='1'>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Availability</th>
            <th colspan="2">Action</th>
            
         </tr><?php
         $status=allFacilities();
         while($row = mysqli_fetch_assoc($status)){ ?>
        <tr>
            <td><?php echo $row['name'] ; ?></td>
            <td><?php echo $row['price'] ; ?></td>
            <td><?php echo $row['availability'] ; ?></td>
            <td><a href='../../views/managerdashboards/editfacility.php?fid=<?php echo $row['id']; ?>'> edit </a> </td>
            <td><a href='../../controllers/managersection/deletefacilityValidator.php?fid=<?php echo $row['id']; ?>'>delete </a> </td>
        </tr>
        <?php
         }
        echo "</table>"
        ?>
        <!-- <tr>
            <td><h1></h1></td>
        </tr> -->
        </div>
    </body>
</html>


<script>
    
    function ajax(){
        let searchbyid = document.getElementById('searchbyid').value;
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', '../../controllers/managersection/searchfacilityValidator.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchbyid='+searchbyid);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('table')[0].innerHTML = this.responseText;
            }
        }
    }              

</script>


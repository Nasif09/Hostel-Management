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
require_once('../../models/roomModel.php');
// $status = $_SESSION['status']
?>

<html>
    <head>
        <link href="../displaytable.css" rel="stylesheet" />
    </head>
    <body>
        <section class="header">
        <div>
            <nav>
            <a class="logo" href="admindashboard.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
            <div class="nav-links">
                <ul>
                        <!-- <li><h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></li> -->
                    <li><a href="../../controllers/logout.php">Logout</a></li>
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
        <table>
        <tr>
            <th>Room No</th>
            <th>Room Type</th>
            <th>Branch Name</th>
            <th colspan="2">Action</th>
         </tr><?php
        
         $status=allRooms();
         while($row = mysqli_fetch_assoc($status)){ ?>
         <tr>
        <tr>
            <td><?php echo $row['roomno'] ; ?></td>
            <td><?php echo $row['roomtype'] ; ?></td>
            <td><?php echo $row['branchid'] ; ?></td>
            <td><a href='../../views/admindashboards/editroom.php?rno=<?php echo $row['roomno']; ?>'> edit </a> </td>
            <td><a href='../../controllers/adminsection/deleteroomValidator.php?rno=<?php echo $row['roomno']; ?>'>delete </a> </td>
        </tr>
        <?php
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

        xhttp.open('POST', '../../controllers/managersection/searchroomValidator.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchbyid='+searchbyid);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('table')[0].innerHTML = this.responseText;
            }
        }
    }              

</script>


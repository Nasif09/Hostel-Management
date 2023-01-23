<?php
    // session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:login.php');
    }
?>


<?php
require_once '../../models/employeeModel.php';

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
            <th>ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Branch</th>
            <th colspan="2">Action</th>
         </tr><?php
        
         $status=allEmp();
         while($row = mysqli_fetch_assoc($status)){ ?>
         <tr>
        <tr>
            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['name'] ; ?></td>
            <td><?php echo $row['fathername'] ; ?>
            <td><?php echo $row['mothername'] ; ?></td>
            <td><?php echo $row['dob'] ; ?></td>
            <td><?php echo $row['gender'] ; ?></td>
            <td><?php echo $row['designation'] ; ?></td>
            <td><?php echo $row['salary'] ; ?></td>
            <td><?php echo $row['branch'] ; ?></td>
            <td><a href='../../views/managerdashboards/editemp.php?rno=<?php echo $row['id']; ?>'> edit </a> </td>
            <td><a href='../../controllers/managersection/deleteempValidator.php?rno=<?php echo $row['id']; ?>'>delete </a> </td>
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

        xhttp.open('POST', '../../controllers/managersection/searchemployeeValidator.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('searchbyid='+searchbyid);
        xhttp.onreadystatechange = function(){
            
            if(this.readyState == 4 && this.status == 200){
                document.getElementsByTagName('table')[0].innerHTML = this.responseText;
            }
        }
    }              

</script>


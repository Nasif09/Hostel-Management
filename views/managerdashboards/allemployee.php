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
    <head><script src="../dashboard.js"></script>
    </head>
    <body>
        <?php
        echo "
        <table border='1'>
        
        <tr>
        <td><input type='text' name='searchbyempname' id='searchbyid' value='' placeholder='Search..' onkeyup='ajax()' /></td>
        </tr> 
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Fathername</th>
                <th>Mothername</th>
                <th>Date of Barth</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Branch</th>
                <th>Role</th>
            </tr>";
            $status=allEmployees();
            while($row = mysqli_fetch_assoc($status)){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['fathername']}</td>
                <td>{$row['mothername']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['branch']}</td>
                <td>{$row['role']}</td>
            </tr>";
            }
        echo "</table>"
        ?>
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
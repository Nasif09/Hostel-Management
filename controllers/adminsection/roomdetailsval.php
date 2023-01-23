<?php
    $name = $_REQUEST['name'];
    $name1=$name.'%';
    require_once '../../models/branchmodel.php';
    $results=showallbranchbyname($name1);
    $rows=mysqli_num_rows($results);
        if($rows>0){
            echo "<table border='1'><tr>
                <th>ID</th>
                <th>Branch Name</th>
                <th>Address</th>
                <th>Branch Type</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";
            while($row = mysqli_fetch_assoc($results)){
                echo "<tr><td>". $row['id']."</td><td>". $row['branchname']."</td><td>". $row['address']."</td><td>". $row['type']."</td><td><a href='updateinformationedit.php?id={$row['id']}"."'>edit</a></td><td><a href='updateinformation.php?id={$row['id']}"."'>delete</a></td></tr>";
            }
            echo "</tabel>";
        }
        else{
            echo "No Branch added yet...";
        }
?>
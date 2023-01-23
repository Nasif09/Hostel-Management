<?php
require_once '../../models/packagemodel.php';
    $name=$_REQUEST['name'];
    $rows=showpackages($name);
    $row=mysqli_fetch_assoc($rows);
    echo "<select name='package'><option value=''>Select a Package</option>";          
    if($row['economy']=="Yes") echo "<option value='economy'>Economy</option>";
    if($row['businessclass']=="Yes")echo "<option value='businessclass'>Business</option>";
    if($row['firstclass']=="Yes")echo "<option value='firstclass'>firstclass</option>";
    echo "</select>"; 
?>
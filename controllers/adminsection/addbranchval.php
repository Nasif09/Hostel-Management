<?php
    require_once '../../models/branchmodel.php';
    require_once '../../models/packagemodel.php';
    $name = $_POST["branchname"];
    $house= $_POST["houseno"];
    $roadno= $_POST["roadno"];
    $city = $_POST["city"];
    $area = $_POST["area"];
    $branchtype=$_POST["branchtype"];
    if(!isset($_POST['economy'])) $economy="No";
    else $economy=$_POST['economy'];
    if(!isset($_POST['businessclass'])) $businessclass="No";
    else $businessclass=$_POST['businessclass'];
    if(!isset($_POST['firstclass'])) $firstclass="No";
    else $firstclass=$_POST['firstclass'];
    //echo "$economy->$businessclass->$firstclass";
    $address="House#$house, Road#$roadno, $area, $city";
    $id=searchforbranchid();
    //echo $id;
    $branch=['id'=>$id,'name'=>$name,'address'=>$address,'economy'=>$economy,'businessclass'=>$businessclass,'firstclass'=>$firstclass,'type'=>$branchtype];
    $status=addbranch($branch);
    $status2=addpackage($branch);

    if(isset($_SESSION['insertbranch']) && isset($_SESSION['insertpackage'])){
        $_SESSION['insertbranch']="Branch added successfully";
        header('location: ../../views/admindashboards/addnewbranch.php');
    }
    else{
        $_SESSION['insertbrancherr']="Branch couldnot added";
        header('location: ../../views/admindashboards/addnewbranch.php');
    }
?>
<?php
    // session_start();
    require_once('../../models/facilityModel.php');

    $name = $_POST['name'];
    // $id = $_POST['id'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];
    
    if(isset($_POST['availability'])){
        $receive = "Yes";
    }else{
        $receive = "No";
    }
    
    if($name =="" || $price == ""){
        header('location: ../../views/managerdashboards/addfacility.php?err=null');
    }else { 
        $user = ['name'=>$name, 'price'=> $price, 'receive'=> $receive];
        $status = insertFacility($user);
        if($status){
            //echo '<script>alert("facility '.$name.' added successfully");</script>';
            ?>
            <script>
                if(!alert("facility <?php echo $name; ?> added successfully"))
                {
                    window.location.href = '../../views/managerdashboards/addfacility.php';
                }
            </script>
            <?php
        }else{
            ?>
            <script>
                if(!alert("facility <?php echo $name; ?> added successfully"))
                {
                    window.location.href = '../../views/managerdashboards/addfacility.php';
                }
            </script>
            <?php
        }
        
    }

?>
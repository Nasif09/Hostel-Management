<?php
    session_start();
    $name=$_SESSION['user']['username'].".png";
    $src= $_FILES['image']['tmp_name'];
    $dst = "../../assets/profilepics/".$_SESSION['name'].($name);

    if(move_uploaded_file($src, $dst)){
        $_SESSION['profilepic']='Profile picture uploaded';
        header('location: ../../views/updateinfo.php');
    }else{
        echo "Error";
    }
?>
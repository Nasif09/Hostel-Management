<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    // if(isset($_SESSION['admopterr'])){
    //     echo $_SESSION['admopterr'];
    // }
?>
<head>
<meta name="viewport" content="with=device-widthm, initial-scale=1.0">
<title>Public Home</title>
<link rel="stylesheet" href="cookerStyle.css">
</head>
<body>
    <section class="header">
    <div>
        <nav>
        <a class="logo" href="cooker.php"><img src="../../assets/image/Logo.png" height="70" width="70"></a>
        <div class="nav-links">
            <ul>
                <li style="float:right"><a href="../controllers/logout.php">Logout</a></li>
            </ul>
        </div>
        </nav>
    </div>
    </section>

    <div class="cooker">
        <p>
        <center>
        <table>
            <tr>
                <td align="center" colspan="3">
                    <br>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="breakfast.php" class="availability"><h5>BREAKFAST</h5></a>
                </td>
                <td colspan="3" align="center">
                    <a href="lunch.php" class="availability"><h5>LUNCH</h5></a>
                </td>
                <td colspan="3" align="center">
                    <a href="dinner.php" class="availability"><h5>DINNER</h5></a>
                </td>
            </tr>
         </table>
        </center>
        </p>
    </div>


</body>
</html>

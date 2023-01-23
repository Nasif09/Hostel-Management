<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body onload="slider()">
    <div class="banner">
        <div class="slider">
            <img src="assets/image/ip/1.jpg" id="slideImg">
        </div>
        <div class="overlay">
                <div class="header">
                    <a class="logo" href="index.php"><img src="assets/image/Logo.png" height="70" width="70"></a>
                    <div class="nav-links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#branches">Branches</a></li>
                            <li><a href="#contactus">Contact us</a></li>
                            <li style="float:right"><a href="views/login.php">Login</a></li>
                            <li style="float:right"><a href="views/registration.php">Sign up</a></li>
                        </ul>
                    </div>
                </div>  
            <div class="content">
                <h1>Smart Hostel</h1>
                <h3>start enjoy your life with us</h3>
            </div>
            <div>
                <button type="button">Read More</button>
                <button type="button" class="btn-2">Check Availability</button>
            </div>
        </div>
    </div>


    


    <script>
        var slideImg = document.getElementById("slideImg");

        var images = new Array(
            "assets/image/ip/2.jpg",
            "assets/image/ip/3.jpg",
            "assets/image/ip/4.jpg"
        );
        var len = images.length;
        var i = 0;
        function slider(){
            if(i>len-1){
                i=0;
            }
            slideImg.src = images[i];
            i++;
            setTimeout('slider()',3000);
        }

    </script>
</body>
</html>
<?php
session_start();

if($_SESSION['p_report'] )
{
     unset($_SESSION['p_report']);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/78e6212ab3.js" crossorigin="anonymous"></script>
    <!-- favicon ko link  -->
    <link rel="shortcut icon" href="./images/logooo.png" type="image/x-icon">

    <title>Search Username </title>
    

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family:'Courier New', Courier, monospace;
            box-sizing: border-box;
        }
        .header{
            height: 100vh;
            width: 100%;
            position: relative; 
            
        }
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* background: linear-gradient(green,transparent); */
            background-color: #14A44D;
            border-bottom: 1px solid rgb(52, 255, 33);
        }
        nav h2{
            color: white;
            margin: 7px;
            padding: 10px 14px;
            font-size: 30px;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }
        .nav-links{
            padding:  2px 0;
        }
        .nav-links li{
            display: inline-block;
            margin: 0px 15px;
        }
        .nav-links li a{
            text-decoration: none;
            color: #ffffff;
            padding:  5px 0;
            position: relative;
            font-size: 21px;
            font-family: cursive;
        }
        .nav-links li a::after{
            content: '';
            background: #83ff1e;
            width: 0;
            height: 2px;
            position: absolute; 
            bottom: 0;
            left: 0;
            transition: width 0.5s;
        }
        .nav-links li a:hover::after{
            width: 100%;

        }
        .btn{
            /* background: #000000; */
            color: #fff;
            padding: 6px 7px;
            border-radius: 7px;
            cursor: pointer;
            border: 2px solid rgb(74, 255, 119);
        }
        .content{
            position: absolute;
            left: 50%;
            top: 50%;
            width: 90%;
            max-width: 900px;
            transform: translate(-50%,-50%);
            text-align: center;
            color: white;
            padding: 50px;

        }
        .content h1{
            font-size: 45px;
            font-weight: 600px;
            margin: 40px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
            -webkit-text-stroke: 1px rgb(0, 0, 0);

        }
        .content form{
            background: #fff;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            /* border: 2px solid rgb(103, 255, 103); */
        }
        .content form input{
            flex: 1;
            border: none;
            outline: none;
            padding: 0px 20px;
            font-size: 21px;
            
        }
        .content form button{
            background: green;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }
        .back-video{
            position: absolute;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;  
        }
        @media(min-aspect-ratio:    16/9)
        {
            .back-video{
                width: 100%;
                height: auto;
            }
        }
        @media(max-aspect-ratio:    16/9)
        {
            .back-video{
                width: auto;
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">

        <video autoplay loop class="back-video" muted plays-inline>
            <source src="./images/animated4.mp4" type="video/mp4">
        </video>
        <nav>
            <h2>We<i class="fa-solid fa-circle-nodes"></i>Care</h2>

            <ul class="nav-links">
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Reviews</a></li>
                <li><a href="">FAQs</a></li>
                <li class="btn"><a href="" >WelCome Mr. Doctor</a></li>
            </ul>
        </nav>

        <!-- search box  -->
        <div class="content">
            <h1>Search Username Here</h1>
            <form action="./Medi-Report.php" method="post">

                <input name="username" type="search" placeholder="&#x270e Enter Username ">
                <button type="submit" name="submit">Search</button>
            </form>
        </div>

    </div>




</body>
</html>
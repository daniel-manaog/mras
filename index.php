<?php
include('connection.php');

$sql = "UPDATE `website` SET pageview=pageview+1";
$query= mysqli_query($con,$sql);

$sql = "SELECT * FROM `website`1";
$query= mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
?>


<html>

    <title>Masikap Refrigeration and Air-conditioning Services</title>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto&display=swap" rel="stylesheet">

    </head>

    

    <style>



        * {

            margin: 0;

        }







        header {

            background: white;

            box-sizing: border-box;

            display: flex;

            justify-content: space-between;

            align-items: center;

            position: fixed;

            top: 0;

            transition: all 0.35s ease 0s;

            width: 100%;

            padding: 15px 5%;

            box-shadow: 0 5px 10px -10px black;

        }

        .nav-links {

            list-style: none;

        }

        .nav-links li a{

            font-family: 'Roboto', sans-serif;

            font-size: 18px;

            letter-spacing: 0.175em;

            color: #4D4D4D;

            text-decoration: none;

            transition: all 0.3s ease 0s;

        }

        .nav-links li a:hover {

            color: black;

        }

        .nav-links li {

            display: inline-block;

            padding: 0 25px;

        }

        .nav-links #current-page {

            font-weight: bold;

        }

        .appointment {

            font-family: 'Roboto', sans-serif;

            font-size: 18px;

            letter-spacing: 0.175em;

            color: white;

            text-decoration: none;

            background: #9830AB;

            border-radius: 0.625rem;

            padding: 15px;

            text-align: center;

            transition: all 0.3s ease 0s;

        }

        .appointment:hover {

            background-color: #591C64;

        }





        .container {

            background: linear-gradient(#DAFFBB, #C5E5FF);

            display: flex;

        }



        .imgcontainer{

            width:  100%;

            padding-top: 5.3vw;

        }



        .content {

            padding-top: 19.5vw;

            margin-left: -7vw;

            padding-bottom: 6.69vw;

        }



        .content h1 {

            font-family: 'Montserrat', sans-serif;

            font-size: 2.9rem;

            font-weight: bolder;

            letter-spacing: 0.063rem;

            line-height: 100%;

            padding-top: 0.625rem;

        }



        .content p {

            font-size: 0.938rem;

            font-family: 'Roboto', sans-serif;

            font-style: italic;

            letter-spacing: 0.125rem;

        }



        .content .button {

            display: inline-block;

            background: #9830AB;

            border-radius: 0.625rem;

            padding: 0.938rem 1.563rem;

            margin-top: 1.563rem;

            box-sizing: border-box;

            box-shadow: 0.188rem 0.5rem 1.375rem rgba(94, 28, 68, 0.15);

            text-align: center;

        }



        .button:hover {

            background-color: #591C64;

            cursor: pointer;

        }



        .content a {

            font-family: 'Montserrat';

            font-weight: 900;

            font-size: 1.25rem;

            color: white;

            letter-spacing: 0.188rem;

            text-decoration: none;

        }



        footer {

            background-color: white;

            flex-shrink: 0;

        }

        .main-content h4 {

            font-family: 'Roboto', sans-serif;

            letter-spacing: 0.175em;

        }



        .main-content {

            box-sizing: border-box;

            bottom: 0px;

            width: 100%;

            display: flex;

            flex-basis: 50%;

            justify-content: center;

            padding: 10px 20px;

        }



        .main-content p {

            font-family: 'Roboto', sans-serif;

            font-size: 15px;

            letter-spacing: 0.175em;

            color: #656565;

            margin: 5px 0 0 0;

        }



        .left-content, .mid-content, .right-content {

            padding: 0 50px;

        }



        .copyright p {

            font-family: 'Roboto', sans-serif;

            font-size: 12px;

            letter-spacing: 0.175em;

            color: #4D4D4D;

            text-align: center;

        }





    </style>



    <body>

        <header id="navbar">

            <a href="./"><img src="resources/Logo MRAS1.png" alt="Logo MRAS"></a>

            <nav>

                <ul class="nav-links">

                    <li><a href="./" id="current-page">Home</a></li>

                    <li><a href="/About.html">About</a></li>

                    <li><a href="/Services.html">Services</a></li>

                    <li><a href="/Contact-Us.html">Contact Us</a></li>

                </ul>

            </nav>

            <a href="/OnlineAppointment.html" class="appointment">Online Appointment</a>

        </header>

        <div class = "container">

            <div>

                <img class="imgcontainer" src="resources/HomePage.png" alt="Green and blue gradient of a half-circle">

            </div>

            <div class = "content">

                <p>FOR BETTER COOLING EXPERIENCE</p>



                <h1>High quality service, installation, 

                    <br>maintenance, and repair at the most 

                    <br>competitive cost</h1>

                

                <a href = "/OnlineAppointment.html" class = "button">Make An Appointment</a>

            </div>

        </div>



        <footer>

            <div class="main-content">

                <div class="left-content">

                    <h4>GOT QUESTIONS?</h4>

                    <p>Should you wish to have more information, just contact us! See <a href="#">Contact Us</a> for more details.</p>

                    <p>You can also inquire through our email <u>mras.012018@gmail.com</u>.</p>

                </div>

                <div class="mid-content">

                    <h4>WORKING HOURS</h4>

                    <p>We are open from 1:00 PM to 3:00 AM</p>

                    <h4>LOCATION</h4>

                    <p>Blk 3 Kaingin 1, Pansol, Quezon City</p>

                </div>

                <div class="right-content">

                    <h4>CALL US</h4>

                    <p>Tel. No. (632) 475-0855</p>

                </div>

            </div>

            <div class="copyright">

                <p>© 2021 Masikap Refrigeration and Air-conditioning Services (MRAS). All rights Reserved.</p>

            </div>

        </footer>



        <script type="text/javascript">

            var lastScrollTop = 0;

                navbar = document.getElementById("navbar");

            window.addEventListener("scroll", function(){

                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop){

                    navbar.style.top = "-110%";

                }

                else {

                    navbar.style.top = "0";

                }

                lastScrollTop = scrollTop;

            })

        </script>

    </body>

</html>
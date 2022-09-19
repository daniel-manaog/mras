<?php

	// Start SQL
    $url='sql209.epizy.com';
    $username='epiz_30714375';
    $password='ajEpXyA2y3qqOU';
    $conn=mysqli_connect($url,$username,$password,"epiz_30714375_admin_dashboard");
	
	if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
	
	function inject_checker ($conn, $field){
		return (htmlentities(trim(mysqli_real_escape_string($conn, $field))));
	}
	
	

	if(isset($_POST['submit_btn'])){
		echo 'Success';
		
		$lname = inject_checker($conn, strtoupper($_POST['lname']));
		$fname = inject_checker($conn, strtoupper($_POST['fname']));
		$company = inject_checker($conn, $_POST['company']);
		$hnumber = inject_checker($conn, $_POST['hnumber']);
		$street = inject_checker($conn, $_POST['street']);
		$barangay = inject_checker($conn, $_POST['barangay']);
		$city = inject_checker($conn, $_POST['city']);
		$province = inject_checker($conn, $_POST['province']);
    $landmark = inject_checker($conn, $_POST['landmark']);
		
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
				$email = inject_checker($conn, $_POST['email']);
		}
		else{
			$error_msg = 'email is invalid';
		}
		
		$cellphone = inject_checker($conn, $_POST['province']); 
		$phone = inject_checker($conn, $_POST['phone']);
		$contacttype = inject_checker($conn, $_POST['contacttype']);
		$stype = inject_checker($conn, $_POST['stype']);
		$atype = inject_checker($conn, $_POST['atype']);
		$brand = inject_checker($conn, $_POST['brand']);
    $schedule = inject_checker($conn, $_POST['date-time']);
		$concerns = inject_checker($conn, $_POST['concerns']);
		
		
		$query = " INSERT INTO online_form(LastN, FirstN, CompanyN, HouseNo, Street, Barangay, City, Province, Landmark, 
    Email, CellNo, PhoneNo, Pref, `Service Type`, `Aircon Type`, `Aircon Brand`, Schedule, `Other Concerns`)
			VALUES('$lname', '$fname', '$company', '$hnumber', '$street', '$barangay',
			'$city', '$province', '$landmark', '$email', '$cellphone', '$phone', '$contacttype',
			'$stype', '$atype', '$brand', '$schedule', '$concerns')";
		$run_query = mysqli_query($conn, $query);
		if($run_query == true){
			$msg_status = "THANK YOU FOR TRUSTING US!";
      $msg_message = "Please wait for our management to contact you to confirm your appointment.";
			echo $msg_success;
		}else{
			$msg_status = "SUBMISSION FAILED. PLEASE CONTACT THE ADMINISTRATOR.";
      $msg_message = "Unexpected Error happened, reach out to the administrator to fix the problem as soon as possible.";
			echo("Error description: " . $conn -> error);
		}
		
	}else{
		echo 'Not Allowed';
	}



	// Remove all illegal characters from email	 

	
?>

<html>
    <title>Make An Appointment | MRAS</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device - width, initial-scale = 1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style type="text/css">
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
        .nav-links .icon {
            display: none;
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
        @media screen and (max-width: 700px) {
            body header {
                background: white;
                display: block;
                text-align: center;
                top: 0;
                transition: all 0.35s ease 0s;
                box-shadow: 0 5px 10px -10px black;
            }
            .nav-links a, .appointment {
                display: none;
            }
            img {
                width: 40%;
                height: 30%;
            }
            .navbar a.icon {
                display: block;
            }
            body .main-content {
                display: block;
                text-align: center;
            }
        }
        @media screen and (max-width: 700px) {
            body .nav-links li {
                display: block;
            }
            .navbar.responsive .icon {
                position: absolute;
                top: 10%;
                right: 5%;
            }
            .navbar.responsive a {
                float: none;
                display: block;
                text-align: center;
            }
            .navbar.responsive img {
                float: none;
                display: block;
                text-align: left;
            }
        }
        .content {
            background-color: #F4F4F4;
            padding: 130px 300px 50px;
            letter-spacing: 0.175em;
            text-align: center;
        }
        .content h1 {
            font-family: 'Roboto', sans-serif;
            font-weight: bolder;
            text-align: center;
            letter-spacing: 4px;
        }
        .content .message {
            padding: 50px 0 60px 0;
        }
        .content .message p {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            text-align: justify;
            text-indent: 25px;
            letter-spacing: 3px;
            margin: 15px 0;
        }
        .content a {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: bolder;
            color: white;
            text-decoration: none;
            padding: 20px 50px;
            background: #9830AB;
            border-radius: 10px;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
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

        .main-content p, a {
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
        <header class="navbar" id="navbar">
            <a href="/index.html"><img src="resources/Logo MRAS1.png" alt="Logo MRAS"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/About.html">About</a></li>
                    <li><a href="/Services.html">Services</a></li>
                    <li><a href="/Contact-Us.html">Contact Us</a></li>
                    <li><a href="javascript:void(0);" class="icon" onclick="responsiveFunc()">
                        <i class="fa fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <a href="/OnlineAppointment.html" class="appointment">Online Appointment</a>
        </header>
        <div class="content">
            <h1 id="msg-status"><?php echo $msg_status; ?></h1>
            <div class="message">
                <p id="msg-message"><?php echo $msg_message; ?></p>
                <p>In compliance to the Republic Act 10173 - Data Privacy Act of 2012, any personal information you disclosed with us will be handled with strict confidentiality.</p>
            </div>
            <a href="/index.html" class="button">Back To Home</a>
        </div>
        <footer>
            <div class="main-content">
                <div class="left-content">
                    <h4>GOT QUESTIONS?</h4>
                    <p>Should you wish to have more information, just contact us! See <span><a href="/Contact-Us.html">Contact Us</a></span> for more details.</p>
                    <p>You can also inquire through our email <span><a href="mailto:mras.012018@gmail.com">mras.012018@gmail.com</a></span>.</p>
                </div>
                <div class="mid-content">
                    <h4>WORKING HOURS</h4>
                    <p>We are open from 12:00 AM to 12:00 PM</p>
                    <h4>LOCATION</h4>
                    <a href="https://www.google.com/maps/place/3+Kaingin+1,+Matandang+Balara,+Quezon+City,+Metro+Manila/@14.6574046,121.0849143,21z/data=!4m5!3m4!1s0x3397b9de124789a5:0x1be740620b5015b1!8m2!3d14.6574523!4d121.0849956" target="_blank" rel="noopener noreferrer">Blk 3 Kaingin 1, Pansol, Quezon City</a>
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
            function responsiveFunc() {
            var x = document.getElementById("navbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } 
                else {
                    x.className = "navbar";
                }
            }
        </script>
    </body>
</html>
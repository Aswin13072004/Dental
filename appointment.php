<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'doctor/includes/dbconnection.php';

    $name = $conn->real_escape_string($_POST['form_name']);
    $age = (int)$_POST['form_age'];
    $email = $conn->real_escape_string($_POST['form_email']);
    $phone_number = $conn->real_escape_string($_POST['form_phone']);
    $alt_phone_number = $conn->real_escape_string($_POST['form_alt_phone']);
    $appointment_date = $conn->real_escape_string($_POST['date']);
    $appointment_time = $conn->real_escape_string($_POST['time']);
    $issue = $conn->real_escape_string($_POST['issue']);
    $message = $conn->real_escape_string($_POST['form_message']);

    $sql = "INSERT INTO patient (name, age, email, phone_number, alt_phone_number, appointment_date, appointment_time, issue, message) 
            VALUES ('$name', $age, '$email', '$phone_number', '$alt_phone_number', '$appointment_date', '$appointment_time', '$issue', '$message')";

    if ($conn->query($sql) === TRUE) {
        $success = true;
    } else {
        $error = $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Appointment</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>
<body>
<div class="boxed_wrapper">
  

<!--Start Top bar area -->  
    <section class="top-bar-area">
        <div class="container">
                

             <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12"> <!-- Larger column width on LG, MD, and SM, full width on XS -->
                    <div class="logo text-center">
                        <a class="logoCenter" href="index.php">
                            <img  class="logo-image logo-image1" src="images/NewLogo1.png" width="210"  alt="Soft Smile Dental Centre logo Image">
                            <img class="logo-image logo-image2" src="images/NewLogo2.png"  width="195" alt="SINCE 1991">
                        </a>
                    </div>   
                </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"> <!-- Smaller column width on LG, MD, and SM, full width on XS -->
                <div class="makeanapp logo text-center">
                    <a class="thm-btn btn-sm bg-1" href="appointment.php"><h6>Get an appointment</h6></a> <!-- Content adjusted -->
                </div>   
            </div>
        </div>
    </div>
</section>
<!--End Top bar area -->

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="left pull-left">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li ><a href="index.php">Home</a></li>
                                <li ><a href="about.php">About Us</a></li>
                                <!--<li><a href="appointment.php">Appointment</a></li> -->
                                <li class="dropdown "><a href="Software.php">Partner <br class="NavbarBreakPoint">clinics</a>
                                    <ul>
                                        <li><a href="Software.php">Common software</a></li>
                                        <li><a href="PhoneNumber.php">Common Phone Number-Toll free number</a></li>
                                        <li><a href="Laboratory.php">Common Laboratory</a></li>
                                        <li><a href="Inventory.php">Common inventory</a></li> 
                                        <li><a href="SOP.php">Common SOP </a></li>
                                        <li><a href="Systems.php">Common systems</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="AwerenessProgram.php">Awareness <br class="NavbarBreakPoint">Programmes</a>
                                <!-- <li class="dropdown"><a href="services.php"><div class="NavSeperateLine"><div>Awareness</div><div>Programmes</div></div></a> -->
                                    <ul>
                                        <li><a href="AwerenessProgram.php">Awareness programmes</a></li>
                                        <li><a href="AwerenessProgram.php#motivationalProgrammers">Motivational programmes</a></li>
                                        <li><a href="AwerenessProgram.php#sponsorship">Partnering with local bodies</a></li>
                                        <li><a href="AwerenessProgram.php#sponsorship">volunteer programmes</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="TreatmentProcedure.php">Clinical</a>
                                    <ul>
                                        <li><a href="TreatmentProcedure.php">Treatments & Procedures</a></li>
                                        <li><a href="PreventiveMeasure.php">Preventive measures</a></li>
                                        <li><a href="HomeVisits.php">Home visits</a></li>
                                        <li><a href="MobileClinics.php">Mobile clinics</a></li>
                                        <li><a href="websiteseo.php">Website with SEO</a></li>
                                        <li><a href="SocialMedia.php">Social media engagements</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="ParaDentalCourse.php">Educational</a>
                                    <ul>
                                        <li><a href="ParaDentalCourse.php">Para dental courses</a></li>
                                        <li><a href="ParaDentalCourse.php#short_term">Short term courses</a></li>
                                        <li><a href="ParaDentalCourse.php#fellow">Fellowship programmes</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="socialservice.php">Social <br class="NavbarBreakPoint">Services</a>
                                    <ul>
                                        <li><a href="socialservice.php">Free treatments to the needy in clinics</a></li>
                                        <li><a href="socialservice.php#community">Free treatments at community level</a></li>
                                        <li><a href="socialservice.php#volunteer">volunteer programmes</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="TNTourism.php">Dental <br class="NavbarBreakPoint">Tourism</a>
                                    <ul>
                                        <li><a href="TNTourism.php">Tamil Nadu Tourism</a></li>
                                        <li><a href="TNTourism.php#education">Educational</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="Administration.php">Business <br class="NavbarBreakPoint">entity</a>
                                    <ul>
                                        <li><a href="Administration.php">Administration</a></li>
                                        <li><a href="RandD.php">Research & development</a></li>
                                        <li><a href="Customer_care.php">Customer care</a></li>
                                        <li><a href="Finance.php">Finance</a></li>
                                        <li><a href="HumanResource.php">Human Resource Development</a></li>
                                        <li><a href="MeetingResports.php">Meetings & Reporting</a></li>
                                        <li><a href="Network_Creation.php">Network creation </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="FurtherCarrrie.php">Carrier <br class="NavbarBreakPoint">guidance</a>
                                    <ul>
                                        <li><a href="FurtherCarrrie.php">Establishment will help for further carriers</a></li>
                                        <li><a href="Sponsorships.php">Sponsorships</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="opportunities.php">Employment <br class="NavbarBreakPoint">opportunities</a>
                                    <ul>
                                        <li><a href="opportunities.php">Any one can contact</a></li>
                                        <!--<li><a href="gallery-grid.php">Coordination with TNDC</a></li>
                                        <li><a href="gallery-grid.php">Tie up with private tourism operators</a></li>
                                        <li><a href="gallery-grid.php">Educational</a></li>-->
                                    </ul>
                                </li>
                                <li class="current"><a href="appointment.php">Appointment</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->     
 
<!-- Start sidebar area -->
<aside class="sidebar-area">
    <div class="container">
        <button class="sidebar-toggle" aria-label="Toggle sidebar">
            <span class="flaticon-menu"></span>
        </button>
        <div class="sidebar-contact-info">
            <ul>
                <li id="location-icon" class="sidebar-item">
                    <div class="icon-holder">
                        <span class="flaticon-signs icon" style="color: white;"></span>
                        <span class="icon-text" style="color:white;"> Avadi, Chennai</span>
                    </div>
                </li>
                <li id="email-icon" class="sidebar-item">
                    <div class="icon-holder">
                        <span class="flaticon-interface icon" style="color: white;"></span>
                        <span class="icon-text"style="color:white;"> care@softsmiledentalcentre.in</span>
                    </div>
                </li>
                <li id="hours-icon" class="sidebar-item">
                    <div class="icon-holder">
                        <span class="flaticon-clock icon" style="color: white;"></span>
                        <span class="icon-text"style="color:white;"> Weekdays: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 09.00am to 2.00pm<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;04.30pm to 08.00pm</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>
<!-- End sidebar area -->
<style>
    /* Sidebar styling */
.sidebar-area {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 270px; /* Full width for desktop view */
    background-color: #2c4ca5; /* Background color for the sidebar */
    padding: 20px; /* Padding inside the sidebar */
    border-left: 1px solid #ddd; /* Optional border */
    z-index: 1000; /* Ensures the sidebar is on top of other content */
    transition: width 0.3s; /* Smooth transition for expanding/collapsing */
}

.sidebar-toggle {
    display: none !important; /* Hidden by default */
    background: none;
    border: none;
    cursor: pointer;
    position: absolute;
    top: 20px;
    left: 10px;
    font-size: 24px; /* Adjust icon size as needed */
    color: #ddd; /* Icon color for the toggle button */
    z-index: 1100; /* Ensure toggle button is above other content */
}

.sidebar-contact-info {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-contact-info ul {
    padding: 0;
    margin: 0;
}

.sidebar-contact-info .sidebar-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    cursor: pointer; /* Change cursor to indicate clickable item */
}

.icon-holder {
    margin-right: 10px;
}

.icon {
    color: #fff !important; /* Color for the icons */
}

/* Ensure text color is white and visible */
.sidebar-content-item h3 {
    color: white !important; /* Force white color for text */
}

/* Hide the text content by default */
.sidebar-content-item {
    display: none;
    z-index: 1000; /* Ensure content is above other elements */
}

/* Show the active content */
.sidebar-content-item.active {
    display: block !important; /* Force display when active */
}

/* Mobile view styling */
@media (max-width: 768px) {
    .sidebar-area {
        width: 70px; /* Width for the icon-only view */
        height: 230px;
        overflow-y: hidden; /* Hide overflow to prevent scrolling */
    }
    
    .sidebar-contact-info .sidebar-item {
        display: flex; /* Show icons on mobile */
    }
    
    .sidebar-content-item {
        display: none; /* Hide content initially */
    }
    
    .sidebar-area.expanded {
        width: 250px; /* Expanded width for mobile */
        overflow-y: auto; /* Allow scrolling when expanded */
    }

    .sidebar-toggle {
        display: block !important; /* Show the toggle button */
    }

    /* Hide text in icons for mobile view */
    .icon-text {
        display: none; /* Hide text for icons */
    }

    /* Show text when sidebar is expanded */
    .sidebar-area.expanded .icon-text {
        display: inline; /* Show text for icons when expanded */
    }
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebarArea = document.querySelector('.sidebar-area');
    
    // Toggle sidebar expand/collapse on mobile
    sidebarToggle.addEventListener('click', function() {
        sidebarArea.classList.toggle('expanded');
    });
});

</script>  

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(./images/Contact/ContactCropped.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left pull-left">
                    <div class="title">
                        <h1>Appointment</h1>
                    </div>
                </div>
                <div class="right pull-right">
                    <ul>
                        <li><i class="fa fa-home home" aria-hidden="true"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Appointment</li>
                    </ul> 
                </div>    
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->  

<!--Start appointment area-->
<section class="appointment-page contact-area" style="color: black;">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Get an appointment</h1>
                <span class="border"></span>
                <div class="text-box">
                    <p>Select your prefer specialist after select the dental service then, the calendar is going to<br> be enable to select your appointment.</p>
                </div>
            </div>
            <div class="row">
                <div class="appointment-box" style="color: black ;">
                    <div class="col-md-8">
                        <div class="form">
                            <form id="appointment-form" name="appointment-form" action="appointment.php" method="post" style="color: black;">
                                <div class="row" style="color: black;">
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="form_name" placeholder="Patients Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="form_age" placeholder="Patients age" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="email" name="form_email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" placeholder="Phone number" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="form_alt_phone" placeholder="Alternate phone Number" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="input-box">

                                            <input type="date" name="date" placeholder="Appointment Date" >
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="time" placeholder="Time">
                                            <div class="icon-box">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <select class="selectmenu" name="issue">
                                                <option selected="selected">Select the issue</option>
                                                <option>Tooth Decay (Cavities)</option>
                                                <option>Gum disease (Periodontal disease)</option>
                                                <option>Tooth sensitivity</option>
                                                <option>Tooth erosion</option>
                                                <option>Tooth grinding</option>
                                                <option>Cracked or Broken teeth</option>
                                                <option>Tooth infection</option>
                                                <option>Oral cancer</option>
                                                <option>Misaligned tooth</option>
                                                <option>Impacted teeth</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="thm-btn bg-1" type="submit">submit</button>   
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <div class="title">
                                <h2>Quick Contact</h2>
                            </div>
                            <p>If you have any questions simply use the following contact details.</p>
                            <ul class="contact-info-list">
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-pin"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5><span>Address:</span> Avadi,Chennai</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5><span>Phone:</span><a href="tel:+917823949383">78239 49383</a> &<br><a href="tel:044-26372500">044-26372500</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-interface"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5><span>Email:</span> <a href="mailto:care@softsmiledentalcentre.in">care@softsmiledentalcentre.in</a> </h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-clock"></span>
                                    </div>
                                    <div class="text-holder" style="color: black;">
                                        <h5><span>Opening Time:</span><br> Mon - Sat: 09.00am to 02.00pm <br> Sunday: Based on appointments </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

<!--End appointment area-->

<!--Start about us area-->
<section class="about-us-area choose-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Why Choose Us</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="right-content choose-carousel">
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-social"></span>
                        </div>
                        <div class="text">
                            <h3>Quality Doctors</h3>
                            <p>"Trust your smile to the hands of quality dental experts. Experience the difference with our skilled team!"</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-edit"></span>
                        </div>
                        <div class="text">
                            <h3>Free Checkup</h3>
                            <p>"Don't let finances stand in the way of your oral health. Take advantage of our free dental check-up offer today!"</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-book"></span>
                        </div>
                        <div class="text">
                            <h3>Affordable Clinic</h3>
                            <p>"Quality dental care at prices you can afford. Visit our clinic for budget-friendly treatments without compromising on excellence."</p>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item">
                        <div class="icon-holder">
                            <span class="flaticon-tool"></span>
                        </div>
                        <div class="text">
                            <h3>Latest Technology</h3>
                            <p>"Step into the future of dentistry at our clinic, where we harness the power of the latest technology to provide you with the most advanced care possible."</p>
                        </div>
                    </div>
                    <!--End single item-->
                </div>    
            </div>  
        </div>
    </div>
</section>
<!--End about us area-->  



<!--Start Google map area-->
<section class="google-map-area">
    <!-- <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="44.529688" 
        data-map-lng="-72.933009" 
        data-icon-path="images/resources/map-marker.png" 
        data-map-title="Brooklyn, New York, United Kingdom" 
        data-map-zoom="12" 
        data-markers='{
            "marker-1": [44.529688, -72.933009, "<h4>Head Office</h4><p>44/108 Brooklyn, UK</p>"],
            "marker-2": [44.231172, -76.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"]
        }'>

    </div> -->
    <div style="display: flex; align-items: center;justify-content: center; padding: 55px ;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62168.98988206905!2d80.04376513525236!3d13.126918972623086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263682601dd29%3A0x7ef76b7a6755a950!2sSoft%20Smile%20Dental%20Cetre!5e0!3m2!1sen!2sin!4v1714655506162!5m2!1sen!2sin" width="1114" height="366" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</section>

<!--End Google map area-->     


<!--Start footer area-->  

<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-btm">
                    <div class="title">
                        <h3>About Us</h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                       <p>At Soft Smile Dental Centre, we believe that your smile is a reflection of your overall health and happiness. That's why we're dedicated to providing you with the highest quality dental care in a warm, welcoming environment.

                                <br>
                                <br>
                                <b style="font-size: 15px;">Oral health Is A Gate Way For General Health.</b>
                            </p>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->

            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget martop">
                    <div class="title">
                        <h3>Contact Us</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin map-marker"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Avadi,Chennai</h5>
                            </div>
                            <div class="text-holder">
                                <h5>600 054</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h5>78239 49383</h5>
                            </div>
                            <div class="text-holder">
                                <h5>044-26372500</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5>care@softsmiledentalcentre.in</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                    <h5>Mon - Saturday: 09.00am to 2.00pm   and   <br>
                                         &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;  04.30pm to 08.00pm</h5>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget margintop50">
                    <div class="title">
                        <h3>Latest Works</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="latest-work-list">
                        <li>
                            <div class="image-holder">
                                <img src="images/latest_works/1.png" alt="Awesome Image">
                                <!-- <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <div class="image-holder">
                                <img src="images/latest_works/2.png" alt="Awesome Image">
                                <!-- <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <div class="image-holder">
                                <img src="images/latest_works/3.png" alt="Awesome Image">
                                <!-- <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
<div class="image-holder">
                                <img src="images/latest_works/4.png" alt="Awesome Image">
                                <!-- <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <div class="image-holder">
                                <img src="images/latest_works/5.png" alt="Awesome Image">
                                <!-- <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <div class="image-holder">
                                <img src="images/latest_works/6.png" alt="Awesome Image">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
           
        </div>
        <br>
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <center> <h1 style="font-size: 50px;"> Be smart !  Be healthy ! </h1></center>
                       
                    </div>
                    </div>
        </div>
    </div>
</footer>     
<!--End footer area-->

<!--Start footer bottom area--> 
<section class="footer-bottom-area">       
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="copyright-text pull-right">
                        <p>Copyrights © 2024 All Rights Reserved by <a href="#">SoftSmileDentalCentre.</a></p> 
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section> 
<!--End footer bottom area-->

</div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery.js"></script>
<!-- Wow Script -->
<script src="js/wow.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
                            


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>

<!-- popup -->
<script>
        <?php if ($success): ?>
            $(document).ready(function() {
                alert('Appointment successfully booked!');
            });
        <?php endif; ?>
    </script>





</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home </title>

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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .popup-image {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: white;
            padding: 20px;
            text-align: center;
            overflow: hidden;
        }
        .scrollable-container {
            max-height: 80vh;
            overflow-y: auto;
            padding-right: 10px; /* To ensure scrollbar doesn't overlay content */
        }
        .scrollable-container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 999;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="overlay"></div>
    <div class="popup-image">
        <button class="close-btn">&times;</button>
        <div class="scrollable-container">
            <img src="images/Image 1.jpeg" alt="Popup Image 1">
            <img src="images/Image 2.jpeg" alt="Popup Image 2">
            <img src="images/GIVE US YOUR VALUABLE REVIEW.png" alt="">
        </div>
    </div>
   

    <div class="boxed_wrapper">  

    <!--Start Top bar area -->  
    <section class="top-bar-area">
        <div class="container">
                

            <!-- <div class="row">
                <center>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <a href="index.php"><img  src="images/logo-255x50.png" width="210"  alt="Soft Smile Dental Centre logo Image"></a>
                </div></center>
            </div> -->

            <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12"> <!-- Larger column width on LG, MD, and SM, full width on XS -->
                    <div class="logo text-center">
                        <a class="logoCenter" href="index.php">
                            <img  class="logo-image logo-image1" src="images/NewLogo1.png" width="210"  alt="Soft Smile Dental Centre logo Image">
                            <img class="logo-image logo-image2" src="images/NewLogo2.png"  width="195" alt="SINCE 1991">
                        </a>
                    </div>   
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"> <!-- Smaller column width on LG, MD, and SM, full width on XS -->
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
                                <ul class="navigation clearfix" >
                                    <li class="current"><a href="index.php">Home</a></li>
                                    <li ><a href="about.php">About Us</a></li>
                                    <!-- <li><a href="appointment.php">Appointment</a></li> -->
                                    <li class="dropdown current"><a href="Software.php">Partner <br class="NavbarBreakPoint">clinics</a>
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
                                    <li class="dropdown"><a href="TreatmentProcedure.php">Clinical</a>
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
                                    <li class="dropdown"><a href="socialservice.php">Social<br class="NavbarBreakPoint"> Services</a>
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
                                    <li><a href="appointment.php">Appointment</a></li>
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
    
    <!--Start header area-->
    <header class="mainmenu-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-contact-info">
                        <ul>
                            <div class="col-lg-4 col-md-4">
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-signs"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Avadi, Chennai</h3>
                                </div>
                            </li>
                            </div>
                            <div class="col-lg-4 col-md-4">
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-interface"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>softsmiledentalcentre@ssdc.in</h3>
                                </div>
                            </li>
                            </div>
                            <div class="col-lg-4 col-md-4">
                            <li>
                                <div class="iocn-holder">
                                    <span class="flaticon-clock"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Weekdays: 09.00am to 2.00pm and   <br>
                                         &emsp; &emsp; &emsp; &emsp;   04.30pm to 08.00pm</h3>
                                </div>
                            </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>  
    <!--End header area-->      



    <!--Start rev slider wrapper-->     
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="random">
                    <img src="./images/CommonSystem/pexels-shvetsa-3845806.jpg"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    <!-- <img src="PageImages/Home page/IMG-20240424-WA0037.jpg"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" > -->
                    
                    <div class="tp-caption  tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="165" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="1500">
                        <div class="slide-content-box content-box mar-lft">
                            <h3 style="color: white; font-weight: bold;">Welcome to the Soft Smile Dentalcare</h3>
                            <h1 style="color: white;">Your smiles with us</h1>
                            <p style="color: white;font-weight: bold;">"Love your teeth, and they'll love you back.<br> Make dental care a priority!"</p>
                            <!-- <div class="button">
                            <a class="thm-btn" href="#">Read More</a>       
                            </div> -->
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="right" data-hoffset="0" 
                        data-y="bottom" data-voffset="0" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2900">
                        <div class="slide-content-box">
                            <div class="img-holder">  
                                <img src="PageImages/Home page/IMG-20240424-WA0037.jpg" alt="Awesome Image">   
                                <!-- <img src="images/slides/slide-1-img.png" alt="Awesome Image">    -->
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="./images/about/index.jpg"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                    <div class="tp-caption  tp-resizeme" 
                        data-x="right" data-hoffset="0" 
                        data-y="top" data-voffset="165" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="700">
                        <div class="slide-content-box content-box">
                            <h3 style="color: white;font-weight: bold;">World Class Treatments With</h3>
                            <h1 style="color: white;">Quality & Affortable</h1>
                            <p style="color: white;font-weight: bold;">"A smile is your best accessory,<br> so let's keep it sparkling with regular dental care!"</p>
                            <div class="button">
                                <!--<a class="thm-btn bgclr-1" href="#">Special Offers</a>  -->     
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="bottom" data-voffset="0" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2900">
                        <div class="slide-content-box">
                            <div class="img-holder">  
                                <img src="PageImages/Home page/IMG-20240424-WA0038.jpg" alt="Awesome Image">   
                                <!-- <img src="images/slides/slide-2-img.png" alt="Awesome Image">    -->
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="random">
                    <img src="./images/about/index.jpg"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                    <div class="tp-caption  tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="165" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="1500">
                        <div class="slide-content-box content-box mar-lft">
                            <h3 style="color: white;font-weight: bold;">Regain your confidence with</h3>
                            <h1  style="color: white;">Dental Implants</h1>
                            <p style="color: white;font-weight: bold;">"Your smile is your signature.<br> Keep it shining with proper dental care."</p>
                            <!-- <div class="button">
                                <a class="thm-btn bgclr-1" href="#">Meet Dentist</a>       
                            </div> -->
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme" 
                        data-x="right" data-hoffset="0" 
                        data-y="bottom" data-voffset="0" 
                        data-transform_idle="o:1;"                         
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        data-start="2900">
                        <div class="slide-content-box">
                            <div class="img-holder">  
                                <img src="PageImages/Home page/IMG-20240424-WA0036.jpg" alt="Awesome Image">   
                                <!-- <img src="images/slides/slide-3-img.png" alt="Awesome Image">    -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->
        
    <!--Start welcome area-->
    <section class="welcome-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Welcome to Soft Smile Dental Centre</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-medical-6"></span>
                        </div>
                        <div class="text-holder">
                            <h3>General & Cosmetic</h3>
                            <p>The master-builder of human happiness one reject, dislikes avoid all our pleasure itself because it is pleasure pursue.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-medical-8"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Dental Surgeries</h3>
                            <p>Pleasure and praising pain was born will give a complete account the systems expound eachings of great explorer.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="col-md-4">
                    <div class="single-item text-center">
                        <div class="icon-holder">
                            <span class="flaticon-factory"></span>
                        </div>
                        <div class="text-holder">
                            <h3>Laser Treatments</h3>
                            <p>There anyone who loves or pursues desire too obtain pain of itself, because it is pain, but occasionally sed circumstances.</p>
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End welcome area-->

    <!--Start special services area-->
    <!--<section class="special-services-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top">
                        <div class="sec-title pull-left">
                            <h1>Special Services</h1>
                            <span class="border"></span>
                            <div class="text-box">
                                <h3>Affortable and Quality Dental Care</h3>
                                <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
                            </div>
                        </div>
                        <div class="icon-box pull-right">
                            <img src="images/services/icon.png" alt="Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="service-carousel">
                        <Start single item>
                        <div class="single-service-item text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                            <div class="img-holder">
                                <img src="images/services/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p>Expound the actual teachings the great explorer of the truth, the master  builder of human happiness with smile.</p>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-medical-2"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="#"><h3>Root Canel</h3></a>
                            </div>
                        </div>
                        <!--End single item>
                        <!--Start single item>
                        <div class="single-service-item text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                            <div class="img-holder">
                                <img src="images/services/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p>Expound the actual teachings the great explorer of the truth, the master  builder of human happiness with smile.</p>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-medical-3"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="#"><h3>Clips & Braces</h3></a>
                            </div>
                        </div>
                        <!--End single item>
                        <!--Start single item>
                        <div class="single-service-item text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                            <div class="img-holder">
                                <img src="images/services/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p>Expound the actual teachings the great explorer of the truth, the master  builder of human happiness with smile.</p>
                                            <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>    
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon">
                                        <span class="flaticon-medical-4"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="#"><h3>Dental Implant</h3></a>
                            </div>
                        </div>
                        <!--End single item->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End special services area-->

    <!--Start appoinment area-->
    <!--section class="appoinment-area" style="background-image:url(images/resources/appoinment-bg.jpg);">
        <div class="container inner-content">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="img-holder">
                        <img src="images/resources/appoinment.png" alt="Awesome Image">
                    </div>    
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="appoinment">
                        <div class="sec-title">
                            <h1>Get an appointment</h1>
                            <span class="border"></span>
                            <div class="text-box">
                                <p>We don’t want you to think what is the best for you. We know what it is and will make everything to help.</p>
                            </div>
                        </div>
                        <form class="appoinment-form">
                            <div class="row">
                                <div class="col-md-6">   
                                    <div class="field-input">
                                        <input type="text" name="form_name" value="" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">   
                                    <div class="field-input">
                                        <input type="text" name="form_phnnumber" value="" placeholder="Ph Num" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">   
                                    <div class="field-input">
                                        <input type="text" name="date" placeholder="Date" id="datepicker">
                                        <div class="icon-box">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">   
                                    <div class="field-input">
                                        <input type="text" name="time" placeholder="Time">
                                        <div class="icon-box">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="thm-btn bg-1" type="submit">Get an appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End appoinment area-->

    <!--Start about us area-->
    <section class="about-us-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>About Soft Smile Dental Centre</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <img src="PageImages/Home page/IMG-20240424-WA0039.jpg" alt="Awesome Image">
                                    <!-- <img src="images/about/1.jpg" alt="Awesome Image"> -->
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <img src="PageImages/Home page/IMG-20240424-WA0040.jpg" alt="Awesome Image">
                                    <!-- <img src="images/about/2.jpg" alt="Awesome Image"> -->
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text">
                                    <p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing, medical, recreational vehicle, and transportation sectors. multidisciplinary team of engineering experts.</p>
                                    <p class="mar-top">Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain.</p>
                                    <div class="button">
                                        <a class="thm-btn bg-1" href="appointment.php">Get an Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-social"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Quality Doctors</h3>
                                        <p>Experience excellence with our quality doctors.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-edit"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Free Checkup</h3>
                                        <p>Enjoy a complimentary dental check-up on us! Because your smile matters.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-book"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Affordable Clinic</h3>
                                        <p>Experience quality care without breaking the bank at Soft Smile Dental Centre.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-tool"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Latest Technology</h3>
                                        <p>Advanced tech, better smiles. That's Soft Smile Dental Centre.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>    
                </div>  
                
            </div>
        </div>
    </section>
    <!--End about us area-->

    <!--Start team area-->
    <section class="team-area">
        <div class="container">
            <div class="sec-title">
                <h1>Meet Our Dentist</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="team-carousel">
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. N. Elangovan</h3>
                                <span>Endodontist</span>
                                <p>Founder and Managing Executive</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div> 
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            
                            <div class="text-holder text-center">
                                <h3>Dr. T. Srinivasan</h3>
                                <span>Orthodontist</span>
                                <p>Chief, Team of Experts – general</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div> 
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. A. M.Anandhi Naraynan</h3>
                                <span>Periodentist</span>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div> 
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Mr. N. Elavarasan</h3>
                                <span>Senior Advocate,High Court, Chennai.</span>
                                <p>Chief, Team of Experts – Legal</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div> 
                        <!--End single team member-->
                        <!--Start single team member-->
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. G. Satheesh</h3>
                                <span>Oral & Facio Maxillary Surgeon</span>
                                <p>Team of Experts</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. P. Praveena</h3>
                                <span>Oral & Dental surgeon</span>
                                <p>Team of Experts</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. E. Aswin</h3>
                                <span>General Medical Practitioner</span>
                                <p>Team of Experts</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Dr. Ilakkia</h3>
                                <span>General Dentist </span>
                                <p>In charge, Operations</p>
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Mrs. J. Radha Salomi</h3>
                                <span>In charge, Front office</span>
                                <!-- <p>In charge, Front office</p> -->
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <div class="single-team-member">
                            <div class="img-holder">
                                <!-- <img src="PageImages/Dentist/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpeg" alt="Awesome Image"> -->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content"></div>
                                    </div>
                                </div>
                                <!--ul class="member-social-info">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul-->
                            </div>
                            <div class="text-holder text-center">
                                <h3>Mrs. Parimala</h3>
                                <span>In charge, Maintenance</span>
                                <!-- <p>In charge, Maintenance</p> -->
                                <span class="border"></span>
                                <!--a href="#">View Profile<i class="fa fa-angle-right" aria-hidden="true"></i></a-->
                            </div>    
                        </div>
                        <!--End single team member-->
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--End team area-->

    <!--Start newsletter area-->
    <!--section class="newsletter-area" style="background-image:url(images/resources/newsletter-bg.jpg);">
        <div class="container">
            <div class="sec-title center text-center">
                <h1>Subscribe for Offers, Coupons and Deals</h1>
                <p>We list all these discount coupons, deals and offers on various treatments. Get the latest and up-to-date coupons & cashback offers</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <form class="newsletter-form">
                            <div class="row">
                                <div class="col-md-3">   
                                    <div class="field-input">
                                        <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">   
                                    <div class="field-input">
                                        <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">   
                                    <div class="field-input">
                                        <input type="text" name="form_phn" value="" placeholder="Ph Num" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="#" type="submit">Subscibe Us</button>
                                </div>
                            </div>
                        </form>    
                    </div>    
                </div>
            </div>
        </div>
    </section>     
    <!--End newsletter area-->  

<!--     
    <section>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <a href="index.php"><img  src="images/logo-255x50.png" width="210"  alt="Soft Smile Dental Centre logo Image"></a>
                </div>
            </div>
    </section> -->
    <!--End Brand area-->        



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
                                <b style="font-size: 15px;">Oral health Is A Gate Way For General Health. 
</b>
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
                                    <h5>softsmiledentalcentre@ssdc.in</h5>
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
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               


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
<script>

    window.addEventListener('load', function() {
        document.querySelector('.logo-image1').classList.add('animate');
        document.querySelector('.logo-image2').classList.add('animate');
    });



    let popupShown = false;

    document.addEventListener('scroll', function() {
        if (popupShown) return;

        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var documentHeight = document.body.scrollHeight;

        // Adjust the scroll position at which the popup appears (20% of the page)
        if (scrollPosition > (documentHeight - windowHeight) * 0.2) {
            document.querySelector('.overlay').style.display = 'block';
            document.querySelector('.popup-image').style.display = 'block';
            popupShown = true;  // Ensure the popup only shows once
        }
    });

    // Function to close the popup
    function closePopup() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.popup-image').style.display = 'none';
    }

    // Close the popup when clicking on the overlay or close button
    document.querySelector('.overlay').addEventListener('click', closePopup);
    document.querySelector('.close-btn').addEventListener('click', closePopup);
</script>




</body>
</html>
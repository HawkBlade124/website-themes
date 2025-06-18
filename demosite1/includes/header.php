<html>
    <head>
        <title>HTML Theme</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
        <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js" integrity="sha256-9zljDKpE/mQxmaR4V2cGVaQ7arF3CcXxarvgr7Sj8Uc=" crossorigin="anonymous"></script>       
        <link rel="stylesheet" href="/includes/css/master.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script src="/includes/js/master.js"></script>
        <!-- Your FontAwesome Kit -->
        <script src="https://kit.fontawesome.com/a4689790f6.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="mobileMenu" class="d-flex">
            <div id="overlay"></div>
            <div id="mobileMenuRight" class="d-flex flex-column">            
                <div class="mobileMenuHeader w-100 d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img src="images/header-logo.png" alt="Logo">
                    </div>
                    <div id="closeMobileMenu" class="d-flex justify-content-end align-items-center">
                        <i class="closeMobileMenu fa-solid fa-xmark"></i>                
                    </div>
                </div>
                <nav class="mobileNavbar w-100 d-flex justify-content-center">
                    <ul id="mobileNavlist" class="d-flex flex-column align-items-center">
                        <li class="mobileNavlistLink"><div class="innerMobileNavLink"><a href="/"> Home</a><i class="fa-regular fa-house"></i></div></li>
                        <li class="mobileNavlistLink">
                            <div class="dropClick"><a href="menu.php">Pages </a><i class="fa-regular fa-chevron-down"></i></div>
                            <ul class="mobileDropDown">
                                <li><a href="menu.php">Menu</a></li>
                                <li><a href="about.php">About Us</a></li>                           
                                <li><a href="contact.php">Contact</a></li>   
                                <li><a href="404.php">404</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="bottomMenu" class="w-100 d-flex justify-content-center align-items-start flex-column">                
                    <address class="d-flex flex-column align-items-start">
                        <span><i class="fa-light fa-phone"></i><a href="#"> 123-456-7890</a></span>
                        <span><i class="fa-light fa-location-dot"></i><a href="#"> 1234 Street Name, City, State, 12345</a></span>
                        <span><i class="fa-light fa-envelope"></i><a href="#"> your-email@domain.com</a></span>
                        <span><i class="fa-light fa-clock"></i><a href="#"> Mon - Fri: 9am - 5pm</a></span>
                    </address>
                </div>
            </div>
        </div>
        <div id="topHeader">
            <div class="wrapperWidth d-flex justify-content-between align-items-center">                
                <div class="headerLeft d-flex">
                    <h1>Your Message here</h1>
                </div>
                <div id="rightSmallHead" class="d-flex justify-content-end align-items-center">
                    <address class="d-flex align-items-center">
                        <span><i class="fa-solid fa-phone"></i><a href="#"> 123-456-7890</a></span>
                        <span id="headerAddress"><i class="fa-solid fa-location-dot"></i><a href="#"> 1234 Street Name, City, State, 12345</a></span>
                    </address>
                    <div class="socialMedia d-flex align-items-center">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <header class="d-flex align-items-center justify-content-between box-sizing">
            <div id="mainDesktopMenu" class="wrapperWidth d-flex justify-content-between align-items-center w-100">
                <a href="/">
                    <div class="logo w-100">                    
                        <img src="images/header-logo.png" alt="Logo">
                    </div>
                </a>
                <nav class="navbar w-100 d-flex justify-content-end">
                    <ul id="navlist" class="d-flex align-items-center">
                        <li class="navlistLink"><a href="/"><i class="fa-regular fa-house" aria-hidden="true"></i> Home</a></li>
                        <li class="navlistLink">
                            <a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="menu.php">Menu</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="404.php">404</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="hamburgerWrapperMobile">
                    <i class="openMobileMenu fa-solid fa-bars"></i>
                </div>
            </div>
        </header>
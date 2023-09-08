<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>Mash Appliances</title>

    <!-- Stylesheets -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->

    <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->

    <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

    <link href="css/style.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">



    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!--Color Switcher Mockup-->

    <link href="css/color-switcher-design.css" rel="stylesheet">



    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>
<style>
    .main-menu .navigation>li {
    position: relative;
    margin-right: 48px;
    -webkit-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}
</style>


<body>



<div class="page-wrapper">


    <header class="main-header header-style-two">



       

        <div class="header-top">

            <div class="auto-container">

                <div class="inner-container">

                    <div class="top-left">

                        {{-- <ul class="contact-list-two">

                            <li><strong>Address</strong> 203 Madison Ave, NY, USA </li>

                            <li><strong>Timeing</strong> Monday - Friday 9am - 6pm </li>

                        </ul> --}}

                    </div>



                    <div class="top-right">

                        <ul class="social-icon-three">

                            <li><a href="#"><span class="fab fa-dribbble"></span></a></li>

                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>

                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

       

        <div class="header-lower">

            <div class="auto-container">    

                
                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo"><a href="{{url('/')}}"><img src="images/xyxy-removebg-preview.png" alt="" title=""></a></div>

                    </div>



                    <div class="nav-outer">
                        <div>

                        <nav class="main-menu navbar-expand-md">

                            <div class="navbar-header">

                                
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                            </div>

                            

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

                                <ul class="navigation clearfix">

                                    <li class=" "><a href="index.html">Home</a></li>

                                    <li class=""><a href="about.html">About</a></li>

                                   

                                    <li class=""><a href="shop.html">Shop</a></li>

                                    <li class=""><a href="gallery.html">Gallery</a></li>

                                    <li class=""><a href="blog.html">Blog</a></li>

                                    <li><a href="contact.html">Contact us</a></li>

                                </ul>

                            </div>

                        </nav>

                        

                        <!-- Main Menu End-->

                        {{-- <div class="outer-box clearfix">

                            

                            <div class="search-box-btn search-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                            

                            

                           <div class="btn-box">

                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-chair"></i> Book Ticket</span></a>

                            </div> 

                            

                            <button class="nav-toggler"><i class="flaticon flaticon-menu-2"></i></button>



                        </div> --}}

                    </div>

                </div>

            </div>

        </div>



        <!-- Sticky Header  -->

        <div class="sticky-header">

            <div class="auto-container">            



                <div class="main-box">

                    <div class="logo-box">

                        <div class="logo"><a href="index.html"><img src="images/xyxy-removebg-preview.png" alt="" title=""></a></div>

                        <div class="upper-right">

                            {{-- <div class="search-box">

                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>

                            </div> --}}

                            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>

                        </div>

                    </div>

                    

                    <!--Keep This Empty / Menu will come through Javascript-->

                </div>

            </div>

        </div><!-- End Sticky Menu -->



        <!-- Mobile Header -->

        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/xyxy-removebg-preview.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <div class="outer-box" style="margin-left: 120px;">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                </div>
            </div>
        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>

            

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="upper-box">

                    <div class="nav-logo"><a href="index.html"><img src="images/xyxy-removebg-preview.png" alt="" title=""></a></div>

                    <div class="close-btn"><i class="icon flaticon-close"></i></div>

                </div>



                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>



                {{-- <ul class="contact-list-one">

                    <li><i class="flaticon-location"></i> 203 Madison Ave, NY, USA <strong>Address</strong></li>

                    <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 6pm <strong>Timeing</strong></li>

                    <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">envato@gmail.com</a> <strong>Mail to us</strong></li>

                </ul> --}}



                <ul class="social-links">

                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>

                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>

                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>

                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>

                </ul>

            </nav>

        </div>



        <!-- Header Search -->

        <div class="search-popup">

            <button class="close-search"><i class="flaticon-close"></i></button>

            <form method="post" action="https://themecraze.net/html/volia/blog.html">

                <div class="form-group">

                    <input type="search" name="search-field" value="" placeholder="Search" required="">

                    <button type="submit"><i class="fa fa-search"></i></button>

                </div>

            </form>

        </div>

        <!-- End Header Search -->



    </header>
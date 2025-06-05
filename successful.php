 <?php 

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 0);
ob_start();

// $fullname = base64_decode($_GET['nm']);
$amount =  base64_decode($_GET['am']);
$program = base64_decode($_GET['program']);

if($program == 'aws-cloud')
{
    $amount = '2000';
}
elseif($program == 'product-ownership')
{
    $amount = '2000';
}
elseif($program == 'product-management')
{
    $amount = '2500';
}
elseif($program == 'data-analysis')
{
    $amount = '3000';
}
elseif($program == 'business-analysis')
{
    $amount = '1500';
}
elseif($program == 'product-design')
{
    $amount = '1200';
}
else
{
    $amount = '2000';
}
?> 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project Lead HQ</title>
    <!-- google fonts -->
    <link
        href="http://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,600&amp;display=swap"
        rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <div class="nav-all">
                <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                    <h1><a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo1.png" alt="">
                        </a></h1>
                    <!-- <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button> -->
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <!-- <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#form">Contact</a>
                        </li>
                    </ul> -->
                        <!--/search-->
                        <!-- <button id="trigger-overlay" class="searchw3-icon me-xl-4 me-lg-3" type="button"><i class="fas fa-search"></i></button> -->
                        <!-- open/close -->
                        <!-- <div class="overlay overlay-slidedown">
                        <button type="button" class="overlay-close"><i class="fas fa-times"></i></button>
                        <nav class="w3l-formhny">
                            <form action="#" method="GET" class="d-sm-flex search-header">
                                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" required>
                                <button class="btn btn-style btn-secondary me-lg-3" type="submit">Search</button>
                            </form>
                        </nav>
                    </div> -->
                        <!--//search-->
                    </div>
                    <!-- toggle switch for light and dark theme -->
                    <div class="mobile-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <!-- <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label> -->
                                <div class="stats_info">
                                    <a href="#">info@productleadhq.com</a>
                                </div>
                                <!-- <div class="stats_info counter_grid ps-0">
                                <p class="counter">100+ </p>
                                <h3>Clients</h3>
                            </div>
                            <div class="stats_info counter_grid">
                                <p class="counter">20</p>
                                <h3>Projects</h3>
                            </div> -->

                            </div>
                        </nav>
                    </div>
                    <!-- //toggle switch for light and dark theme -->
                </nav>
            </div>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!-- main-slider -->

    <section class="form-box" id="contact">
        <div class="box-wrapper">
            <div class="content-card">
               
                <h1 class="info-text">
                Thank you for your payment of $<?php echo $amount ?>. 
</h1>
<a href="index.php">Back to homepage</a>
                



            </div>
        </div>
    </section>

    <!-- <section class="w3l-contact-main" id="contact">
        <div class="contact-infhny py-5 pb-0">
            <div class="container py-lg-3 pb-0">
                <div class="top-map">
                    <div class="map-content-9">
                        <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                            <div class="form-top1">
                                <div class="w3header-section text-center">
                                    <h6 class="title-subw3hny">Get In Touch </h6>
                                    <h3 class="title-w3l mb-0">
                                        Fill the form and send your query</h3>
                                    <p class="mb-lg-5 mb-4 text-center">We have made it easy for clients to reach us and
                                        get
                                        their solutions
                                        weaved</p>
                                </div>

                                <div class="form-top">
                                    <div class="form-top-left">
                                        <input type="text" name="w3lName" id="w3lName" placeholder="Name" required="">
                                        <input type="number" name="w3lPhone" placeholder="Your phone number" required="">
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                                        <input type="text" name="w3lSubject" id="w3lName" placeholder="Subject" required="">
                                    </div>
                                    <div class="form-top-righ">
                                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Message*" required=""></textarea>
                                    </div>
                                </div>
                                <div class="text-lg-right text-center">
                                    <button type="submit" class="btn btn-style btn-primary">Submit Now <i class="fas fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //contact-form -->
    <!-- contact-form -->
    <!-- <section class="w3l-contact-main py-5" id="contact2">
        <div class="container py-md-4 py-3">
            <div class="w3l-contact-info top-map">
                <div class="row contact-infos justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-map-marked-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Our Location</h3>
                                <p>Factorship,808 Services, #21st street, NY - 62617.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-phone-alt"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Give us a call</h3>
                                <p><a href="tel:+12 404-11-22-89">+12 404-11-22-89</a></p>
                                <p><a href="tel:+12 404-11-22-99">+12 404-11-22-99</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fas fa-envelope-open-text"></span></div>
                            <div class="text-box">
                                <h3 class="mb-2">Help Desk</h3>
                                <p> <a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#73101c1e03121d0a33141e121a1f5d101c1e"><span class="__cf_email__" data-cfemail="781b171508191601381f15191114561b1715">[email&#160;protected]</span></a></p>
                                <p> <a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#cab9bfbabaa5b8be8aada7aba3a6e4a9a5a7"><span class="__cf_email__" data-cfemail="61121411110e131521060c00080d4f020e0c">[email&#160;protected]</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--/footer-9-->
    <footer class="w3l-footer9" style="margin-top:100px;">
        <section class="footer-inner-main py-5">
            <div class="container py-md-3">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-3 sub-one-left">
                            <h6>About </h6>
                            <p class="footer-phny pe-lg-5">At ProductLead HQ, we specialize in helping ambitious
                                professionals from non-tech backgrounds (yes, even Microbiology!).</p>
                            <div class="columns-2 mt-lg-5 mt-4">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 sub-two-right">
                            <h6>What We Offer</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i>AWS Cloud Computing</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i> Product
                                        Ownership/Management</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Metal Engineering</a>
                                </li>
                                <li><a href="#gas"><i class="fas fa-angle-right"></i> Data Analysis</a>
                                </li>
                                <li><a href="#work"><i class="fas fa-angle-right"></i> Product Design (UI/UX)</a></li>


                            </ul>
                        </div>
                        <div class="col-lg-3 sub-two-right">
                            <h6>Our Links</h6>
                            <ul>

                                <li><a href="https://lsghair.com/"><i class="fas fa-angle-right"></i>LSG Hair</a>
                                </li>
                                <li><a href="https://lsgglobal.net/"><i class="fas fa-angle-right"></i> LSG Global
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-3 sub-one-left">
                            <h6>Recent Posts </h6>
                            <div class="row fposts-grid-inner mb-4">
                                <div class="col-4 fposts-grid-left ps-0">
                                    <a href="https://www.instagram.com/p/DHn6VJKtvlR/?img_index=2">
                                        <img src="assets/images/footer-img.jpg" alt=" " class="img-fluid radius-image">
                                    </a>
                                </div>
                                <div class="col-8 fposts-grid-right">
                                    <h4>
                                        <a href="https://www.instagram.com/p/DHn6VJKtvlR/?img_index=2"
                                            class="text-bl text-left">A Common Mistake Product Owners Make.</a>
                                    </h4>
                                    <p class="time"> 11 Minutes ago</p>
                                </div>
                            </div>
                            <div class="row fposts-grid-inner mb-4">
                                <div class="col-4 fposts-grid-left ps-0">
                                    <a href="https://www.instagram.com/p/DHn6VJKtvlR/?img_index=3">
                                        <img src="assets/images/footer-img2.jpg" alt=" " class="img-fluid radius-image">
                                    </a>
                                </div>
                                <div class="col-8 fposts-grid-right">
                                    <h4>
                                        <a href="https://www.instagram.com/p/DHn6VJKtvlR/?img_index=3"
                                            class="text-bl text-left">Why Though? <br> There are things to consider such
                                            as:...</a>
                                    </h4>
                                    <p class="time"> 11 Minutes ago</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="below-section mt-5">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>© 2025 Product Lead HQ. All rights reserved.</a></p>
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="#url">Privacy Policy</a>
                            </li>
                            <li><a href="#url">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>

        <script>
        let selectedRadio = null;

        document.querySelectorAll('input[type="radio"][name="program"]').forEach(radio => {
            radio.addEventListener('click', function() {
                if (selectedRadio === this) {
                    this.checked = false;
                    selectedRadio = null;
                } else {
                    selectedRadio = this;
                }
            });
        });
        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--light-box-files -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery.chocolat.js"></script>
    <script type="text/javascript ">
    //$(function() {
    //   $('.w3_agile_portfolio_grid a').Chocolat();
    // });
    </script>
    <!-- /js for portfolio lightbox -->
    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
    $('.counter').countUp();
    </script>
    <!-- //stats number counter -->
    <!-- owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
    $(document).ready(function() {
        $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                667: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    })
    </script>
    <!-- //script -->
    <!-- script for tesimonials carousel slider -->
    <script src="assets/js/owl.carousel.js"></script>

    <script>
    $(document).ready(function() {
        $("#owl-demo1").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        })
    })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- video popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
    </script>
    <!-- //video popup -->
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'948588dcbfe40016',t:'MTc0ODY4NDY4Ni4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/6fab0cec561d/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/07-12-2021/factorship-liberty-demo_Free/2009709851/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 May 2025 09:43:47 GMT -->

</html>
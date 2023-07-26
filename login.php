<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Bambo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 13:45:36 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Contact || Bambo || Responsive HTML 5 Template</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/resources/logo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/resource/logo.png icon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>
<?php

$login = 0;
$invalid = 0;
$message = "";
if (isset($_POST['submitBtn'])) {

    include 'php/databaseconnection.php';

    $email = $_POST['form_email'];
    $password = $_POST['form_password'];

    $sql = "Select * from `users` where email='$email'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = $result->fetch_assoc();

            // Compare the input password with the hashed password from the database
            if (password_verify($inputPassword, $user['password'])) {

                $login = 1;
                // session_start();
                // $_SESSION['email'] = $email;

                header('location:events.php');
            } else {
                $invalid = 1;

                header('location:login.php?error=error');
            }
        }
    } else {
        header('location:login.php?error=error');
    }
}
?>

<body>

    <div class="boxed_wrapper">

        <!--Start Preloader -->
        <!-- <div class="preloader"></div> -->
        <!--End Preloader -->

        <!--Start mainmenu area-->
        <section class="mainmenu-area stricky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 clearfix">
                        <!--Start logo-->
                        <div class="logo pull-left">
                            <a href="index.php">
                                <img src="images/resources/logo-h4.png" alt="Awesome Logo">
                            </a>
                        </div>
                        <!--End logo-->
                        <!--Start mainmenu-->
                        <nav class="main-menu pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown"><a href="#">Event</a>
                                        <ul>
                                            <li><a href="event.php">Event Proposal</a></li>
                                            <li><a href="gallery.php">Our Gallery</a></li>

                                        </ul>
                                    </li>

                                    <li class="current"><a href="login.php">login</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="register.php">Sign Up</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->
                        <!--Start mainmenu right box-->

                    </div>
                </div>
            </div>
        </section>
        <!--End mainmenu area-->

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(images/resources/im3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <h1>Welcome</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start contact area-->
        <section class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div class="title">
                                <h2>Send <span>Message Us</span></h2>
                                <p>Dont hesitate to message us. we are very responsive in message.</p>
                            </div>
                            <form class="default-form" method="post">
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Email *</label>
                                        <input type="email" name="form_email" value="" placeholder="Your E-mail*"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password *</label>
                                        <input type="password" name="form_password" value=""
                                            placeholder="Your password*" required>
                                    </div>
                                </div>

                                <?php if (isset($_GET['error']) && $_GET['error'] == "error") {
                                echo '
                                <div class="alert alert-danger mt-2" role="alert">
                <h4 class="alert-heading">Error</h4>
                <p>Please check your credentials</p>
            </div>';
                            }
                            ?>


                                <div class="row"><br>
                                    <div class="col-md-12">
                                        <button class="thm-btn bg-1" type="submit" name="submitBtn">Login</button>
                                    </div>
                                </div>

                                <hr>

                                <div class="our-info">
                                    <p>Don't have an account?</p>
                                    <a class="thm-btn bg-1" type="button" href="register.php" style="width: 100%">
                                        Sign Up
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!--End contact area-->






        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-chevron-circle-up"></span>
        </div>

        <!-- main jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Wow Script -->
        <script src="js/wow.js"></script>
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
        <!-- fancy box -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.appear.js"></script>
        <!-- isotope script-->
        <script src="js/isotope.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.bootstrap-touchspin.js"></script>
        <!-- jQuery timepicker js -->
        <script src="assets/timepicker/timePicker.js"></script>
        <!-- Bootstrap select picker js -->
        <script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
        <!-- Bootstrap bootstrap touchspin js -->
        <!-- jQuery ui js -->
        <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
        <!-- Language Switche  -->
        <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
        <!-- Html 5 light box script-->
        <script src="assets/html5lightbox/html5lightbox.js"></script>


        <!--Revolution Slider-->
        <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="js/main-slider-script.js"></script>
        <!--End Revolution Slider-->



        <!-- thm custom script -->
        <script src="js/main-slider-script.js"></script>
        <script src="js/custom.js"></script>





</body>

<!-- Mirrored from st.ourhtmldemo.com/new/evento/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 13:45:36 GMT -->

</html>
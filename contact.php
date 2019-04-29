<?php
 include('server.php');
 $usernameindex = $_SESSION['username'];

?>


<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="books.png">
    <title>Timer Agency Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- Twitter Bootstrs CSS -->
   <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css" />
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="plugins/slider/slider.css" />
    <!-- owl craousel css -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css" />
    <!-- Fancybox -->
    <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- template main css file 
          <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
    <script>
        function signUpValidation() {
            var username = document.forms["signupForm"]["username"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password1"].value;
            var repeatPassword = document.forms["signupForm"]["password2"].value;
            if (username == "") {
                alert("Name must be filled out.");
                return false;
            } else if (email == "") {
                alert("Email must be filled out.");
                return false;
            } else if (password == "") {
                alert("Password must be filled out.");
                return false;
            } else if (repeatPassword == "") {
                alert("Please repeat password.");
                return false;
            }
        }

        function loginValidation() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;
            if (username == "") {
                alert("Name must be filled out.");
                return false;
            } else if (password == "") {
                alert("Password must be filled out.");
                return false;
            }
        }
    </script>

<body>
  <!--
        ==================================================
                      Pop-up Window  Start        
        ================================================== -->
        <div id="id01" class=" modal wow fadeInUp animated" data-wow-delay=".1s">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form name="loginForm" action="contact.php" method="post" onsubmit="return loginValidation()">
                            <?php include('errors.php') ?>
                            <div class="group">
                                <label for="username" class="label">Username</label>
                                <input id="user" class="input" type="text" name="username" required>
                            </div>
                            <div class="group">
                                <label for="password" class="label">Password</label>
                                <input id="pass" class="input" type="password" name="password" required>
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label class="keep-me" for="check"><span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign In" name="login_user">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <a href="#forgot">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="sign-up-htm">
                        <form name="signupForm" action="contact.php" method="post" onsubmit="return signUpVaildation()">
                            <?php include('errors.php') ?>
                            <div class="group">
                                <label for="username" class="label">Username</label>
                                <input id="user" class="input" type="text" name="username" required>
                            </div>
                            <div class="group">
                                <label for="email" class="label">Email Address</label>
                                <input id="pass" class="input" type="email" name="email" required>
                            </div>
                            <div class="group">
                                <label for="password" class="label">Password</label>
                                <input id="pass" type="password" class="input" name="password1" required>
                            </div>
                            <div class="group">
                                <label for="password" class="label">Repeat Password</label>
                                <input id="pass" type="password" class="input" name="password2" required>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up" name="reg_user">
                            </div>
                            <div class="hr"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--
        ==================================================
        Header Section Start
        ================================================== -->
    <header id="top-bar" class="navbar-fixed-top animated-header">
        <div class="container">
            <div class="navbar-header">

                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <div style="width: 280px;  margin-bottom: 3%;" class="navbar-brand">
                    <a href="index.php">
                        <img style="width: 100%;" src="" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search form -->
                        <?php include('signin.php'); ?>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>


    <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 
================================================== 
    Contact Section Start
================================================== -->
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Me</h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                          type anything you want we wont see it anyways 
                        </p>
                        <div class="contact-form">
                            <form id="contact-form" method="#" action="#" role="form">

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                    <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                    <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                    <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                </div>

                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                    <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                </div>

                             <!--   <div id="success" class="success">
                                    Thank you. The Mailman is on His Way :)
                                </div>

                                <div id="error" class="error">
                                    Sorry, don't know what happened. Try later :(
                                </div>-->

                                <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                    <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!--
            ==================================================
            Footer Section Start
            ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="col-md-8">
                <p class="copyright">Copyright: <span>
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </span> Design and Developed by <a href="http://www.facebook.com" target="_blank">hamza</a>. <br>
                    Get More
                   
                </p>
            </div>
            <div class="col-md-4">
                <!-- Social Media -->
                <ul class="social">
                    <li>
                        <a href="#" class="Facebook">
                            <i class="ion-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Twitter">
                            <i class="ion-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Linkedin">
                            <i class="ion-social-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="Google Plus">
                            <i class="ion-social-googleplus"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer> <!-- /#footer -->

    <!-- Template Javascript Files
	================================================== -->
    <!-- jquery -->
    <script src="plugins/jQurey/jquery.min.js"></script>
    <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script>
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
    <!-- owl carouserl js -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- bootstrap js -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- wow js -->
    <script src="plugins/wow-js/wow.min.js"></script>
    <!-- slider js -->
    <script src="plugins/slider/slider.js"></script>
    <!-- Fancybox -->
    <script src="plugins/facncybox/jquery.fancybox.js"></script>
    <!-- template main js -->
    <script src="js/main.js"></script>
</body>

</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <!-- Basic Page Needs
        ================================================== -->
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="books.png" />
  <title>Timer Agency Template</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <!-- Mobile Specific Metas
        ================================================== -->
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Template CSS Files
        ================================================== -->
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
  <!-- template main css file 
        <link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="css/myStyle.css" />

  <!-- template login css file -->

  <link rel="stylesheet" type="text/css" href="css/login.css" />

  <!------------------------------SIDEBAR-------------------------------->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

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
            <form action="login_signup.php" method="post">
              <?php include('errors.php') ?>
              <div class="group">
                <label for="username" class="label">Username</label>
                <input id="user" type="text" class="input" name="username">
              </div>
              <div class="group">
                <label for="password" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label class="keep-me" for="check"><span class="icon"></span>Keep me Signed in</label>
              </div>
              <div class="group">
                <button type="submit" name="login_user">Log In</button>
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
              </div>
            </form>
          </div>
          <form action="index.php" method="post">
            <?php include('errors.php') ?>
            <div class="sign-up-htm">
              <div class="group">
                <label for="username" class="label">Username</label>
                <input id="user" type="text" class="input" name="username" required>
              </div>
              <div class="group">
                <label for="email" class="label">Email Address</label>
                <input id="pass" type="email" class="input" name="email" required>
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
                <button type="submit" name="reg_user">Sign Up</button>
              </div>
              <div class="hr"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!--
        ==================================================
                            Sidebar        
        ================================================== -->

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
            <img style="width: 100%;" src="images/logo/201846872018-02-273871051Pencil-Book.png" alt="" />
          </a>
        </div>
        <!-- /logo -->
      </div>
      <!-- main menu -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <div class="main-menu">
          <ul class="nav navbar-nav navbar-right" style="/*! width: auto; */right: 29px;margin-left: 30px;">
            <!-- Search form -->
            <li>
              <input type="search" class="form-control" placeholder="search.." style="width: 90%;" />
            </li>
            <li>
              <a href="index.php">Home</a>
            </li>
            <li><a href="MyBooks.html">My Books</a></li>

            <li>
              <a href="browse.html">Store</a>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>

            <li>
              <a id="signin" class="btn btn-lg" onclick="document.getElementById('id01').style.display='block'">Signin</a>
            </li>

            <li style="width: 20%; margin-left: 20px; border: none;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Iasmani Pinazo <span class="glyphicon glyphicon-user pull-right"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                <li class="divider"></li>
                <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                <li class="divider"></li>
                <li><a href="#">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /main nav -->
    </div>
  </header>

  <!--
==================================================
Slider Section Start
================================================== -->
  <section id="hero-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="block wow fadeInUp" data-wow-delay=".3s">
            <!-- Slider -->
            <section class="cd-intro">
              <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                <span>hello i`m hamza and iam a </span><br />
                <span class="cd-words-wrapper">
                  <b class="is-visible">legend</b>
                  <b>pro</b>
                  <b>humble</b>
                </span>
              </h1>
            </section>
            <!-- cd-intro -->
            <!-- /.slider -->
            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
              if you want to become someone like me (you can try ),<br />
              click the sign up button below.
            </h2>
            <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works">Signup</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/#main-slider-->

  <!--
==================================================
Portfolio Section Start
================================================== -->
  <section id="works" class="works">
    <div class="container">
      <div class="section-heading">
        <h1 class="title wow fadeInDown" data-wow-delay=".3s">
          Popular Categories
        </h1>
      </div>
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> action & adventure</span>
                </div>
              </a>
            </div>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> Romance</span>
                </div>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> Mystery & thriller</span>
                </div>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> Fantasy</span>
                </div>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-5.jpg" class="img-responsive" alt="" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> Children </span>
                </div>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-2 col-sm-3 col-xs-12">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-6.jpg" class="img-responsive" alt="" />
              <a target="_blank" href="single-portfolio.html">
                <div class="overlay">
                  <span class="slide"> Science Fiction</span>
                </div>
              </a>
            </div>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- #works -->

  <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
  <section id="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block">
            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
              NEED HELP ?
            </h2>
            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
              if you have anything you need help with dont hesitate to contact
              us !
            </p>
            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
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
        <p class="copyright">
          Copyright:
          <span>
            <script>
              document.write(new Date().getFullYear());
            </script>
          </span>
          Design and Developed by
          <a href="http://www.google.com" target="_blank">Hamza</a>
        </p>
      </div>
      <div class="col-md-4">
        <!-- Social Media -->
        <ul class="social">
          <li>
            <a href="http://wwww.fb.com/themefisher" class="Facebook">
              <i class="ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="http://wwww.twitter.com/themefisher" class="Twitter">
              <i class="ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#" class="Linkedin">
              <i class="ion-social-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="http://wwww.fb.com/themefisher" class="Google Plus">
              <i class="ion-social-googleplus"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <!-- /#footer -->

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
  <script src="js/myScript.js"></script>
</body>

</html>
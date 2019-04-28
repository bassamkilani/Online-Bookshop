<?php include('server.php'); ?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <title>Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="books.png" />
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
  <link rel="stylesheet" href="plugins/jQurey/jquery.min.js" />

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
                        <form name="loginForm" action="index-loggedin.php" method="post" onsubmit="return loginValidation()">
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
                        <form name="signupForm" action="index-loggedin.php" method="post" onsubmit="return signUpVaildation()">
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
        <div class="navbar-brand">
          <a href="index-loggedin.php">
            <img src="" alt="">
          </a>
        </div>
        <!-- /logo -->
      </div>
      <!-- main menu -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <div class="main-menu">
          <?php include('signin.php'); ?>
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
            <h2>Store</h2>            
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--=======================================
=            Blog Left sidebar            =
========================================-->

  <section id="blog-full-width">
    <div class="Store">
      <div class="row">
        <div class="col-md-4 Category_side ">
          <div class="sidebar">
            <div class="search widget">
              <form action="" method="get" class="searchform" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"> <i class="ion-search"></i>
                    </button>
                  </span>
                </div><!-- /input-group -->
              </form>
            </div>
            <div class="author widget">
              <img class="img-responsive" src="images/author/author-bg.jpg">
              <div class="author-body text-center">
                <!--<div class="author-img">
                                    <img src="images/author/author.jpg">
                                </div>-->
                <div class="author-bio">
                  <h3> The category</h3>

                </div>
              </div>
            </div>
            <div class="categories widget">
              <h3 class="widget-head">Categories</h3>
              <ul>
                <li>
                  <a href="#" onclick="showCategory('actionandadventure');">action & adventure</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#" onclick="showCategory('romance');">Romance</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#" onclick="showCategory('mysteryandthriller');">Mystery & thriller</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('fantasy');">Fantasy</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('Children');">Children</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('biosandhistory');">Bios & History</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('horror');">Horror</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('nonfiction');">Non-fiction</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('computers');">Computers</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('drama');">Drama</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('criticism');">Criticism</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('cooking');">Cooking</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('business');">Business</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('biography');">Biography</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('health');">Health</a> <span class="badge"></span>
                </li>
                <li>
                  <a href="#bookshere" onclick="showCategory('humor');">Humor</a> <span class="badge"></span>
                </li>


              </ul>
            </div>

          </div>
        </div>


        <div id="bookshere" class="row">










        </div>
      </div>
    </div>
  </section>

  <!--====  End of Blog Left sidebar  ====-->



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
            <a href="contact.php" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
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
  <script type="text/javascript" src="bootstrap\js\jquery-3.3.1.min.js"></script>
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

  <script>
    function showCategory(categ) {
      /* $.ajax({
        url: 'categories.php',
        data: {
          category: categ
        },
        type: 'get',
        dataType: 'JSON',
        success: function(response) {
          var len = response.length;
          for (var i = 0; i < len; i++) {
            var title = response[i].title;
            var author = response[i].author;
            var language = response[i].language;
            var type = response[i].type;
            var price = response[i].price;
            var publicationDate = response[i].publicationDate;
            var reference = response[i].reference;
            var description = response[i].description;
            var category = response[i].category;
            var image = response[i].image;

            var tr_str = '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">' +
              '<div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">>' + '<div class="img-wrapper">' + '<img src="booksCovers/' + image +
              '" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />' + '<div class="mybooks-overlay">' + '<div class="desc">' + '<div class="description">'
            description + '</div>' + '<a class="details" target="_blank " href=" #">Learn More</a>' + '</div>' + '</div></div><figcaption' +
              '<button class="myButtone">' + '<div class="insider"> </div>' + price + '</button>' + '<div class="heart"></div>' + '</figcaption></div></div>';

            $("#bookshere").append(tr_str);
          }

        }

      }); */

      var category = categ;
      $('#bookshere').load("categories.php", {
        cat: category
      });

    }
  </script>

</body>

</html>
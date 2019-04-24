<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="favicon.ico">
    <title>Timer Agency Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
</head>

<body>

    <!--
        ==================================================
        Pop-up Window  Start

        
        ================================================== -->


    <div id="id01" class=" modal wow fadeInUp animated" data-wow-delay=".1s">
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                    In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label class="keep-me" for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Repeat Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input id="pass" type="text" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="hr"></div>

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
                    <a href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><a href="MyBooks.html">My Books</a></li>

                        <li>
                            <a href="browse.html">Store</a>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>

                        <li>
                            <a id="signin" class="btn btn-lg"
                                onclick="document.getElementById('id01').style.display='block'">Signin</a>
                        </li>
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
                        <h2>Blog with left sidebar</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Store</li>
                        </ol>
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
                                    <a href="">action & adventure</a> <span class="badge"></span>
                                </li>
                                <li>
                                    <a href="">Romance</a> <span class="badge"></span>
                                </li>
                                <li>
                                    <a href="">Mystery & thriller</a> <span class="badge"></span>
                                </li>
                                <li>
                                    <a href="">Fantasy</a> <span class="badge"></span>
                                </li>
                                <li>
                                    <a href="">Children</a> <span class="badge"></span>
                                </li>
                            </ul>
                        </div>

                        <div class="recent-post widget">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li>
                                    <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                    <time>16 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Statistics,analysis. The key to succes.</a><br>
                                    <time>15 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post without image, only text.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with audio player. Share your creations.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with classic Youtbube player.</a><br>
                                    <time>12 May, 2015</time>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                        <div class="row">


                                <div class="col-lg-2 col-sm-3 margining">
                                  <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                    <div class="img-wrapper">
                                      <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                      <div class="mybooks-overlay">
                                        <div class="desc">
                        
                        
                                          <div class="description">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown
                                            printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged. It was popularised in the
                                            1960s with the release of Letraset sheets containing Lorem
                                            Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem
                                            Ipsum.
                                          </div>
                                          <a class="details" target="_blank" href="bookdetails.html">Learn More</a>
                                        </div>
                                      </div>
                                    </div>
                                    <figcaption>
                                      <span>
                                         
                                        <label class="price">20.00$</label></span>
                                        <div class="heart"></div>
                                    </figcaption>
                                  </figure>
                                </div>



                                <div class="col-lg-2 col-sm-3 margining">
                                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                          <div class="img-wrapper">
                                            <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                            <div class="mybooks-overlay">
                                              <div class="desc">
                              
                              
                                                <div class="description">
                                                  Lorem Ipsum is simply dummy text of the printing and
                                                  typesetting industry. Lorem Ipsum has been the industry's
                                                  standard dummy text ever since the 1500s, when an unknown
                                                  printer took a galley of type and scrambled it to make a
                                                  type specimen book. It has survived not only five
                                                  centuries, but also the leap into electronic typesetting,
                                                  remaining essentially unchanged. It was popularised in the
                                                  1960s with the release of Letraset sheets containing Lorem
                                                  Ipsum passages, and more recently with desktop publishing
                                                  software like Aldus PageMaker including versions of Lorem
                                                  Ipsum.
                                                </div>
                                                <a class="details" target="_blank" href="#">Learn More</a>
                                              </div>
                                            </div>
                                          </div>
                                          <figcaption>
                                            <span>
                                               
                                              <label class="price">20.00$</label></span>
                                              <div class="heart"></div>
                                          </figcaption>
                                        </figure>
                                      </div>









                                      <div class="col-lg-2 col-sm-3 margining">
                                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                              <div class="img-wrapper">
                                                <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                                <div class="mybooks-overlay">
                                                  <div class="desc">
                                  
                                  
                                                    <div class="description">
                                                      Lorem Ipsum is simply dummy text of the printing and
                                                      typesetting industry. Lorem Ipsum has been the industry's
                                                      standard dummy text ever since the 1500s, when an unknown
                                                      printer took a galley of type and scrambled it to make a
                                                      type specimen book. It has survived not only five
                                                      centuries, but also the leap into electronic typesetting,
                                                      remaining essentially unchanged. It was popularised in the
                                                      1960s with the release of Letraset sheets containing Lorem
                                                      Ipsum passages, and more recently with desktop publishing
                                                      software like Aldus PageMaker including versions of Lorem
                                                      Ipsum.
                                                    </div>
                                                    <a class="details" target="_blank" href="#">Learn More</a>
                                                  </div>
                                                </div>
                                              </div>
                                              <figcaption>
                                                <span>
                                                   
                                                  <label class="price">20.00$</label></span>
                                                  <div class="heart"></div>
                                              </figcaption>
                                            </figure>
                                          </div>








                                          <div class="col-lg-2 col-sm-3 margining">
                                                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                                  <div class="img-wrapper">
                                                    <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                                    <div class="mybooks-overlay">
                                                      <div class="desc">
                                      
                                      
                                                        <div class="description">
                                                          Lorem Ipsum is simply dummy text of the printing and
                                                          typesetting industry. Lorem Ipsum has been the industry's
                                                          standard dummy text ever since the 1500s, when an unknown
                                                          printer took a galley of type and scrambled it to make a
                                                          type specimen book. It has survived not only five
                                                          centuries, but also the leap into electronic typesetting,
                                                          remaining essentially unchanged. It was popularised in the
                                                          1960s with the release of Letraset sheets containing Lorem
                                                          Ipsum passages, and more recently with desktop publishing
                                                          software like Aldus PageMaker including versions of Lorem
                                                          Ipsum.
                                                        </div>
                                                        <a class="details" target="_blank" href="#">Learn More</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <figcaption>
                                                    <span>
                                                       
                                                      <label class="price">20.00$</label></span>
                                                      <div class="heart"></div>
                                                  </figcaption>
                                                </figure>
                                              </div>



                                       
                                              <div class="col-lg-2 col-sm-3 margining">
                                                    <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                                      <div class="img-wrapper">
                                                        <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                                        <div class="mybooks-overlay">
                                                          <div class="desc">
                                          
                                          
                                                            <div class="description">
                                                              Lorem Ipsum is simply dummy text of the printing and
                                                              typesetting industry. Lorem Ipsum has been the industry's
                                                              standard dummy text ever since the 1500s, when an unknown
                                                              printer took a galley of type and scrambled it to make a
                                                              type specimen book. It has survived not only five
                                                              centuries, but also the leap into electronic typesetting,
                                                              remaining essentially unchanged. It was popularised in the
                                                              1960s with the release of Letraset sheets containing Lorem
                                                              Ipsum passages, and more recently with desktop publishing
                                                              software like Aldus PageMaker including versions of Lorem
                                                              Ipsum.
                                                            </div>
                                                            <a class="details" target="_blank" href="#">Learn More</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <figcaption>
                                                        <span>
                                                           
                                                          <label class="price">20.00$</label></span>
                                                          <div class="heart"></div>
                                                      </figcaption>
                                                    </figure>
                                                  </div>

                                                  <div class="col-lg-2 col-sm-3 margining">
                                                        <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                                          <div class="img-wrapper">
                                                            <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
                                                            <div class="mybooks-overlay">
                                                              <div class="desc">
                                              
                                              
                                                                <div class="description">
                                                                  Lorem Ipsum is simply dummy text of the printing and
                                                                  typesetting industry. Lorem Ipsum has been the industry's
                                                                  standard dummy text ever since the 1500s, when an unknown
                                                                  printer took a galley of type and scrambled it to make a
                                                                  type specimen book. It has survived not only five
                                                                  centuries, but also the leap into electronic typesetting,
                                                                  remaining essentially unchanged. It was popularised in the
                                                                  1960s with the release of Letraset sheets containing Lorem
                                                                  Ipsum passages, and more recently with desktop publishing
                                                                  software like Aldus PageMaker including versions of Lorem
                                                                  Ipsum.
                                                                </div>
                                                                <a class="details" target="_blank" href="#">Learn More</a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <figcaption>
                                                            <span>
                                                               
                                                              <label class="price">20.00$</label></span>
                                                              <div class="heart"></div>
                                                          </figcaption>
                                                        </figure>
                                                      </div>
    



                                
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
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU
                            THINK ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam
                                temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown"
                                data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
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
                        <script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a
                        href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br>
                    Get More
                    <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                        Free Bootstrap Templates
                    </a>
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
    <script src="js/myScript.js"></script>
</body>

</html>
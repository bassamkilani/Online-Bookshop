<?php
include('server.php');
$usernameprofile = $_SESSION['username'];
$queryemail = "SELECT email FROM user WHERE username = '$username'";
$emailprofile = mysqli_query($db, $queryemail);
$queryaddress = "SELECT address FROM user WHERE username = '$username'";
$addressprofile = mysqli_query($db, $queryaddress);
$queryphone = "SELECT email FROM user WHERE username = '$username'";
$phoneprofile = mysqli_query($db, $queryphone);
?>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- template main css file 
        <link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" type="text/css" href="css/main.css" />

</head>

<body>
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
          <ul class="nav navbar-nav navbar-right" style="width:800px; margin-right:-100px;">
            <!-- Search form -->
            <li>
              <input type="search" class="form-control" placeholder="search.." style="width: 90%;" />
            </li>
            <li>
              <a href="index-loggedin.php">Home</a>
            </li>
            <li><a href="MyBooks.php">My Books</a></li>

            <li>
              <a href="browse.php">Store</a>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>

            <li style="width: 20%; border: none;" class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                echo $_SESSION['username'];
                ?>
                <span class="glyphicon glyphicon-user pull-right"></span></a>
              <ul style="width:200px;" class="dropdown-menu">
                <li><a href="profile.php">Account Settings<span class="glyphicon glyphicon-cog pull-right"></span></a>
                </li>
                <li class="divider"></li>

                <li><a href="index.php?logout='1'">Sign Out<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
              </ul>
            </li>
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
            <h2>My Books</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>

  <section id="works" class="works" style="background-color : #fff;">
    <div class="container bootstrap snippet">
      <div class="row">
        <div class="col-sm-10">
          <h1>User name</h1>
        </div>

      </div>
      <div class="row">

        <div class="col-sm-3 list-group">
          <!--left col-->


          <div class="text-center list-group-item text-muted">
            <img src="C://Users\Bashar Sader\Pictures\Saved Pictures\bassam-swag.jpg" class="avatar img-circle img-thumbnail" alt="avatar" style="width : 250px; height :250px;">
            <h6>Upload a different photo...</h6>
            <input type="file" class="text-center center-block file-upload">

            </hr><br>

            <button class="btn btn-lg btn-success"><i class="glyphicon glyphicon-ok-sign"></i>
              Authinticated</button>

            <button class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-remove-sign"></i>
              not Authinticated</button>
            <br>
            <br>

          </div>
          <ul class="list-group">
            <li class="list-group-item text-muted"><strong> Activity <i class="fa fa-dashboard fa-1x"></i> </strong>
            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Rank</span> SWAG</strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Sales</span> 220</strong></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Total Sales</span> 420</strong></li>

          </ul>

        </div>
        <!--/col-3-->
        <div class="col-sm-9">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" style="color : #444; font-weight:bold ; font-size : 15px;">Home</a></li>
            <li><a data-toggle="tab" href="#messages" style="color : #444; font-weight:bold ; font-size : 15px;">billing
                info</a></li>

          </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <hr>
              <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                  <div class="col-xs-6">
                    <label for="first_name">
                      <h4>Full Name</h4>
                    </label>
                    <input type="text" class="form-control" name="name" id="first_name">
                  </div>
                </div>
                <div class="form-group">

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="email">
                        <h4>Email</h4>
                      </label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="email">
                        <h4>Country</h4>
                      </label>
                      <select class="form-control form-control-large">
                        <option>Germany</option>
                        <option>Palestine</option>
                        <option>Nigeria</option>
                        <option>France</option>
                        <option>Finland</option>
                        <option>Nuezeland</option>
                      </select>
                    </div>
                  </div>



                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="phone">
                        <h4>City/State</h4>
                      </label>
                      <input type="text" class="form-control" name="city" id="phone">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-6">
                      <label for="mobile">
                        <h4>Phone</h4>
                      </label>
                      <input type="text" class="form-control" name="phone" id="mobile">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12">
                      <br>
                      <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>
                        Save</button>
                      <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>

                    <form role="form">
                      <div class="checkbox">
                        <label data-toggle="collapse" data-target="#IDCard" style="font-size :18px ; width:15%; background : #f44336; border-radius : 50px; float : right; color:white; line-height:50px; margin-right:10%;">
                          +become a seller
                        </label>
                      </div>

                      <div class="form-group collapse" id="IDCard" style="float :right; margin-right:30px;">
                        <br>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload a photo of your ID</span>
                          </div>
                          <br>
                          <div class="list-group-item">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            </div>
                            <br>
                            <br>
                            <button class="btn btn-success" type="submit">upload</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </form>

              <hr>

            </div>
            <!--/tab-pane-->
            <div class="tab-pane" id="messages">

              <h2></h2>

              <hr>
              <div class="container-fluid">

                <div class="row">
                  <div class="col-xs-12">


                    <div class="collapse" id="promo">
                      <div class="form-group">
                        <label for="inputpromo" class="control-label">Promo Code</label>
                        <div class="form-inline">
                          <input type="text" class="form-control" id="inputpromo" placeholder="Enter promo code">
                          <button class="btn btn-sm">Apply</button>
                        </div>
                      </div>
                    </div>
                    <h3>Ship my order to&hellip;</h3>
                    <div class="list-group">
                      <div class="list-group-item">
                        <div class="list-group-item-heading">
                          <div class="row radio">
                            <div class="col-xs-3">
                              <label>
                                <input type="radio" name="optionShipp" id="optionShipp1" value="option2">
                                1509 Latona St
                              </label>
                            </div>
                            <div class="col-xs-5">
                              <dl class="dl-small">
                                <dt>Miguel Perez</dt>
                                <dd>1509 Latona St, Philadelphia, PA 19146 </dd>
                              </dl>

                              <button class="btn btn-sm btn-danger ">Delete this address</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="list-group-item-heading">
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="radio">
                                <label>
                                  <input type="radio" name="optionShipp" id="optionShipp2" value="option2" checked>
                                  A new address
                                </label>
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <form role="form" class="">
                                <div class="row">
                                  <div class="col-xs-3">
                                    <div class="form-group">
                                      <label for="inputZip">First Name</label>
                                      <input type="text" class="form-control" style="width : auto" id="inputfirst" placeholder="First Name">
                                    </div>
                                  </div>
                                  <div class="col-xs-9">
                                    <div class="form-group">
                                      <label for="inputCity">Last Name</label>
                                      <input type="text" class="form-control" style="width : auto" id="inputlast" placeholder="Last Name">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress1">Street address 1</label>
                                  <input type="text" class="form-control form-control-large" id="inputAddress1" placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress2">Street address 2</label>
                                  <input type="text" class="form-control form-control-large" id="inputAddress2" placeholder="Enter address">
                                </div>
                                <div class="row">
                                  <div class="col-xs-3">
                                    <div class="form-group">
                                      <label for="inputZip">ZIP Code</label>
                                      <input type="text" class="form-control form-control-small" id="inputZip" placeholder="Enter zip">
                                    </div>
                                  </div>
                                  <div class="col-xs-9">
                                    <div class="form-group">
                                      <label for="inputCity">City</label>
                                      <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="Enter city">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputState" class="control-label">State</label>
                                  <select class="form-control form-control-large">
                                    <option>Select state</option>
                                    <option>Palestine</option>
                                  </select>
                                </div>
                              </form>
                              <button class="btn btn-sm btn-success">Save Address</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <h3>I'll pay with &hellip;</h3>

                    <div class="list-group">
                      <div class="list-group-item">
                        <div class="list-group-item-heading">
                          <div class="row radio">
                            <div class="col-xs-3">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                                My Visa Card
                              </label>
                            </div>
                            <div class="col-xs-9">
                              <div class="row">
                                <div class="col-xs-4">
                                  <dl class="dl-small">
                                    <dt>Credit Card Number</dt>
                                    <dd>**********1111</dd>
                                  </dl>
                                </div>
                                <div class="col-xs-2">
                                  <dl class="dl-small">
                                    <dt>Expiration</dt>
                                    <dd>07/16</dd>
                                  </dl>
                                </div>
                                <div class="col-xs-6">
                                  <dl class="dl-small">
                                    <dt>Billing Address</dt>
                                    <dd>1509 Latona St, Philadelphia, PA 19146 </dd>
                                  </dl>
                                </div>
                              </div>
                              <form role="form">
                                <div class="checkbox">
                                  <label data-toggle="collapse" data-target="#credit">
                                    <input type="checkbox"> Edit Card Info
                                  </label>
                                </div>

                                <div class="form-group collapse" id="credit">
                                  <br>
                                  <div>
                                    <label for="inputAddress1">Card Number</label>
                                    <input type="number" class="form-control form-control-large" id="inputAddress1" placeholder="XXXX-XXXX-XXXX-XXXX">
                                  </div>
                                  <br>

                                  <div class="form-group">
                                    <label for="inputCity">Date</label>
                                    <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="MM/YY">
                                  </div>

                                </div>
                              </form>
                              <button class="btn btn-sm btn-danger">Delete this card</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="list-group">
                        <div class="list-group-item">
                          <div class="list-group-item-heading">
                            <div class="row radio">
                              <div class="col-xs-3">
                                <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                                  My Wallet
                                </label>
                              </div>
                              <div class="col-xs-9">
                                <div class="row">
                                  <div class="col-xs-4">
                                    <dl class="dl-small">
                                      <dt>Balance</dt>
                                      <br>
                                      <dd>250.00$</dd>
                                    </dl>
                                  </div>


                                </div>
                                <form role="form">
                                  <div class="checkbox">
                                    <label data-toggle="collapse" data-target="#Balance">
                                      <input type="checkbox"> Add Balance
                                    </label>
                                  </div>
                                  <div class="form-group collapse" id="Balance">
                                    <br>
                                    <div>
                                      <label for="inputAddress1">Card Number</label>
                                      <input type="number" class="form-control form-control-large" id="inputAddress1" placeholder="XXXX-XXXX-XXXX-XXXX">
                                      <br>
                                      <div class="form-group">
                                        <label for="inputCity">Date</label>
                                        <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="MM/YY">
                                      </div>
                                      <br>
                                      <label for="inputAddress1">Enter Balance</label>
                                      <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="MM/YY">

                                    </div>
                                    <br>

                                    <button class="btn btn-sm btn-success">ADD</button>

                                  </div>
                              </div>
                              </form>

                            </div>
                          </div>

                          <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>

                        </div>
                      </div>
                    </div>

                  </div>
                  <!--/tab-pane-->
                </div>
                <!--/tab-content-->

              </div>
              <!--/col-9-->
            </div>
            <!--/row-->
  </section>
  <br>
  <br>

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
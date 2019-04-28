<?php include('server.php');
$usernameProfile = $_SESSION['username'];

$db = mysqli_connect('localhost', 'root', '', 'mywebsite');


$sqlProfile = "SELECT * FROM books ";
$queryProfile = mysqli_query($db, $sqlProfile);
$fetchAssocProfile = mysqli_fetch_assoc($queryProfile);


$title = $fetchAssocProfile["title"];
$author = $fetchAssocProfile["author"];
$owner = $fetchAssocProfile["owner"];
$description = $fetchAssocProfile["description"];
$price = $fetchAssocProfile["price"];
$type = $fetchAssocProfile["type"];
$reference = $fetchAssocProfile["reference"];

$cover = $fetchAssocProfile["cover"];

$language = $fetchAssocProfile["language"];
$publicationdate = $fetchAssocProfile["publicationdate"];
$category = $fetchAssocProfile["category"];

$Doc = new DOMDocument(); 
$Doc->load( 'MyBooks.php' ); 

$searchNode = $Doc->getElementsByTagName( "div" ); 

$valueID;

foreach( $searchNode as $searchNode ) 
{ 
    $valueID = $searchNode->getAttribute('ID'); 
   
    echo "fuck your ass ". "$valueID\n"; 
} 


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
          <a href="index.html">
            <img style="width: 100%;" src="images/logo/201846872018-02-273871051Pencil-Book.png" alt="" />
          </a>
        </div>
        <!-- /logo -->
      </div>
      <!-- main menu -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <div class="main-menu">
          <ul class="nav navbar-nav navbar-right">
            <!-- Search form -->
            <li>
              <input type="search" class="form-control" placeholder="search.." style="margin-right:350px;" />
            </li>
            <li>
              <a href="index.html">Home</a>
            </li>


            <li>
              <a href="browse.html">Store</a>
            </li>
            <li><a href="contact.html">Contact</a></li>


            <li>
              <a id="signin" class="btn btn-lg" onclick="document.getElementById('id01').style.display='block'">Signin</a>
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
  <section class="global-page-header" style="background: white;">

  </section>


  <div class="container-fluid" style="margin-left: 20px;">
    <div class="content-wrapper">
      <div>
        <div class="item-container">
          <div class="container" style="margin-left: 0px;">
            <div>
              <img src="images/books/02-the-girlfriend-1513169277.jpg" alt="cover" style="max-width: 500px; max-height: 300px; float: left; margin-right: 30px;">
              <div>
                <div class="product-title" style="font-size: 25px; font-weight: bold;">

                  <?php
                  echo "$title";

                  ?>
                </div>
                <div class="product-desc">
                  <?php
                  echo "$author";

                  ?></div>
                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                <hr>
              </div>
              <div class="product-price" style="font-size: 20px;">
                <?php
                echo "$price" . "$";

                ?></div>

              <hr>
              <form action="checkout.php" method="POST">
                <div class="btn-group cart">
                  <button type="submit" class="btn btn-success" name="Order">
                    Order now
                  </button>
                </div>
              </form>
              <div class="btn-group wishlist">
                <button type="button" class="btn btn-danger">
                  Add to wishlist
                </button>
              </div>

            </div>
          </div>
        </div>

        <br>
        <br>
        <br>

        <div class="container-fluid">
          <div class="col-md-12 product-info" style="padding-left: 0px;">

            <ul id="myTab" class="nav nav-tabs">

              <li class="active nav-item nav-link"><a href="#service-one" data-toggle="tab" style="font-weight:bold ; color:black">DESCRIPTION</a></li>
              <li class="nav-item nav-link"><a href="#service-two" data-toggle="tab" style="font-weight:bold ; color:black">PRODUCT INFO</a></li>


            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="service-one">

                <section class="container product-info">
                  <?php
                  echo "$description";

                  ?>
                </section>

              </div>
              <div class="tab-pane fade" id="service-two">

                <section class="container">
              
                  <h3>Current Owner : <?php
                                      echo "$owner";

                                      ?></h3>
                  <li>Type : <?php
                              echo "$type";

                              ?></li>
                  <li>Lang : <?php
                              echo "$language";

                              ?></li>
                  <li>Publication Date : <?php
                                          echo "$publicationdate";

                                          ?></li>
                  <li>Reference :   <?php
                  echo "$reference";

                  ?></li>
                  <li>Category : <?php
                  echo "$reference";

                  ?></li>
             
                </section>

              </div>
              <div class="tab-pane fade" id="service-three">

              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
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
<?php include('server.php');
$usernameProfile = $_SESSION['username'];
if (isset($_POST['addBook'])) {

  $target = "booksCovers/" . basename($_FILES['bookCover']['name']);
  //connect to db
  $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
  //get submitted data
  $image = $_FILES['bookCover']['name'];

  $title = mysqli_real_escape_string($db, $_POST['title']);
  $author = mysqli_escape_string($db, $_POST['author']);
  $language = mysqli_escape_string($db, $_POST['language']);
  $type = mysqli_escape_string($db, $_POST['type']);
  $price = mysqli_escape_string($db, $_POST['price']);
  $publicationDate = mysqli_escape_string($db, $_POST['publication']);
  $reference = mysqli_escape_string($db, $_POST['reference']);
  $description = mysqli_escape_string($db, $_POST['description']);
  $category = mysqli_escape_string($db, $_POST['category']);

  //form validation

  if (empty($title)) {
    array_push($errors, "title is required");
    echo "title";
  }

  if (empty($image)) {
    array_push($errors, "title is required");
    echo "image";
  }

  if (empty($author)) {
    array_push($errors, "author is required");
    echo "author";
  }
  if (empty($language)) {
    array_push($errors, "language is required");
    echo "lang";
  }
  if (empty($type)) {
    array_push($errors, "type is required");
    echo "type";
  }
  if (empty($price)) {
    array_push($errors, "price is required");
    echo "price";
  }
  if (empty($reference)) {
    array_push($errors, "reference is required");
    echo "reffere";
  }
  if (empty($category)) {
    array_push($errors, "Country is required");
    echo "country";
  }
  if (empty($description)) {
    array_push($errors, "description is required");
    echo "desc";
  }

  if (count($errors) == 0) {
    $query = "INSERT INTO books (title, author, owner, description, price, type, cover, language, publicationdate, reference, category) VALUES ('$title', '$author', '$usernameProfile', '$description', '$price', '$type', '$image' , '$language' , '$publicationDate', '$reference', '$category');";
    mysqli_query($db, $query);
    if (move_uploaded_file($_FILES['bookCover']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    } else {
      $msg = "There was an problem uploading image";
    }
    $_SESSION['username'] = $usernameProfile;
    $_SESSION['success'] = "Data updated successfully";
    header('location: mybooks.php');
  }
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
              <input
                type="search"
                class="form-control"
                placeholder="search.."
                style = "margin-right:350px;"
              />
            </li>
            <li>
              <a href="index.html">Home</a>
            </li>
            
           
            <li>
              <a href="browse.html">Store</a>
            </li>
            <li><a href="contact.html">Contact</a></li>
     

            <li>
              <a
                id="signin"
                class="btn btn-lg"
                onclick="document.getElementById('id01').style.display='block'"
               
                >Signin</a
              >
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
                    <div class="product-title" style="font-size: 25px; font-weight: bold;">Title</div>
					<div class="product-desc">Author</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                    <hr>
                    </div>
					<div class="product-price" style="font-size: 20px;">$ 1234.00</div>
					
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-success">
							Add to cart 
						</button>
					</div>
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
						
						<li class="active nav-item nav-link"><a href="#service-one" data-toggle="tab" style = "font-weight:bold ; color:black">DESCRIPTION</a></li>
						<li class="nav-item nav-link"><a href="#service-two" data-toggle="tab" style = "font-weight:bold ; color:black">PRODUCT INFO</a></li>
						
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.
								<h3>Corsair Gaming Series GS600 Features:</h3>
								<li>It supports the latest ATX12V v2.3 standard and is backward compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
								<li>An ultra-quiet 140mm double ball-bearing fan delivers great airflow at an very low noise level by varying fan speed in response to temperature</li>
								<li>80Plus certified to deliver 80% efficiency or higher at normal load conditions (20% to 100% load)</li>
								<li>0.99 Active Power Factor Correction provides clean and reliable power</li>
								<li>Universal AC input from 90~264V — no more hassle of flipping that tiny red switch to select the voltage input!</li>
								<li>Extra long fully-sleeved cables support full tower chassis</li>
								<li>A three year warranty and lifetime access to Corsair’s legendary technical support and customer service</li>
								<li>Over Current/Voltage/Power Protection, Under Voltage Protection and Short Circuit Protection provide complete component safety</li>
								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
								<li>MTBF: 100,000 hours</li>
								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
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
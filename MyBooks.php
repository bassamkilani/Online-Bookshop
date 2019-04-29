<?php include('server.php');
if (!$_SESSION['username']) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <!-- Basic Page Needs
        ================================================== -->
  <title>My books</title>
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
  <link rel="stylesheet" type="text/css" href="css/mystyle.css" />

  <!-- template login css file -->

  <link rel="stylesheet" type="text/css" href="css/login.css" />

  <!-- Font Icon -->

  <link rel="stylesheet" href="addBook/vendor/jquery-ui/jquery-ui.min.css" />

  <!-- addbook css -->
  <link rel="stylesheet" href="addBook/css/style.css" />

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
        <div style="width: 280px;  margin-bottom: 10%; margin-top:-20px;" class="navbar-brand">
          <a href="index.php">
            <img style="width : 300px; height:80px;" src="logo.PNG" alt="cant show " />
          </a>
        </div>
        <!-- /logo -->

      </div>
      <!-- main menu -->
      <!-- main menu -->
      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <div class="main-menu">
          <?php include('signin.php'); ?>
        </div>
      </nav>
      <!-- /main nav -->
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

  <!-- 
================================================== 
    Service Page Section  Start
================================================== -->

  <!-- 
================================================== 
    +Add Book POP-UP Start
================================================== -->


  <div id="addBook" class="main wow fadeInDown animated">
    <section class="signup">
      <!-- <img src="images/signup-bg.jpg" alt=""> -->
      <div class="container">
        <div class="signup-content">
          <form action="mybooks.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group">
                <label for="first_name">Title</label>
                <input type="text" class="form-input" name="title" id="first_name" required />
              </div>
              <div class="form-group">
                <label for="last_name">Author</label>
                <input type="text" class="form-input" name="author" id="last_name" required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="language">Language</label>
                <select name="language" required>
                  <option value="English">English</option>
                  <option value="Arabic">Arabic</option>
                  <option value="French">French</option>
                </select>
              </div>
              <div class="form-radio">
                <label for="type">to be</label>
                <div class="form-flex">
                  <input type="radio" name="type" value="rented" id="male" required />
                  <label for="male" style="width:50%;">Rented</label>

                  <input type="radio" name="type" value="bought" id="female" required />
                  <label for="female" style="width:50%;">Bought</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label id="price" for="price">Price ($)</label>
              <input type="number" class="form-input" name="price" id="phone_number" step="off" required />
            </div>
            <div class="form-row">
              <div class="form-group form-icon">
                <label for="birth_date">Publication date</label>
                <input type="text" class="form-input" name="publication" id="birth_date" placeholder="optional" required />
              </div>
              <div class="form-group">
                <label for="cover">book's cover</label>
                <div class="input-group">
                  <input type="file" name="bookCover" class="text-center center-block file-upload" required>
                </div>
              </div>
            </div>
            <div class="form-text">
              <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Additional info</a>
              <div class="add_info">
                <div class="form-group">
                  <label for="reference">online reference</label>
                  <input type="text" class="form-input" name="reference" id="email" placeholder="ie. www.goodreads.com/" required />
                </div>
                <div class="form-group">
                  <label for="country">category</label>
                  <select name="category" required>
                    <option value="nonfiction">Non-fiction</option>
                    <option value="computers">Computers</option>
                    <option value="drama">Drama</option>
                    <option value="criticism">Criticism</option>
                    <option value="cooking">Cooking</option>
                    <option value="business">Business</option>
                    <option value="biography">Biography</option>
                    <option value="health">Health</option>
                    <option value="humor">Humor</option>
                    <option value="actionandadventure">Action & Adventure</option>
                    <option value="romance">Romance</option>
                    <option value="mysteryandthriller">Mystery & Thriller</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="children">Children</option>
                    <option value="biosandhistory">Bios & History</option>
                    <option value="horror">Horror</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="last_name">description</label>
                  <textarea name="description" class="form-control" id="exampleFormControlTextarea4" rows="3" style="width:100%;"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="addBook" id="submit" class="form-submit" value="Submit" style="width:50%; background:#00cc00 " />
              <input type="reset" name="submit" id="submit" class="form-submit" value="cancel" style="background:crimson; margin-right:50px; width:20%;" onclick="document.getElementById('addBook').style.display='none';" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <!-- 
================================================== 
    Works Section Start
================================================== -->
  <section class="works service-page" style="background:rgb(230, 230, 230)">
    <!-- 
================================================== 
    Selling Container
================================================== -->


    <br>
    <br>
    <br>

    <div class="container" style="overflow:auto ;background-color:rgb(255,255,255); box-shadow: 10px 10px 12px grey; ">

      <button style="width:62px; background : #f44336; border-radius : 100% ; float :right; margin:5%;" onclick="document.getElementById('addBook').style.display='block'">
        <i class="	glyphicon glyphicon-plus" style="font-size: 26px; text-align:center;"></i>
      </button>
      <br>
      <br>

      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms" style="font-size : 40px ;margin-left:5%;">
        your list for selling
      </h2>

      <br />

      <br />
      <br />
      <br />

      <div class="row" style="margin-left:5%">

        <?php
        $usernameProfile = $_SESSION['username'];
        $db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
        $query = mysqli_query($db, "SELECT * FROM books WHERE type = 'bought' and owner = '$usernameProfile'");
        // echo mysqli_num_rows($query);

        for ($i = 0; $i < mysqli_num_rows($query); $i++) {
          $result = mysqli_fetch_array($query);
          // echo $result['bookno'];
          $temp = $result['bookno'];


          /* echo '
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">
              <div class="img-wrapper">
                <img src="booksCovers/'; */

          if ($result) {
            echo '
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:300px;">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey;">
            <div class="img-wrapper">
              <img src="booksCovers/';
            echo $result['cover'] . '" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
              <div class="mybooks-overlay">
                <div class="desc">


                  <div class="description">';
            echo $result['description'] . '
                  </div>
                  <a class="details" target="_blank" href="bookdetails.php?id=' . $temp . '">Learn More</a>
                </div>
              </div>
            </div>
            <figcaption>


            <a href="checkout.php?id=' . $temp . '" > 
            <button class="myButt one" type = "submit" name = "Order_now">
              <div class="insider"></div>';
            echo $result['price'] . '$                
            </button>
            </a>

              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>
           ';
          }
        }



        include('addBook.php');
        ?>

      </div>
    </div>

    <!-- 
================================================== 
   End of Selling Container
================================================== -->



    <br />
    <br />
    <br />
    <br />

    <!-- 
================================================== 
  Borrowing Container
================================================== -->

    <div class="container" style="overflow:auto ;background-color:rgb(255,255,255); box-shadow: 10px 10px 12px grey; ">
      <br>
      <br>


      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms" style="font-size : 40px ;margin-left:5%;">
        your list for Borrowing
      </h2>

      <br />

      <br />
      <br />
      <br />

      <div class="row" style="margin-left:5%">

        <?php
        $usernameProfile = $_SESSION['username'];
        $db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
        $query = mysqli_query($db, "SELECT * FROM books WHERE type = 'rented' and owner = '$usernameProfile' ");
        // echo mysqli_num_rows($query);

        for ($i = 0; $i < mysqli_num_rows($query); $i++) {
          $result = mysqli_fetch_array($query);
          // echo $result['bookno'];
          $temp = $result['bookno'];


          /* echo '
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">
              <div class="img-wrapper">
                <img src="booksCovers/'; */


          if ($result) {
            echo '
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:300px;">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey;">
            <div class="img-wrapper">
              <img src="booksCovers/';
            echo $result['cover'] . '" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
              <div class="mybooks-overlay">
                <div class="desc">


                  <div class="description">';
            echo $result['description'] . '
                  </div>
                  <a class="details" target="_blank" href="bookdetails.php?id=' . $temp . '">Learn More</a>
                </div>
              </div>
            </div>
            <figcaption>


        
                  <a href="checkout.php?id=' . $temp . '" > 
              <button class="myButt one" type = "submit" name = "Order_now">
                <div class="insider"></div>';
            echo $result['price'] . '$\month                 
              </button>
              </a>


              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>
           ';
          }
        }



        include('addBookRented.php');
        ?>


      </div>
    </div>


    <!-- 
  ================================================== 
     End of Borrowing Container
  ================================================== -->


    <!-- 
  ================================================== 
     Wishlist
  ================================================== -->

    <br />
    <br />
    <br />
    <br />

    <div class="container" style="overflow:auto ;background-color:rgb(255,255,255); margin-bottom: 200px; box-shadow: 10px 10px 12px grey; ">



      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms" style="font-size : 40px ;margin-left:5%;">
        Wishlist
      </h2>

      <br />

      <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms" style="font-size:32px; margin-left:5%;">
        total : ?
      </p>
      </p>

      <br />
      <br />
      <br />

      <div class="row" style="margin-left : 5%;">


        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:300px;">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey;">
            <div class="img-wrapper">
              <img src="D:\Web-project\images\books\gf.jpg" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
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



              <button class='myButt one' style="font-size: 16px;">
                <div class='insider'></div>
                3.99$/month
              </button>


              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>


        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:300px;">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey;">
            <div class="img-wrapper">
              <img src="D:\Web-project\images\books\harry.jpg" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
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



              <button class='myButt one'>
                <div class='insider'></div>
                20.00$
              </button>


              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>




        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width:300px;">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey;">
            <div class="img-wrapper">
              <img src="D:\Web-project\images\books\lotr.jpg" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
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



              <button class='myButt one'>
                <div class='insider'></div>
                20.00$
              </button>


              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>



        <div id="idshere" class="row">










        </div>

      </div>
    </div>
    <!--
  ================================================== 
  End of wishlist Container
  ================================================== -->

  </section>









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
  <!---------------------------addBook Start----------------------->
  <!-- JS -->
  <script src="addBook/vendor/jquery/jquery.min.js"></script>
  <script src="addBook/vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="addBook/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="addBook/vendor/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="addBook/js/main.js"></script>

  <script src="js/main.js"></script>
  <script src="js/myScript.js"></script>


  <script>
    function find_id(id) {

      var book_id = id;
      $('#idshere').load("bookdetails.php", {
        ids: book_id
      });

    }
  </script>



</body>

</html>
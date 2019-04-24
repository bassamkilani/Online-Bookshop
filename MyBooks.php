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

         <!-- Font Icon -->
    <link
    rel="stylesheet"
    href="addBook/fonts/material-icon/css/material-design-iconic-font.min.css"
  />
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
              />
            </li>
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
  
   
    <div id="addBook" class="main">
      <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
          <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
              <div class="form-row">
                <div class="form-group">
                  <label for="first_name">Title</label>
                  <input
                    type="text"
                    class="form-input"
                    name="title"
                    id="first_name"
                  />
                </div>
                <div class="form-group">
                  <label for="last_name">Author</label>
                  <input
                    type="text"
                    class="form-input"
                    name="author"
                    id="last_name"
                  />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="language">Language</label>
                  <div class="select-list">
                    <select name="language" id="language" required>
                      <option value="EN">English</option>
                      <option value="AR">Arabic</option>
                      <option value="FR">French</option>
                    </select>
                  </div>
                </div>
                <div class="form-radio">
                  <label for="type">to be</label>
                  <div class="form-flex">
                    <input
                      type="radio"
                      name="type"
                      value="rented"
                      id="male"
                      checked="checked"
                    />
                    <label for="male" style="width:50%;">Rented</label>

                    <input
                      type="radio"
                      name="type"
                      value="bought"
                      id="female"
                    />
                    <label for="female" style="width:50%;">Bought</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label id="price" for="price">Price ($)</label>
                <input
                  type="number"
                  class="form-input"
                  name="price"
                  id="phone_number"
                  step="0.1"
                  min="5"
                  max="1000"
                />
              </div>
              <div class="form-row">
                <div class="form-group form-icon">
                  <label for="birth_date">Publication date</label>
                  <input
                    type="text"
                    class="form-input"
                    name="publication"
                    id="birth_date"
                    placeholder="optional"
                  />
                </div>
                <div class="form-group">
                  <label for="cover">book's cover</label>
                  <div class="input-group">                    
                    <div class="custom-file">
                      <input
                        type="file"
                        class="custom-file-input"
                        id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01" style="margin-top:5px;"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-text">
                <a href="#" class="add-info-link"
                  ><i class="zmdi zmdi-chevron-right"></i>Additional info</a
                >
                <div class="add_info">
                  <div class="form-group">
                    <label for="reference">online reference</label>
                    <input
                      type="text"
                      class="form-input"
                      name="reference"
                      id="email"
                      placeholder="ie. www.goodreads.com/"
                    />
                  </div>
                  <div class="form-group">
                    <label for="country">category</label>
                    <div class="select-list">
                      <select name="country" id="country" required>
                        <option value="art">Art</option>
                        <option value="bio">Biography</option>
                        <option value="bus">Business</option>
                        <option value="childrn">Children</option>
                        <option value="christ">Christian</option>
                        <option value="clsc">Classic</option>
                        <option value="cmcs">Comics</option>
                        <option value="ckbk">CookBooks</option>
                        <option value="fntsy">Fantasy</option>
                        <option value="fktion">Fiction</option>
                        <option value="hstry">History</option>
                        <option value="hrr">Horror</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="last_name">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" style="width:100%;"></textarea>
                </div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="Submit"
                  style="width:40%;"
                />
                <input
                  type="reset"
                  name="submit"
                  id="submit"
                  class="form-submit"
                  value="cancel"
                  style="background:crimson; margin-right:50px; width: 20%;"
                  onclick="document.getElementById('addBook').style.display='none';"
                />
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
  <section class="works service-page">
    <!-- 
================================================== 
    Selling Container
================================================== -->


   <br>
   <br>
   <br>
   
  
    <div class="container">

      <button style="font-size :auto ; width:10%; background : #f44336; border-radius : 50px" onclick="document.getElementById('addBook').style.display='block'">
        +Add Book
      </button>
      <br>
      <br>

      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms" style = "font-size : 40px">
        your list for selling
      </h2>

      <br />

      <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
        total : ?
      </p>

      <br />
      <br />
      <br />

      <div class="row">


        <div class="col-lg-2 col-sm-3">
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
                  <a class="details" target="_blank" href="bookdetails.php">Learn More</a>
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

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>
      </form>
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

    <div class="container">


     
      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">
        your list for Borrowing
      </h2>

      <br />

      <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
        total : ?
      </p>

      <br />
      <br />
      <br />

      <div class="row">


        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
              <div class="mybooks-overlay">
                <div class="desc">


                  <div class="heart"></div>
                  <a class="details" target="_blank" href="#">Learn More</a>
                </div>
              </div>
            </div>
            <figcaption>
              <span>
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>
      </form>
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


    <div class="container">


      
      <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">
       Wishlist
      </h2>

      <br />

      <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
        total : ?
      </p>

      <br />
      <br />
      <br />

      <div class="row">


        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" />
              <div class="mybooks-overlay">
                <div class="desc">


                  <div class="heart"></div>
                  <a class="details" target="_blank" href="#">Learn More</a>
                </div>
              </div>
            </div>
            <figcaption>
              <span>
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>

        <div class="col-lg-2 col-sm-3">
          <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="img-wrapper">
              <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" />
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
                <label>Price : </label>
                <label class="price">20.00$</label></span>
            </figcaption>
          </figure>
        </div>
      </form>
    </div> 

   <!--
================================================== 
End of wishlist Container
================================================== -->






  </section>

  <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
  <section id="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">
            Our Happy Clinets
          </h2>
          <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore,
            error.
          </p>
          <div id="clients-logo" class="owl-carousel">
            <div>
              <img src="images/clients/logo-1.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-2.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-3.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-4.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-5.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-1.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-2.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-3.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-4.jpg" alt="" />
            </div>
            <div>
              <img src="images/clients/logo-5.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
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
              SO WHAT YOU THIN?
            </h2>
            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Nobis,<br />possimus commodi, fugiat magnam temporibus vero
              magni recusandae? Dolore, maxime praesentium.
            </p>
            <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s"
              data-wow-duration="500ms">Contact With Me</a>
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
            </script></span>
          Design and Developed by
          <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br />
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
    
</body>

</html>
<?php
include('server.php');
$usernameProfile = $_SESSION['username'];
$dbProfile = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");


$sqlProfile = "SELECT * FROM user WHERE username = '$usernameProfile'";
$queryProfile = mysqli_query($dbProfile, $sqlProfile);
$fetchAssocProfile = mysqli_fetch_assoc($queryProfile);
$fullnameProfile = $fetchAssocProfile["fullname"];
$emailProfile = $fetchAssocProfile["email"];
$addressProfile = $fetchAssocProfile["address"];
$phoneProfile = $fetchAssocProfile["phone"];
$countryProfile = $fetchAssocProfile["country"];

$sqlBilling = "SELECT * FROM billinginfo WHERE username = '$usernameProfile'";
$queryBilling = mysqli_query($dbProfile, $sqlBilling);
$fetchAssocBilling = mysqli_fetch_assoc($queryBilling);
$fullnameBilling = $fetchAssocBilling["fullname"];
$address1Billing = $fetchAssocBilling["address1"];
$address2Billing = $fetchAssocBilling["address2"];
$zipBilling = $fetchAssocBilling["zip"];
$cityBilling = $fetchAssocBilling["city"];
$countryBilling = $fetchAssocBilling["country"];
$card_num = $fetchAssocBilling["card_num"];
$date = $fetchAssocBilling["date"];
$balance = $fetchAssocBilling["balance"];


if (isset($_POST['saveProfile'])) {
  $fullnameProfile = mysqli_real_escape_string($db, $_POST['fullname']);
  $emailProfile = mysqli_escape_string($db, $_POST['email']);
  $addressProfile = mysqli_escape_string($db, $_POST['address']);
  $phoneProfile = mysqli_escape_string($db, $_POST['phone']);
  $countryProfile = mysqli_escape_string($db, $_POST['country']);
  
  
  
  //form validation

  if (empty($fullnameProfile)) {
    array_push($errors, "Full name is required");
  }

  if (empty($emailProfile)) {
    array_push($errors, "Email is required");
  }
  if (empty($addressProfile)) {
    array_push($errors, "Address is required");
  }
  if (empty($phoneProfile)) {
    array_push($errors, "Phone# is required");
  }
  if (empty($countryProfile)) {
    array_push($errors, "Country is required");
  }

  if (count($errors) == 0) {
    $query = "UPDATE user SET 
    fullname = '$fullnameProfile',
    email = '$emailProfile',
    address = '$addressProfile',
    phone = '$phoneProfile',
    country = '$countryProfile'
    WHERE username = '$usernameProfile';";
    mysqli_query($db, $query);
    $_SESSION['username'] = $usernameProfile;
    $_SESSION['success'] = "Data updated successfully";
    header('location: profile.php');
  }

}


/// assert the credit address 


if(isset($_POST['add_credit'])){
  
$credit_scan = mysqli_escape_string($db, $_POST["credit_num"]);
$credit_date = mysqli_escape_string($db, $_POST["credit_date"]);

if (empty($credit_scan)) {
  array_push($errors, "enter the number silly :)");
  echo "credit num";
}

if (empty($credit_date)) {
  array_push($errors, "date is required");
  echo "credit date";
}

if (count($errors) == 0) {
  $querys = "UPDATE billinginfo SET card_num = '$credit_scan' , date = '$credit_date' where username = '$usernameProfile'; ";
  mysqli_query($dbProfile, $querys);
}

}




if(isset($_POST['add_balance'])){
  
  $insert_balance = mysqli_escape_string($db, $_POST["balance_value"]);
  
  
  if (empty($insert_balance)) {
    array_push($errors, "enter the number please");
  }
  
  
  if (count($errors) == 0) {
    $querys = "UPDATE billinginfo SET balance = '$insert_balance' where username = '$usernameProfile'; ";
    mysqli_query($dbProfile, $querys);
    header('location: checkout.php');  }  
  
  }
  




if (isset($_POST['saveAddress'])) {
  $fullNameInput = mysqli_real_escape_string($db, $_POST['fullNameInput']);
  $address1Input = mysqli_escape_string($db, $_POST['address1Input']);
  $address2Input = mysqli_escape_string($db, $_POST['address2Input']);
  $zipInput = mysqli_escape_string($db, $_POST['zipInput']);
  $cityInput = mysqli_escape_string($db, $_POST['cityInput']);
  $countryInput = mysqli_escape_string($db, $_POST['countryInput']);

  //form validation

  if (empty($fullNameInput)) {
    array_push($errors, "Full name is required");
  }

  if (empty($address1Input)) {
    array_push($errors, "Address is required");
  }
  if (empty($address2Input)) {
    array_push($errors, "Address is required");
  }
  if (empty($zipInput)) {
    array_push($errors, "ZIP# is required");
  }
  if (empty($cityInput)) {
    array_push($errors, "City is required");
  }
  if (empty($countryInput)) {
    array_push($errors, "Country is required");
  }

  if (count($errors) == 0) {
    $query = "UPDATE billinginfo SET 
        fullname = '$fullNameInput',
        address1 = '$address1Input',
        address2 = '$address2Input',
        zip = '$zipInput',
        city = '$cityInput',
        country = '$countryInput'
        WHERE username = '$usernameProfile';";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Billing info updated successfully";
    header('location: profile.php');
  }
}

$msg = "";
if (isset($_POST['upload'])) {
  //path to store images
  $target = "profilePictures/" . basename($_FILES['image']['name']);
  //connect to db
  $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
  //get submitted data
  $image = $_FILES['image']['name'];
  $sql = "UPDATE user SET image = '$image' WHERE username = '$usernameProfile';";
  mysqli_query($db, $sql);
  //moving uplodad picture to the folder
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "There was an problem uploading image";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>profile</title>
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
                    <a href="index-loggedin.php">
                        <img style="width: 100%;" src="" alt="" />
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                  <?php include('signin.php'); ?>
                    <!-- <ul class="nav navbar-nav navbar-right" style="width:1300px; margin-right: -370px;">
                        <li>
                            <input type="search" class="form-control" placeholder="search.." style="width: 500px; margin-right:100px;" />
                          </li>
                        <li>
                            <a href="index-loggedin.php">Home</a>
                        </li>
                        <li><a href="MyBooks.php">My Books</a></li>

                        <li>
                            <a href="browse.php">Store</a>
                        </li>
                     
                        <li style="width: 10%; border: none;" class="dropdown">
                            <a href="#" id="logOutBtn" class="dropdown-toggle" data-toggle="dropdown">
                                </?php
                                echo $usernameindex;
                                ?>
                                <span class="glyphicon glyphicon-user pull-right"></span></a>
                            <ul style="width:200px;" class="dropdown-menu">
                                <li><a href="profile.php">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                <li class="divider"></li>

                                <li><a href="logout.php">Sign Out <span class=" glyphicon glyphicon-log-out pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul> -->
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>






  <!-- 
                          ================================================== 
                              Global Page Section Start
                          ================================================== -->
  <section>

    <div class="row" value  >
      <div class="col-md-12">
        <br>
        <br>
        <br>
        <br> <br>
        <br> <br>
        <br>
      </div>
    </div>
  </section>
  <hr>

  <section id="works" class="works" style="background-color : #fff;">
    <div class="container bootstrap snippet">
      <div class="row">
        <div class="col-sm-10">
          <h1 id><?php echo $usernameProfile; ?></h1>
        </div>

      </div>
      <div class="row">

        <div class="col-sm-3 list-group">
          <!--left col-->
          <?php
          $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
          $query = "SELECT image FROM user WHERE username = '$usernameProfile';";
          $results = mysqli_query($db, $query);
          $imagesrc = mysqli_fetch_array($results);
          ?>

          <div class="text-center list-group-item text-muted">
            <img id="avatarImage" src="profilePictures/<?php echo $imagesrc[0]; ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="width : 250px; height :250px;">
            <h6>Change your picture...</h6>
            <form action="profile.php" method="post" enctype="multipart/form-data">
              <input type="file" name="image" class="text-center center-block file-upload">
              <br>
              <input type="submit" name="upload" value="Save Image">
            </form>

            <hr><br>

            <button class="btn btn-lg btn-success"><i class="glyphicon glyphicon-ok-sign"></i>
            </button>

            <button class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-remove-sign"></i>
            </button>
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
            <li><a data-toggle="tab" href="#messages" style="color : #444; font-weight:bold ; font-size : 15px;">billing info</a></li>

          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <?php include('errors.php'); ?>
              <hr>
              <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">
                  <div class="col-sm-6 col-xs-12">
                    <label for="first_name">
                      <h4>Full Name</h4>
                    </label>
                    <input type="text" class="form-control" name="fullname" id="first_name" value="<?php echo $fullnameProfile; ?>" style = "width:80%;"required>
                  </div>
                </div>
              
                  <div class="form-group">
                  <div class="col-sm-6 col-xs-12">
                      <label for="email">
                        <h4>Email</h4>
                      </label>
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $emailProfile; ?>"  style = "width:80%;"required>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-6 col-xs-12">
                      <label for="email">
                        <h4>Country</h4>
                      </label>
                      <select name="country" class="form-control" style = "width:80%;"required>
                        <option disabled selected value> <?php echo $countryProfile; ?> </option>
                        <option value="Germany">Germany</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="France">France</option>
                        <option value="Finland">Finland</option>
                        <option value="Nuezeland">Nuezeland</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-6 col-xs-12">
                      <label for="phone">
                        <h4>City/State</h4>
                      </label>
                      <input type="text" class="form-control" name="address" id="phone" value="<?php echo $addressProfile; ?>" style = "width:80%;" required>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-6 col-xs-12">
                      <label for="mobile">
                        <h4>Phone</h4>
                      </label>
                      <input type="text" class="form-control" name="phone" id="mobile" value="<?php echo $phoneProfile; ?>" style = "width:80%;" required>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-12 col-xs-12">
                      <br>
                      <button class="btn btn-lg btn-success" type="submit" name="saveProfile"><i class="glyphicon glyphicon-ok-sign"></i>
                        Save</button>
                      <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                    </div>
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


                
                  <h3>Ship my order to&hellip;</h3>
                  <div class="list-group" style = "overflow:hidden;">
                    <div class="list-group-item">
                      <div class="list-group-item-heading">
                        <div class="row radio">
                          <div class="col-xs-3">
                            <label>
                              <input type="radio" name="optionShipp" id="optionShipp1" value="option2">
                              <h4 id="savedAddress1"><?php
                                                      if (!empty($zipBilling) and !empty($address1Billing)) {
                                                        echo $zipBilling . " " . $address1Billing;
                                                      } else {
                                                        if (empty($zipBilling)) {
                                                          echo "N/A ";
                                                        }
                                                        if (empty($address1Billing)) {
                                                          echo "N/A ";
                                                        }
                                                      }
                                                      ?></h4>
                            </label>
                          </div>
                          <div class="col-xs-5">
                            <h4><b id="savedName"><?php
                                                  if (empty($fullnameBilling)) {
                                                    echo "N/A ";
                                                  } else {
                                                    echo $fullnameBilling;
                                                  }
                                                  ?></b></h4>
                            <h4 id="savedAddress2"><?php
                                                    if (!empty($zipBilling) and !empty($address1Billing) and !empty($countryBilling) and !empty($address2Billing)) {
                                                      echo $zipBilling . " " . $address1Billing . "," . " " . $countryBilling . "," . " " . $address2Billing;
                                                    } else {
                                                      if (empty($zipBilling)) {
                                                        echo "N/A ";
                                                      }
                                                      if (empty($address1Billing)) {
                                                        echo "N/A ";
                                                      }
                                                      if (empty($countryBilling)) {
                                                        echo "N/A ";
                                                      }
                                                      if (empty($address2Billing)) {
                                                        echo "N/A ";
                                                      }
                                                    }
                                                    ?></h4>
                            <button name="delAddress" name="#delAddress" class="btn btn-sm btn-danger " onclick="deleteAddress();">Delete this address</button>
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
                            <form action="##" method="post">
                              <div class="row">
                                <div class="col-xs-9">
                                  <div class="form-group">
                                    <label for="inputZip">Full Name</label>
                                    <input type="text" class="form-control form-control-large" id="inputfirst" placeholder="Full Name" name="fullNameInput" style = "width:80%;">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputAddress1">Street address 1</label>
                                <input type="text" class="form-control form-control-large" id="inputAddress1" placeholder="Enter address" name="address1Input" style = "width:59.5%;">
                              </div>
                              <div class="form-group">
                                <label for="inputAddress2">Street address 2</label>
                                <input type="text" class="form-control form-control-large" id="inputAddress2" placeholder="Enter address" name="address2Input" style = "width:59.5%;">
                              </div>
                              <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                  <div class="form-group">
                                    <label for="inputZip">ZIP Code</label>
                                    <input type="text" class="form-control form-control-small" id="inputZip" placeholder="Enter zip" name="zipInput">
                                  </div>
                                </div>
                                <div class="col-sm-9 col-xs-12">
                                  <div class="form-group">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control form-control-small" id="inputCity" placeholder="Enter city" name="cityInput">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputState" class="control-label" >State</label>
                                <select class="form-control form-control-large" name="countryInput" style = "width:59.5%;">
                                  <option disabled selected value> -- select an option -- </option>
                                  <option value="Germany">Germany</option>
                                  <option value="Palestine">Palestine</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="France">France</option>
                                  <option value="Finland">Finland</option>
                                  <option value="Nuezeland">Nuezeland</option>
                                </select>
                              </div>
                              <button class="btn btn-sm btn-success" type="submit" name="saveAddress">Save Address</button>
                            </form>
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
                                  <h4 id="savedAddress2"><?php
                                                          if (!empty($card_num)) {
                                                            echo $card_num . " ";
                                                          } else {
                                                            if (empty($card_num)) {
                                                              echo "N/A ";
                                                            }
                                                          }
                                                          ?></h4>
                                </dl>
                              </div>
                              <div class="col-xs-3">
                                <dl class="dl-small">
                                  <dt>Expiration</dt>
                                  <h4 id="savedAddress2"><?php
                                                          if (!empty($date)) {
                                                            echo $date . " ";
                                                          } else {
                                                            if (empty($date)) {
                                                              echo "N/A ";
                                                            }
                                                          }
                                                          ?></h4>
                                </dl>
                              </div>
                              <div class="col-xs-5">
                                <dl class="dl-small">
                                  <dt>Billing Address</dt>
                                  <dd>
                                    <h4 id="savedAddress2"><?php
                                                            if (!empty($zipBilling) and !empty($address1Billing) and !empty($countryBilling) and !empty($address2Billing)) {
                                                              echo $zipBilling . " " . $address1Billing . "," . " " . $countryBilling . "," . " " . $address2Billing;
                                                            } else {
                                                              if (empty($zipBilling)) {
                                                                echo "N/A ";
                                                              }
                                                              if (empty($address1Billing)) {
                                                                echo "N/A ";
                                                              }
                                                              if (empty($countryBilling)) {
                                                                echo "N/A ";
                                                              }
                                                              if (empty($address2Billing)) {
                                                                echo "N/A ";
                                                              }
                                                            }
                                                            ?></h4>
                                  </dd>
                                </dl>
                              </div>
                            </div>
                            <form method = "POST" action = "profile.php">
                              <div class="checkbox">
                                <label data-toggle="collapse" data-target="#credit">
                                  <input type="checkbox"> Edit Card Info
                                </label>
                              </div>

                              <div class="form-group collapse" id="credit" style = "overflow:hidden;">
                                <br>
                                <div>
                                  <label for="inputAddress1">Card Number</label>
                                  <input type="text" class="form-control form-control-large" id="creditCardNum" placeholder="XXXX-XXXX-XXXX-XXXX" name = "credit_num">
                                </div>
                                <br>

                                <div class="form-group">
                                  <label for="inputCity">Date</label>
                                  <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="MM/YY" name = "credit_date">
                                </div>

                                <br>
                                   
                                <button class="btn btn-sm btn-success" type="submit"  name = "add_credit">ADD</button>
                                <br>



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
                                         <h4 id="savedAddress2"><?php
                                                          if (!empty($balance)) {
                                                            echo $balance . "$";
                                                          } else {
                                                            if (empty($balance)) {
                                                              echo "0.00$";
                                                            }
                                                          }
                                                          ?></h4>
                                  </dl>
                                </div>


                              </div>
                              <form role="form" method = "POST" action = "profile.php">
                                <div class="checkbox">
                                  <label data-toggle="collapse" data-target="#Balance">
                                    <input type="checkbox"> Add Balance
                                  </label>
                                </div>
                                <div class="form-group collapse" id="Balance">
                                  <br>
                                  <div>
                                   
                                 
                                    <br>
                                    <label for="inputAddress1">Enter Balance</label>
                                    <input type="text" class="form-control" style="width : auto" id="inputCity" placeholder="" name = "balance_value">

                                  </div>
                                  <br>

                                  <button type = "submit" class="btn btn-sm btn-success" name = "add_balance">ADD</button>

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
  <script>
    function deleteAddress() {
      // 1. Create XHR instance - Start
      var xhr;
      if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
      } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
      } else {
        throw new Error("Ajax is not supported by this browser");
      }
      // 1. Create XHR instance - End

      // 2. Define what to do when XHR feed you the response from the server - Start
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
          if (xhr.status == 200 && xhr.status < 300) {
            // savedAddress1 is radioBtn (left)
            // savedAddress2 is address (right)
            // savedName is saved name (right no)
            document.getElementById('savedAddress1').innerHTML = "N/A";
            document.getElementById('savedAddress2').innerHTML = "N/A";
            document.getElementById('savedName').innerHTML = "N/A";
          }
        }
      }
      // 2. Define what to do when XHR feed you the response from the server - Start

      var username = <?php echo $usernameProfile; ?>;

      // 3. Specify your action, location and Send to the server - Start 
      xhr.open('POST', 'billingInfo.php');
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.send("username=" + username);
      // 3. Specify your action, location and Send to the server - End
    }
  </script>
</body>

</html>
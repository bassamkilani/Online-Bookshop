<?php
include('server.php');
if (!$_SESSION['username']) {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$usernameProfile = $_SESSION['username'];
$dbProfile = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");


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


if (isset($_POST['add_credit'])) {

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




if (isset($_POST['add_balance'])) {

  $insert_balance = mysqli_escape_string($db, $_POST["balance_value"]);


  if (empty($insert_balance)) {
    array_push($errors, "enter the number please");
  }


  if (count($errors) == 0) {
    $querys = "UPDATE billinginfo SET balance = '$insert_balance' where username = '$usernameProfile'; ";
    mysqli_query($dbProfile, $querys);
    header('location: checkout.php');
  }
}


if (isset($_POST['Order_now'])) {

  $usernameProfile = $_SESSION['username'];
  $dbProfile = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");


  $sqlBilling = "SELECT * FROM books WHERE username = '$usernameProfile'";
  $queryBilling = mysqli_query($dbProfile, $sqlBilling);
  $fetchAssocBilling = mysqli_fetch_assoc($queryBilling);

  $book_price = $fetchAssocBilling["price"];

  if (empty($book_price)) {
    array_push($errors, "enter the number please");
  }


  if (count($errors) == 0) {
    $querys = "UPDATE billinginfo SET balance = '$price' where username = '$usernameProfile'; ";
    mysqli_query($dbProfile, $querys);
    header('location: checkout.php');
  }
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
<!doctype html>
<html lang="en">

<head>
  <title>Checkout</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
  <title>Checkout</title>

  <!-- template main css file 
        <link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" type="text/css" href="css/checkout.css" />
</head>

<body class="bg-light">
  <div class="whole">
    <div class="container">
      <div class="py-5 text-center">

        <h2>Checkout form</h2>

      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">

          <ul class="list-group mb-3" style="margin-top : 100px; margin-left:50px; border : 3px solid green; ">

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong><?php echo $balance . "$" ?></strong>
            </li>
          </ul>


        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>


            <label for="lastName">Full name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $fullnameBilling; ?>" required>
            <div class="invalid-feedback">
              Full name is required.

            </div>


            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $usernameProfile; ?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" value="<?php echo $address1Billing; ?> " required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" value="<?php echo $address2Billing; ?> ">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">City</label>
                <input type="text" class="form-control" id="State" placeholder="State" value="<?php echo $cityBilling ?>" required>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" value="<?php echo $countryBilling ?>" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" value="<?php echo $zipBilling ?>" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" value="<?php echo $card_num; ?>" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" value="<?php echo $date; ?>" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 hamza</p>
        <br>
        <br>
        <br>

      </footer>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
                ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>
<?php
$category = $_POST['cat'];
$db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
$query = mysqli_query($db, "SELECT * FROM books WHERE category = '$category'");
// echo mysqli_num_rows($query);

for ($i = 0; $i < mysqli_num_rows($query); $i++) {
    $result = mysqli_fetch_array($query);
    // echo $result['bookno'];
    $temp = $result['bookno'];


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



              <button class="myButt one">
                <div class="insider"></div>';
  echo $result['price'] . '$                
              </button>


              <div class="heart"></div>

            </figcaption>
          </figure>
        </div>
           ';
}
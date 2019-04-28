<?php

/* $db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");

$return_arr = array();  
$category = $_POST['category'];

    $query = "SELECT * FROM books WHERE category = '$category';";
    $results = mysqli_query($db, $query);

    while ($row = mysqli_fetch_array($results)) {
        $title = $row['title'];
        $author = $row['author'];
        $language = $row['language'];
        $type = $row['type'];
        $price = $row['price'];
        $publicationDate = $row['publication'];
        $reference = $row['reference'];
        $description = $row['description'];
        $category = $row['category'];
        $image = $row['image'];


        $return_arr[] = array(
            "title" => $title,
            "author" => $author,
            "language" => $language,
            "type" => $type,
            "price" => $price,
            "publication" => $publication,
            "reference" => $reference,
            "description" => $description,
            "category" => $category,
            "image" => $image
        );
    }

    // Encoding array in JSON format
    echo json_encode($return_arr);

 */

$category = $_POST['cat'];
$db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
$query = mysqli_query($db, "SELECT bookno FROM books WHERE category = '$category'");
// echo mysqli_num_rows($query);

for ($i = 0; $i < mysqli_num_rows($query); $i++) {
    $result = mysqli_fetch_array($query);
    // echo $result['bookno'];
    $temp = $result['bookno'];


echo '
          <div id = "';
echo $temp;
echo '" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">
              <div class="img-wrapper">
                <img src="booksCovers/';
$queryImage = "SELECT cover from books where bookno = '$temp';";
$resultsImage = mysqli_query($db, $queryImage);
$imagesrc = mysqli_fetch_array($resultsImage);
echo $imagesrc[0];
echo '" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
                <div class="mybooks-overlay">
                  <div class="desc">
                    <div class="description">';
$query2 = "SELECT description FROM books WHERE bookno = '$temp';";
$results = mysqli_query($db, $query2);
$book = mysqli_fetch_array($results);
echo $book[0];
echo '
                    </div>
                    <a class="details" target="_blank " href=" #">Learn More</a>
                  </div>
                </div>
              </div>
              <figcaption>



                <button class="myButtone">
                  <div class="insider"> </div>
                  20. 00$
                </button>


                <div class="heart"></div>

              </figcaption>
            </div>
            </div>';
}
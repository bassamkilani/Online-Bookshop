<?php
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
        $_SESSION['title'] = $title;

        $usernameProfile = $_SESSION['username'];
        $db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
        $query = mysqli_query($db, "SELECT bookno FROM books WHERE 1");
        // echo mysqli_num_rows($query);

        for ($i = 0; $i < mysqli_num_rows($query); $i++) {
            $result = mysqli_fetch_array($query);
            // echo $result['bookno'];
            $temp = $result['bookno'];}

        echo '
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">
              <div class="img-wrapper">
                <img src="booksCovers/';
        $queryImage = "SELECT cover from books where bookno = '$temp' and type = 'rented';";
        $resultsImage = mysqli_query($db, $queryImage);
        $imagesrc = mysqli_fetch_array($resultsImage);
        echo $imagesrc[0];
        echo '" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
                <div class="mybooks-overlay">
                  <div class="desc">
                    <div class="description">';
        $query2 = "SELECT description FROM books WHERE bookno = '$temp' and type = 'rented';";
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

        /* ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms" style="box-shadow: 0px 10px 12px grey; width:80%">
                <div class="img-wrapper">
                    <img src="booksCovers/<?php $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
                                            $query = "SELECT bookno FROM books WHERE 1;";
                                            $results = mysqli_query($db, $query);
                                            $bookID = mysqli_fetch_array($results);
                                            $length = count($bookID);
                                            $queryImage = "SELECT cover from books where bookno = '$length';";
                                            $resultsImage = mysqli_query($db, $queryImage);
                                            $imagesrc = mysqli_fetch_array($resultsImage);
                                            echo $imagesrc[0]; ?>" class="img-responsive" alt="this is a title" style="width : 450px ; height :320px; " />
                    <div class="mybooks-overlay">
                        <div class="desc">


                            <div class="description">
                                <?php $query = "SELECT description FROM books WHERE bookno = '$length';";
                                $results = mysqli_query($db, $query);
                                $book = mysqli_fetch_array($results);
                                echo $book[0]; ?>
                            </div>
                            <a class="details" target=" _blank " href=" #">Learn More</a>
                        </div>
                    </div>
                </div>
                <figcaption>



                    <button class='myButtone'>
                        <div class='insider'> </div>
                        20. 00$
                    </button>


                    <div cl a ss="heart"></div>

                </figcaption>
            </div>
        </div>
           <?php  */}
            }
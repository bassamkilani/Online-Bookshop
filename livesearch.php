<?php

$con = MySQLi_connect(
    "localhost", //Server host name.
    "root", //Database username.
    "", //Database password.
    "mywebsite" //Database name or anything you would like to call it.
 );
 //Check connection
 if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
 }
 if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
    //Search query.
       $Query = "SELECT * FROM books WHERE title LIKE '%$Name%'";
    //Query execution
       $ExecQuery = MySQLi_query($con, $Query);
    //Creating unordered list to display result.
       echo '
    <ul style = "border:1px solid grey; overflow:auto; background:white;  height:400px"">
       ';

       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
            <hr>
       <li onclick='fill("<?php echo $Result["title"]; ?>")' style = "margin-left:25px;">
       <hr>
       <a href = "bookdetails.php?id=<?php echo $Result['bookno']; ?>">
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo $Result['title']; ?>
       </li></a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>


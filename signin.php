<?php
if (isset($_SESSION['username'])) { ?>

    <head>


        <!-- Including jQuery is required. -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    </head>


    <body>
        <ul class="nav navbar-nav navbar-right" style="width:1200px; margin-right: -270px;">
            <!-- Search form -->
            <li>
                <form>
                    <input type="text" id="search" class="form-control" placeholder="search.." style="width: 500px; margin-right:100px; margin-top:10px" />
                    <div id="display"></div>
                </form>
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li><a href="MyBooks.php">My Books</a></li>

            <li>
                <a href="browse.php">Store</a>
            </li>

            <li style="width: 10%; border: none;" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php
                    echo $_SESSION['username'];
                    ?>
                    <span class="glyphicon glyphicon-user pull-right"></span></a>
                <ul style="width:200px;" class="dropdown-menu">
                    <li><a href="profile.php">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                    <li class="divider"></li>

                    <li><a href="logout.php">Sign Out <span class=" glyphicon glyphicon-log-out pull-right"></span></a></li>
                </ul>
            </li>
        </ul>
    <?php
} else { ?>
        <ul class="nav navbar-nav navbar-right" style="width:1200px; margin-right: -270px;">
            <!-- Search form -->
            <li>
                <input type="search" class="form-control" placeholder="search.." style="width: 500px; margin-right:200px; margin-top:10px;" />
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>

            <li>
                <a href="browse.php">Store</a>
            </li>

            <li><a href="contact.php">Contact</a></li>

            <li>
                <a id="signin" class="btn btn-lg" onclick="document.getElementById('id01').style.display='block'">Signin</a>
            </li>
        </ul><?php
        }
        ?>

    <script>
        function fill(Value) {
            //Assigning value to "search" div in "search.php" file.
            $('#search').val(Value);
            //Hiding "display" div in "search.php" file.
            $('#display').hide();
        }
        $(document).ready(function() {
            //On pressing a key on "Search box" in "search.php" file. This function will be called.
            $("#search").keyup(function() {
                //Assigning search box value to javascript variable named as "name".
                var name = $('#search').val();
                //Validating, if "name" is empty.
                if (name == "") {
                    //Assigning empty value to "display" div in "search.php" file.
                    $("#display").html("");
                }
                //If name is not empty.
                else {
                    //AJAX is called.
                    $.ajax({
                        //AJAX type is "Post".
                        type: "POST",
                        //Data will be sent to "ajax.php".
                        url: "livesearch.php",
                        //Data, that will be sent to "ajax.php".
                        data: {
                            //Assigning value of "name" into "search" variable.
                            search: name
                        },
                        //If result found, this funtion will be called.
                        success: function(html) {
                            //Assigning result to "display" div in "search.php" file.
                            $("#display").html(html).show();
                        }
                    });
                }
            });
        });
    </script>
</body>
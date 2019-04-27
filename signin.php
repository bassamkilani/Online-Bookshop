<?php
if (isset($_SESSION['username'])) { ?>
     <ul class="nav navbar-nav navbar-right" style="width:1200px; margin-right: -270px;">
              <!-- Search form -->
              <li>
                  <input type="search" class="form-control" placeholder="search.." style="width: 500px; margin-right:100px; margin-top:10px" />
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

                      <li><a href="index.php?logout='1'">Sign Out <span class=" glyphicon glyphicon-log-out pull-right"></span></a></li>
                  </ul>
              </li>
          </ul>
<?php
} else { ?>
    <ul class="nav navbar-nav navbar-right" style="width:1200px; margin-right: -270px;">
        <!-- Search form -->
        <li>
            <input type="search" class="form-control" placeholder="search.." style="width: 500px; margin-right:200px;" />
        </li>
        <li>
            <a href="index-loggedin.php">Home</a>
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
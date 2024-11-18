<header class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="logo col-md-1">
                    <a class="logoa" href="/cms"> Home </a>
                </div>
                <nav class="col-md-11">
                    <ul class="menus">
                    <?php 
                    
                      $query = "SELECT * FROM categories";
                      $result = mysqli_query($conn, $query);

                      while($row = mysqli_fetch_assoc($result)){

                         $cat_title = $row["cat_title"];

                         echo "<li><a href=''> {$cat_title}</a></li>";
                      }
                    ?>
                    <li><a href="">Register</a></li>
                    <li><a href="">Login</a></li>

                        <!-- <li><a href="">One</a></li>
                        <li><a href="">One</a></li>
                        <li><a href="">One</a></li>
                        <li><a href="">One</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
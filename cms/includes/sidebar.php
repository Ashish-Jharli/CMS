<!-- Blog Search Well -->
<style>
    a {
        text-decoration: none;
    }
</style>
<div>

    <h4>Blog Search</h4>

    <form action="search.php" method="POST">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Search posts...">
            <span class="input-group-btn">
                <input type="submit" class="btn btn-primary" style="width: 100%; line-height: 5px;" value="Search">
            </span>
        </div>
    </form>

    <!-- /.input-group -->
</div>
<hr>
<!-- Blog Categories Well -->
<div>
    <h4>Blog Categories</h4>
    <div class="row">
       
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">

            <ul class="list-unstyled">
                <?php 
                            
                    $query = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($result)){

                    $cat_title = $row["cat_title"];

                    echo "<li><a href='#' style='text-decoration:none;'> {$cat_title}</a></li><br>";
                    }
                    ?>
                <!-- <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li> -->
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>The Sidebar widgets <b style="background-color:#e6a3ee6b;">add functionality to the Sidebar</b>. For instance, the Search widget adds a search bar to allow the user to quickly search through the website. The text widget, on the other hand, allows the editor to add text to the Sidebar.</p>
</div>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/sidebar.php"); ?>
    <div class="col-md-10 bg-light pad">
                <h1 class="head">Blank Page <small> Secondary </small></h1>
                <hr>
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <h2>Total Posts</h2>
                        <?php
                            $total_posts = "SELECT post_id FROM posts";
                            $result = mysqli_query($conn,$total_posts);
                            $count_post = mysqli_num_rows($result);

                            echo $count_post;
                        ?>
                    </div>
                    <div class="col-sm-6 text-center">
                        <h2>Total Categories</h2>
                        <?php
                            $total_posts = "SELECT cat_id FROM categories";
                            $result = mysqli_query($conn,$total_posts);
                            $count_post = mysqli_num_rows($result);

                            echo $count_post;
                        ?>
                    </div>
                </div>
            </div>
 <?php include("includes/footer.php"); ?>      
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <?php
                    if(isset($_GET["post_id"])){

                        $the_post_id = $_GET["post_id"];

                    }

                    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                    $result = mysqli_query($conn, $query);

                  while ($row = mysqli_fetch_assoc($result)) {
                    // $post_id = $row["post_id"];
                    $post_title = $row["post_title"];
                    $post_author = $row["post_author"];
                    $post_date = $row["post_date"];
                    $post_image = $row["post_image"];
                    $post_content = $row["post_content"];

                ?>

            <h2>
                <?php echo $post_title; ?>
            </h2>
            <p>by <a href='index.php'>
                    <?php echo $post_author ?>
                </a></p>
            <p>Posted on
                <?php echo $post_date ?> at 10:00 AM
            </p>
            <hr>
            <img class='size' src='images/<?php echo $post_image ?>' alt=''>
            <hr>
            <p>
                <?php echo $post_content; ?>
            </p>
            <!-- <hr> -->

            <?php   
                  }
             ?>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

            <?php include("includes/sidebar.php"); ?>

        </div>

    </div>
    <!-- /.row -->
    <!-- <hr> -->
    <?php include("includes/footer.php"); ?>
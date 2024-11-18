<?php  include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1 class="page-header"> CMS <small>- Content Management System</small> </h1>

            <!-- First Blog Post -->

            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    $search_post = $_POST['search'];

                    $search_query = "SELECT * FROM posts WHERE post_tags LIKE '%$search_post%'";

                    $search_result = mysqli_query($conn, $search_query);

                    if(mysqli_num_rows($search_result)  < 1){
                        
                        
                        echo "ERROR: Post not found!";

                     }else{

                        
                   while ($row = mysqli_fetch_assoc($search_result)) {
                    $post_id = $row["post_id"];
                    $post_title = $row["post_title"];
                    $post_author = $row["post_author"];
                    $post_date = $row["post_date"];
                    $post_image = $row["post_image"];
                    $post_content = substr($row["post_content"],0,150);

                    ?>

            <h2> <a href='post.php?post_id=<?php echo $post_id; ?>'>
                    <?php echo $post_title; ?>
                </a> </h2>
            <p>by <a href='index.php'>
                    <?php echo $post_author ?>
                </a></p>
            <p>Posted on
                <?php echo $post_date ?> at 10:00 AM
            </p>
            <hr>
            <a href='post.php?post_id=<?php echo $post_id; ?>'><img class='size' src='images/<?php echo $post_image ?>'
                    alt=''></a>
            <hr>
            <p>
                <?php echo $post_content; ?>
            </p>
            <a class='btn btn-primary' href='post.php?post_id=<?php echo $post_id; ?>'>Read More >></a>
            <hr>


            <?php
                    
                        }
                         }
                
                      }
                  ?>

        </div>
        <div class="col-md-4">
            <?php include("includes/sidebar.php"); ?>
        </div>

    </div>

    <ul align="center">
        <li> <a href="#">&larr; Older</a></li>
        <li><a href="#">Newer &rarr;</a></li>
    </ul>

    <?php include("includes/footer.php"); ?>
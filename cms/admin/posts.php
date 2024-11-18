<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/sidebar.php"); ?>
    <div class="col-md-10 bg-light pad">
        <h1 class="head">Our Posts<small> Page </small></h1>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>Post Id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>
                <?php
                    $total_posts = "SELECT * FROM posts";
                    $result = mysqli_query($conn,$total_posts);
                    $no=0;

                    while($row = mysqli_fetch_assoc($result)){
                        $no=$no+1;
                        $post_id = $row["post_id"];
                        $post_title = $row["post_title"];
                        $post_author = $row["post_author"];
                        $post_date = $row["post_date"];
                        $post_image = $row["post_image"];
                ?>
                    <tr>
                        <th><?php echo $no  # $post_id ?></th>
                        <td><?php echo $post_title ?></td>
                        <td><?php echo $post_author ?></td>
                        <td><?php echo $post_date ?></td>
                        <td><img src='../images/<?php echo $post_image ?>' width='100' height='50'></td>
                        <td><a href="posts.php?post_id=<?php  echo $post_id; ?>"><button class="btn btn-danger" onclick= "return confirm('Are u sure you want to delete')">Delete</button></a></td>
                    </tr>
                
                <?php        
                    }
                ?>
                
        </table>
                <?php
                    if(isset($_GET["post_id"])){

                        $the_post_id = $_GET["post_id"];
                    
                         
                     $delete = "DELETE  FROM posts WHERE post_id = $the_post_id";
                        $result2 = mysqli_query($conn,$delete);
                        if($result2){
                            // echo "Post Deleted";
                            // header("Location: posts.php");
                            exit();
                        }
                    }
                ?>
            </div>
 <?php include("includes/footer.php"); ?>  
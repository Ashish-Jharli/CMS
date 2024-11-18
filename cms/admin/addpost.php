<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php include("includes/conn.php"); 

$post_titleErr=$post_authorErr=$post_dateErr=$post_imageErr=$post_contentErr=$post_tagsErr="";

$post_title=$post_author=$post_date=$post_image=$post_content=$post_tags="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(empty($_POST['post_title'])){
        $post_titleErr = "post title is required";
    }else{
        $post_title = $_POST['post_title'];
    }
    
    if(empty($_POST['post_author'])){
        $post_authorErr = "post author is required";
    }else{
        $post_author = $_POST['post_author'];
    }

    if(empty($_POST['post_date'])){
        $post_dateErr = "post date is required";
    }else{
        $post_date = $_POST['post_date'];
    }

    if(empty($_POST['post_content'])){
        $post_contentErr = "post content is required";
    }else{
        $post_content = $_POST['post_content'];
    }

    if(empty($_POST['post_tags'])){
        $post_tagsErr = "post tags is required";
    }else{
        $post_tags = $_POST['post_tags'];
    }
}

if(empty($post_titleErr) && empty($post_authorErr) && empty($post_dateErr) && empty($post_contentErr) && empty($post_tagsErr)){

    if(!empty($_POST['post_title'])){
        $path = "../images";
        $photo = $_FILES['post_image']['name'];
        $image_extension = pathinfo($photo, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        if(move_uploaded_file($_FILES["post_image"]["tmp_name"], $path.'/'.$filename)){

            $sql = "INSERT INTO posts(post_title, post_author, post_date, post_image, post_content, post_tags) VALUES('".$_POST['post_title']."','".$_POST['post_author']."','".$_POST['post_date']."','".$filename."','".$_POST['post_content']."','".$_POST['post_tags']."')";

            // if($conn->query($sql)==true){
            //     echo "inserted successfully";
            // }else{
            //     echo "Error: ".$sql.$conn->connect_error;
            // }

            if($conn->query($sql)==false){
                echo "Error: ".$sql.$conn->connect_error;
            }
        }
    }

}

?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    .error{
        color:red;
    }
</style>
    <div class="col-md-10 bg-light pad">
        <h1 class="head">Add New <small> Posts </small></h1>
        <hr>
        <form method="POST" enctype="multipart/form-data" action="<?php echo($_SERVER['PHP_SELF']); ?>">

            <div class="mb-3">
            <label for="post_title" class="form-label">post_title:</label>
            <span class="error">*<?php echo $post_titleErr; ?></span>
            <input type="text" name="post_title" id="post_title" class="form-control">
            </div>
            <div class="mb-3">
            <label for="post_author" class="form-label">post_author:</label>
            <span class="error">*<?php echo $post_authorErr; ?></span>
            <input type="text" name="post_author" id="post_author" class="form-control">
            </div>
            <div class="mb-3">
            <label for="post_date" class="form-label">post_date:</label>
            <span class="error">*<?php echo $post_dateErr; ?></span>
            <input type="date" name="post_date" id="post_date" class="form-control">
            </div>
            <div class="mb-3">
            <label for="post_image" class="form-label">post_image:</label>
            <span class="error">*<?php echo $post_imageErr; ?></span>
            <input type="file" name="post_image" id="post_image" accept=".jpg,.jpeg,.png,.avif"  class="form-control">
            </div>
            <div class="mb-3">
            <label for="post_content" class="form-label">post_content:</label>
            <!-- <input type="text" name="post_content" id="post_content"> -->
            <span class="error">*<?php echo $post_contentErr; ?></span>
            <textarea name="post_content" id="post_content" class="form-control"></textarea>
            </div>
            <div class="mb-3">
            <label for="post_tags" class="form-label">post_tags:</label>
            <span class="error">*<?php echo $post_tagsErr; ?></span>
            <input type="text" name="post_tags" id="post_tags" class="form-control">
            </div>
            <!-- <input type="submit" value="Submit"> -->
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>

    </div>
 <?php include("includes/footer.php"); ?>      
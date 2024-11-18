
  <?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/sidebar.php"); ?>

<?php include("includes/conn.php"); 

$cat_titleErr="";
$cat_title="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

  if(empty($_POST['cat_title'])){
    $cat_titleErr = "Category is required";
  }else{
    $cat_title = $_POST['cat_title'];
  }
}

if(empty($cat_titleErr)){

  if(!empty($_POST['cat_title'])){

    $sql = "INSERT INTO categories(cat_title) VALUE('".$_POST['cat_title']."')";

    if($conn->query($sql)==false){
      echo "Error: ".$sql. $conn->connect_error;
    }
  }
}

?>


  <div class="col-md-10 bg-light pad">
      <h1 class="head">Our Category Page <code>&</code> <small>Add New Category </small></h1>
      <hr>
      <div class="container d-flex" style="gap:5%;">
                
      <form style="max-width: 40%; width:100%;" method="POST" enctype="multipart/form-data" action="<?php echo($_SERVER['PHP_SELF']);?>">
        <div class="form-group">
          <label for="category" class="h4 fw-bold mb-2 mx-1 mt-4">Add New Category</label>
          <input type="text" class="form-control" id="category" name="cat_title">
          <span class="error" style="color:red;"><?php echo $cat_titleErr; ?></span>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <input type="submit" name="submit" id="login-submit" tabindex="4" class="btn btn-login btn-primary h-75 m-2">
              <!-- value="Add Category" -->
            </div>
          </div>
        </div>
      </form>
      
      <table class="table-striped" style="width:100%;" border>
          <tr>
            <th class="p-3">Category Id</th>
            <th>Category Title</th>
            <th class="text-center">Action</th>
          </tr>
          <?php
              $total_cat = "SELECT * FROM categories";
              $result = mysqli_query($conn,$total_cat);
              $no=0;

              while ($row = mysqli_fetch_assoc($result)) {
                $cat_id = $row["cat_id"];
                $cat_title = $row["cat_title"];
                $no = $no +1;
          ?>
          <tr>
            <th class="p-3"><?php echo $no # $cat_id ?></th>
            <td><?php echo $cat_title ?></td>
            <td class="text-center">
              <a href="categories.php?cat_id=<?php echo $cat_id; ?>" >
                <button class="btn btn-danger" onclick= "return confirm('Are u sure you want to delete');">Delete</button>
              </a>
            </td>
          </tr>

      <?php
        }
      ?>
        </table>
        <?php
        if(isset($_GET["cat_id"])){

          $the_cat_id = $_GET["cat_id"];

          $delete = "DELETE FROM categories WHERE cat_id = $the_cat_id";
          $result2 = mysqli_query($conn, $delete);
          if($result2){
            // echo "Category Deleted";
            // header("Location: categories.php");
            exit();
          }
        }
        ?>
    </div>
  </div>

            </div>
 <?php include("includes/footer.php"); ?>      